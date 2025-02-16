<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        // 商品情報を取得（例: IDをリクエストから取得）
        $item = Item::find($request->item_id);

        // アイテムが存在しない場合の処理
        if (!$item) {
            return redirect()->route('home');
        }

        return view('transaction-page', compact('item'));
    }

}