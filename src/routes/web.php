<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

// 飲食店一覧ページ表示
Route::get('/', [AuthController::class, 'index']);

// 飲食店詳細ページ表示
Route::get('/detail/{shop_id}', [ShopController::class, 'detail']);

// 仙人詳細表示
Route::get('/sennin', [AuthController::class, 'sennin']);

// 牛助詳細表示
Route::get('/gyuusuke', [AuthController::class, 'gyuusuke']);

// 戦慄詳細表示
Route::get('/senritu', [AuthController::class, 'senritu']);

// ルーク詳細表示
Route::get('/ru-ku', [AuthController::class, 'ru-ku']);

// 志摩屋詳細表示
Route::get('/simaya', [AuthController::class, 'simaya']);

// 香詳細表示
Route::get('/kaoru', [AuthController::class, 'kaoru']);

// JJ詳細表示
Route::get('/jj', [AuthController::class, 'jj']);

// らーめん極み詳細表示
Route::get('/ramenkiwami', [AuthController::class, 'ramenkiwami']);

// 鳥雨詳細表示
Route::get('/tyouu', [AuthController::class, 'tyouu']);

// 築地色合詳細表示
Route::get('/tukizi', [AuthController::class, 'tukizi']);

// 晴海詳細表示
Route::get('/harumi', [AuthController::class, 'harumi']);

// 三子詳細表示
Route::get('/mitugo', [AuthController::class, 'mitugo']);

// 八戒詳細表示
Route::get('/hakkai', [AuthController::class, 'hakkai']);

// 福助詳細表示
Route::get('/hukusuke', [AuthController::class, 'hukusuke']);

// ラー北詳細表示
Route::get('/rakita', [AuthController::class, 'rakita']);

// 翔詳細表示
Route::get('/syou', [AuthController::class, 'syou']);

// 経緯詳細表示
Route::get('/keii', [AuthController::class, 'keii']);

// 漆詳細表示
Route::get('/urusi', [AuthController::class, 'urusi']);

// THE TOOL詳細表示
Route::get('/tool', [AuthController::class, 'tool']);

// 木船詳細表示
Route::get('/kibune', [AuthController::class, 'kibune']);

// 会員登録ページ表示
Route::get('/register', [AuthController::class, 'register']);

// サンクスページ表示
Route::get('/thanks', [AuthController::class, 'thanks']);

// ログインページ表示
Route::get('/login', [AuthController::class, 'login']);

// menu1ページ表示
Route::get('/menu1', [AuthController::class, 'menu1']);

// menu2ページ表示
Route::get('/menu2', [AuthController::class, 'menu2']);

// マイページ表示
Route::get('/mypage', [AuthController::class, 'mypage']);

// 予約完了ページ表示
Route::get('/done', [AuthController::class, 'done']);

// テスト
Route::get('/test',[ShopController::class, 'test']);
