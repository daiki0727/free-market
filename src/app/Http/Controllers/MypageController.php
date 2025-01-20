<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class MypageController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $tab = $request->input('tab', 'seller'); // デフォルトは出品商品

        // デフォルトで空のコレクションを設定
        $items = collect();

        if ($tab === 'seller') {
            // 出品商品
            $items = Item::where('user_id', $user->id)->get();
        } elseif ($tab === 'purchased') {
            // 購入商品（仮で空のコレクション）
            $items = collect();
        } else {
            // 他のタブが選択された場合（例えば、デフォルト値や無効なtab）
            $items = collect(); // 空のコレクションを設定
        }

        return view('mypage', compact('user', 'items', 'tab'));
    }

}