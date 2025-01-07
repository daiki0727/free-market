<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $user = Auth::user();
        $tab = $request->input('tab', 'recommend'); // デフォルトはおすすめ

        // $itemsはデフォルトで空のコレクションに設定
        $items = collect();

        if ($tab === 'recommend') {
            // すべてのアイテムを取得
            $items = Item::all();
        } elseif ($tab === 'mylist') {
            // マイリスト: ここでも空のコレクションを使うことができる
            $items = collect();  // もしくは、ユーザーのお気に入りやマイリストに該当するアイテムを取得する
        }

        return view('home', compact('user', 'items', 'tab'));
    }


}
