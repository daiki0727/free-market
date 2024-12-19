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

        if ($tab === 'seller') {
            // 出品商品
            $items = Item::where('user_id', $user->id)->get();
        } elseif ($tab === 'purchased') {
            // 購入商品（仮で空のコレクション）
            $items = collect();
        }

        return view('mypage', compact('user', 'items', 'tab'));
    }
}
