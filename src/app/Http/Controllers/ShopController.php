<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Region;
use App\Models\Shop;
use App\Models\ShopReserved;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    // 飲食店一覧ページ表示
    public function index()
    {
        $shops = Shop::all();
        $regions = Region::all();
        $genres = Genre::all();
        return view('index', compact('shops', 'regions' ,'genres'));
    }

    // 検索
    public function search(Request $request)
    {
        $regionKeyword = $request->input('region_keyword');
        $query = Shop::query();

        if (!empty($regionKeyword)) {
            $query->where('region', 'LIKE', "{$regionKeyword}");
        }

        $genreKeyword = $request->input('genre_keyword');
        if (!empty($genreKeyword)) {
            $query->where('genre', 'LIKE', "{$genreKeyword}");
        }

        $storeKeyword = $request->input('store_keyword');
        if (!empty($storeKeyword)) {
            $query->where('store_name', 'LIKE', "%{$storeKeyword}%");
        }

        $shops = $query->get();

        $regions = Region::all();
        $genres = Genre::all();

        return view('index', compact('shops', 'regions', 'genres'));
    }

    // 飲食店詳細ページ表示
    public function detail(Request $request, $shop_id)
    {
        $user = $request->user();
        $shop = Shop::find($shop_id);
        return view('detail', compact('user', 'shop'));
    }

    // 飲食店予約情報追加
    public function reserved(Request $request){
        $reservedShops = $request->only(['reserved_date', 'reserved_time', 'reserved_num', 'reserved_shop', 'user_id']);

        $reservedShops['reserved_datetime'] = $reservedShops['reserved_date'] . ' ' . $reservedShops['reserved_time'];

        ShopReserved::create($reservedShops);

        return redirect('done');
    }

    // 予約完了ページ表示
    public function done()
    {
        return view('done');
    }

    // マイページ表示
    public function mypage(Request $request)
    {
        $user = $request->user();
        $shopsReserved = User::find($user->id)->shopsReserved;

        $counter = 1;
        foreach ($shopsReserved as $shopReserved) {
            $dt = new Carbon($shopReserved['reserved_datetime']);
            $shopReserved['reserved_date'] = $dt->format('Y-m-d');
            $shopReserved['reserved_time'] = $dt->format('H:i');
            $shopReserved['number'] = $counter++;
        }

        return view('mypage', compact('user', 'shopsReserved', 'counter'));
    }

    // 飲食店予約情報削除
    public function remove(Request $request)
    {
        ShopReserved::find($request->id)->delete();
        return redirect('/mypage');
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

}
