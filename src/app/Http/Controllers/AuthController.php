<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // 飲食店一覧ページ表示
    public function index()
    {
        return view('index');
    }

    // 仙人詳細表示
    public function sennin()
    {
        return view('sennin');
    }

    // 会員登録ページ表示
    public function register()
    {
        return view('register');
    }

    // サンクスページ表示
    public function thanks()
    {
        return view('thanks');
    }

    // ログインページ表示
    public function login()
    {
        return view('login');
    }

    // menu1ページ表示
    public function menu1()
    {
        return view('menu1');
    }

    // menu2ページ表示
    public function menu2()
    {
        return view('menu2');
    }

    // マイページ表示
    public function mypage()
    {
        return view('mypage');
    }

    // 予約完了ページ表示
    public function done()
    {
        return view('done');
    }
}
