<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;

class KeepController extends Controller
{
    public function index()
    {
        $images = Image::all();

        return view('keep', compact('images'));
    }

    // 店舗の画像を保存する
    public function store(Request $request)
    {
        $file_name = $request->file('image')->getClientOriginalName();

        $image = $request->file('image')->storeAs('public/images', $file_name);

        // DBに保存
        $image = new Image();
        $image->name = $file_name;
        $image->path = 'storage/images/' . $file_name;
        $image->save();

        return view('keep', compact('image'));
        }
}
