<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Item;

class FavoriteController extends Controller
{
    public function toggle(Request $request, $itemId)
    {
        $user = $request->user(); // 現在のログインユーザーを取得
        $favorite = Favorite::where('user_id', $user->id)->where('item_id', $itemId)->first();

        if ($favorite) {
            $favorite->delete(); // 既にお気に入りの場合、削除
        } else {
            Favorite::create([
                'user_id' => $user->id,
                'item_id' => $itemId, // お気に入りを新規作成
            ]);
        }

        return redirect()->back(); // 元のページにリダイレクト
    }
}
