<?php

namespace App\Support;

use Illuminate\Http\UploadedFile;

class CloudinaryUploader
{
    public static function upload(UploadedFile $file, string $folder): string
    {
        $result = cloudinary()->uploadApi()->upload($file->getRealPath(), [
            'folder' => $folder,
        ]);

        return $result['secure_url'];
    }
}
