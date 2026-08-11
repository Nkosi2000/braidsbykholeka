<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Support\CloudinaryUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('sort_order')->orderBy('name')->get();

        return view('admin.services.index', ['services' => $services]);
    }

    public function create()
    {
        return view('admin.services.form', ['service' => new Service()]);
    }

    public function store(Request $request)
    {
        $validated = $this->validateRequest($request);

        $service = new Service($validated);
        $service->slug = $this->uniqueSlug($validated['name']);

        if ($request->hasFile('image')) {
            $service->image_path = CloudinaryUploader::upload($request->file('image'), 'braidsbykholeka/services');
        }

        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'Service created.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.form', ['service' => $service]);
    }

    public function update(Request $request, Service $service)
    {
        $validated = $this->validateRequest($request, $service);

        $service->fill($validated);

        if ($validated['name'] !== $service->getOriginal('name')) {
            $service->slug = $this->uniqueSlug($validated['name'], $service->id);
        }

        if ($request->hasFile('image')) {
            $service->image_path = CloudinaryUploader::upload($request->file('image'), 'braidsbykholeka/services');
        }

        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'Service updated.');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service deleted.');
    }

    private function validateRequest(Request $request, ?Service $service = null): array
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'detailed_description' => 'nullable|string',
            'starting_price' => 'nullable|numeric|min:0',
            'duration' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
            'is_featured' => 'boolean',
            'sort_order' => 'nullable|integer',
            'icon_class' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:5120',
            'features' => 'nullable|string',
            'aftercare_tips' => 'nullable|string',
        ]);

        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;
        $validated['features'] = $this->linesToArray($request->input('features'));
        $validated['aftercare_tips'] = $this->linesToArray($request->input('aftercare_tips'));

        unset($validated['image']);

        return $validated;
    }

    private function linesToArray(?string $value): array
    {
        if (! $value) {
            return [];
        }

        return array_values(array_filter(array_map('trim', explode("\n", $value)), fn ($line) => $line !== ''));
    }

    private function uniqueSlug(string $name, ?int $ignoreId = null): string
    {
        $base = Str::slug($name);
        $slug = $base;
        $i = 1;

        while (Service::where('slug', $slug)->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))->exists()) {
            $slug = $base . '-' . ++$i;
        }

        return $slug;
    }
}
