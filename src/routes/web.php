<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

// 飲食店一覧ページ表示
Route::get('/', [AuthController::class, 'index']);

// 飲食店詳細ページ表示
Route::get('/detail/{shop_id}', [ShopController::class, 'detail']);

// 会員登録ページ表示
Route::get('/register', [AuthController::class, 'register']);

// 会員登録情報送信
Route::post('/register', [AuthController::class, 'registerPost']);

// サンクスページ表示
Route::get('/thanks', [AuthController::class, 'thanks']);

// ログインページ表示
Route::get('/login', [AuthController::class, 'login']);

// menu1ページ表示
Route::get('/menu1', [AuthController::class, 'menu1']);

Route::get('/menu2', [AuthController::class, 'menu2']);

// テスト
Route::get('/test',[ShopController::class, 'test']);
