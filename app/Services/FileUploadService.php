<?php

namespace App\Services;

class FileUploadService
{
    public function uploadFile($file)
    {
        try {
            // Generate a unique file name
            $nama_gambar = time() . '_' . $file->getClientOriginalName();
            
            // Define the destination path (public/uploads)
            $destinationPath = public_path('/uploads');
            
            // Move the file to the destination
            $file->move($destinationPath, $nama_gambar);
            
            // Return the URL/path to the saved file
            return '/uploads/' . $nama_gambar;
        } catch (\Throwable $th) {
            throw new \Exception('Failed to upload file: ' . $th->getMessage());
        }
    }
}