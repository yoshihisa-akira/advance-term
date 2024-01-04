<?php

namespace App\Http\Controllers;

use App\Models\FavoriteShop;
use App\Models\Genre;
use App\Models\Region;
use App\Models\Shop;
use App\Models\ShopEvaluation;
use App\Models\ShopReserved;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    // 飲食店一覧ページ表示
    public function index(Request $request)
    {
        $user = $request->user();
        $shops = Shop::all();
        $regions = Region::all();
        $genres = Genre::all();
        if(empty($user->id)){
            return view('index', compact('user', 'shops', 'regions', 'genres'));
        }else{
            $favoriteShops = FavoriteShop::where('user_id', $user->id)->get();
        }


        $flg = true;
        foreach($shops as $shop)
        if($flg){
            break;
        }

        return view('index', compact('user', 'shops', 'regions' ,'genres','favoriteShops', 'flg'));
    }

    // 検索
    public function search(Request $request)
    {
        $user = $request->user();
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

        if (empty($user->id)) {
            return view('index', compact('user', 'shops', 'regions', 'genres'));
        } else {
            $favoriteShops = FavoriteShop::where('user_id', $user->id)->get();
        }

        return view('index', compact('shops', 'regions','genres', 'favoriteShops', 'user'));
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

        $favoriteShops = FavoriteShop::where('user_id', $user->id)->get();


        return view('mypage', compact('user', 'shopsReserved', 'counter', 'favoriteShops'));
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

    // サンクスページ表示
    public function thanks()
    {
        return view('thanks');
    }

    // お気に入り情報追加
    public function favorite(Request $request)
    {
        $favoriteShops = $request->all();
        FavoriteShop::create($favoriteShops);

        return redirect('/');
    }

    // マイページからお気に入り情報削除
    public function delete(Request $request)
    {
        FavoriteShop::find($request->id)->delete();

        return redirect('/mypage');
    }

    // 飲食店一覧ページからお気に入り情報削除
    public function favoriteRemove(Request $request)
    {
        FavoriteShop::find($request->id)->delete();

        return redirect('/');
    }

    // 飲食店予約情報変更
    public function update(Request $request)
    {
        $reservedShops = $request->only(['id','reserved_date', 'reserved_time', 'reserved_num', 'reserved_shop', 'user_id']);

        $reservedShops['reserved_datetime'] = $reservedShops['reserved_date'] . ' ' . $reservedShops['reserved_time'];

        unset($reservedShops['_token']);
        ShopReserved::find($request->id)->update($reservedShops);

        return redirect('/mypage');
    }

    // 評価入力ページ表示
    public function evaluationCreate(Request $request, $id)
    {
        $user = $request->user();
        $shopReserved = ShopReserved::find($id);

        return view('evaluationCreate', compact('shopReserved', 'user'));
    }

    // 評価情報追加
    public function evaluationAdd(Request $request)
    {
        $evaluations = $request->all();
        ShopEvaluation::create($evaluations);

        return redirect('/mypage');
    }

    // 評価ページ表示
    public function evaluation(Request $request, $shop_id)
    {
        $shop = Shop::find($shop_id);
        $shopsEvaluation = ShopEvaluation::all();

        return view('evaluation', compact('shop', 'shopsEvaluation'));
    }
}
