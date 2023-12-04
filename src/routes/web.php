<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

// 飲食店一覧ページ表示
Route::get('/', [ShopController::class, 'index']);

// 検索(エリア、ジャンル、店名)
Route::get('/search', [ShopController::class, 'search']);

// 飲食店詳細ページ表示
Route::get('/detail/{shop_id}', [ShopController::class, 'detail']);
// 飲食店予約情報追加
Route::post('/detail', [ShopController::class, 'reserved']);

// 予約完了ページ表示
Route::get('/done', [ShopController::class, 'done']);

Route::middleware('auth')->group(function () {
    // マイページ表示
    Route::get('/mypage', [ShopController::class, 'mypage']);
    // 飲食店予約情報削除
    Route::post('/mypage', [ShopController::class, 'remove']);
    // menu1ページ表示
    Route::get('/menu1', [ShopController::class, 'menu1']);
});

// menu2ページ表示
Route::get('/menu2', [ShopController::class, 'menu2']);


// テスト
Route::get('/test',[ShopController::class, 'test']);
