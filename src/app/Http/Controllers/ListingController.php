<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Condition;
use App\Models\Color;
use App\Models\Brand;
use App\Models\Item; 

class ListingController extends Controller
{
    public function show()
    {

        $categories = Category::all();
        $conditions = Condition::all();
        $colors = Color::all();
        $brands = Brand::all();

        return view('listing', compact('categories', 'conditions', 'brands', 'colors'));
    }

    public function store(Request $request)
    {
        // リクエストデータの取得
        $validatedData = $request->only([
            'item_name',
            'description',
            'category_id',
            'condition_id',
            'color_id',
            'brand_id',
            'price'
        ]);

        // 画像の保存
        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('images', 'public');
            $validatedData['image_url'] = $path;
        }

        // ログインユーザーのIDを設定
        $validatedData['user_id'] = Auth::id();

        // データベースに保存
        Item::create($validatedData);

        return redirect()->route('item');
    }
}
