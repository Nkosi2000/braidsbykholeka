<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioItem;
use App\Support\CloudinaryUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioItemController extends Controller
{
    public function index()
    {
        $items = PortfolioItem::orderBy('sort_order')->orderBy('title')->get();

        return view('admin.portfolio.index', ['items' => $items]);
    }

    public function create()
    {
        return view('admin.portfolio.form', ['item' => new PortfolioItem()]);
    }

    public function store(Request $request)
    {
        $validated = $this->validateRequest($request);

        $item = new PortfolioItem($validated);
        $item->slug = $this->uniqueSlug($validated['title']);

        if ($request->hasFile('main_image')) {
            $item->main_image = CloudinaryUploader::upload($request->file('main_image'), 'braidsbykholeka/portfolio');
        }

        if ($request->hasFile('gallery_images')) {
            $item->gallery_images = array_map(
                fn ($file) => CloudinaryUploader::upload($file, 'braidsbykholeka/portfolio'),
                $request->file('gallery_images')
            );
        }

        $item->save();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item created.');
    }

    public function edit(PortfolioItem $portfolio)
    {
        return view('admin.portfolio.form', ['item' => $portfolio]);
    }

    public function update(Request $request, PortfolioItem $portfolio)
    {
        $validated = $this->validateRequest($request, $portfolio);

        $portfolio->fill($validated);

        if ($validated['title'] !== $portfolio->getOriginal('title')) {
            $portfolio->slug = $this->uniqueSlug($validated['title'], $portfolio->id);
        }

        if ($request->hasFile('main_image')) {
            $portfolio->main_image = CloudinaryUploader::upload($request->file('main_image'), 'braidsbykholeka/portfolio');
        }

        if ($request->hasFile('gallery_images')) {
            $newGalleryUrls = array_map(
                fn ($file) => CloudinaryUploader::upload($file, 'braidsbykholeka/portfolio'),
                $request->file('gallery_images')
            );
            $portfolio->gallery_images = array_merge($portfolio->gallery_images ?? [], $newGalleryUrls);
        }

        $portfolio->save();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item updated.');
    }

    public function destroy(PortfolioItem $portfolio)
    {
        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item deleted.');
    }

    private function validateRequest(Request $request, ?PortfolioItem $item = null): array
    {
        $mainImageRule = ($item && $item->exists) ? 'nullable|image|max:5120' : 'required|image|max:5120';

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:255',
            'style_type' => 'nullable|string|max:255',
            'hair_type' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'is_featured' => 'boolean',
            'sort_order' => 'nullable|integer',
            'main_image' => $mainImageRule,
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'image|max:5120',
            'tags' => 'nullable|string',
            'client_feedback' => 'nullable|string',
            'client_initials' => 'nullable|string|max:255',
        ]);

        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;
        $validated['tags'] = $this->commaToArray($request->input('tags'));

        unset($validated['main_image'], $validated['gallery_images']);

        return $validated;
    }

    private function commaToArray(?string $value): array
    {
        if (! $value) {
            return [];
        }

        return array_values(array_filter(array_map('trim', explode(',', $value)), fn ($tag) => $tag !== ''));
    }

    private function uniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($title);
        $slug = $base;
        $i = 1;

        while (PortfolioItem::where('slug', $slug)->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))->exists()) {
            $slug = $base . '-' . ++$i;
        }

        return $slug;
    }
}
