<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function showImage(Request $request, string $folder, string $imageName){
        $folderPublic = 'public/' . $folder;

        if(!Storage::exists($folderPublic)){
            return response()->json(['error' => 'La carpeta no fue encontrada'], 404);
        }

        $imagePath = $folderPublic  . '/' . $imageName;

        if(!Storage::exists($imagePath)){
            return response()->json(['error', 'La imagen no fue encontrada'], 404);
        }

        $file = Storage::get($imagePath);
        $type = Storage::mimeType($imagePath);

        return Response::make($file, 200, [
            'Content-Type' => $type,
            'Content-Disposition' => 'inline; filename="' . $imageName . '"'
        ]);
    }
}
