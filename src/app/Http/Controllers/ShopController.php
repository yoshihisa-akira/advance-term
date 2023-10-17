<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function detail($shop_id)
    {
        $item = [
            'param' => $shop_id
        ];
        return view('index', $item);
    }

    public function test()
    {
        return view('register');
    }
}
