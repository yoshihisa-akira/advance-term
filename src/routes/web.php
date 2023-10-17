<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

// 飲食店一覧ページ表示
Route::get('/', [AuthController::class, 'index']);

// 飲食店詳細ページ表示
Route::get('/detail/{shop_id}', [ShopController::class, 'detail']);

// テスト
Route::get('/test',[ShopController::class, 'test']);
