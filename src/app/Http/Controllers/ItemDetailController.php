<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemDetailController extends Controller
{
    public function index($id)
    {
        // リレーションとカウントを取得
        $item = Item::with(['brand', 'category', 'condition', 'user', 'color'])
            ->withCount(['favorites', 'comments']) // お気に入り数とコメント数を追加
            ->findOrFail($id);

        return view('item-detail', compact('item'));
    }
}
