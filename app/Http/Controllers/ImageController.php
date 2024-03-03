<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function showForm()
    {
        return view('upload');
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/room'), $imageName);

        $imagePath = asset("images/room/$imageName");
        $relativeImagePath = str_replace('http://127.0.0.1:8000/', '', $imagePath);
        echo $relativeImagePath;
        return view('upload', compact('relativeImagePath'))->with('success', 'Image uploaded successfully.');
    }

}
