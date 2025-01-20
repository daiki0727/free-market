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
        $tab = $request->input('tab', 'recommend'); // デフォルトはおすすめタブ

        // おすすめタブが選ばれている場合
        if ($tab === 'recommend') {
            $items = Item::all();  // おすすめ商品を取得（仮に全商品表示）
        }
        // マイリストタブが選ばれている場合
        elseif ($tab === 'mylist') {
            // ユーザーがお気に入りした商品を取得
            $items = $user->favorites; // お気に入りした商品（Userモデルに定義されたリレーション）
        }

        return view('home', compact('user', 'items', 'tab'));
    }

}
