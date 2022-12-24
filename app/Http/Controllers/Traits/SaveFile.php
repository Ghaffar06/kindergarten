<?php


namespace App\Http\Controllers\Traits;


use Illuminate\Http\UploadedFile;

trait SaveFile
{
    public function saveFile(UploadedFile $file, $path, $name)
    {
        $url = $name . time() . '.' . $file->extension();
        $file->move(public_path($path), $url);
        return $path . '/' . $url;
    }
}
