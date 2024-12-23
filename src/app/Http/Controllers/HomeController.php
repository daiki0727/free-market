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

        if ($tab === 'recommend') {
            // すべてのアイテムを取得
            $items = Item::all();
        } elseif ($tab === 'mylist') {
            // マイリスト
            $items = collect();
        }

        return view('home', compact('user', 'items', 'tab'));
    }
}
