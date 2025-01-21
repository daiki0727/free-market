<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuildingController extends Controller
{
    public function show()
    {
        return view('building');
    }

    public function update(Request $request)
    {
        // ログイン中のユーザーのプロフィールを取得
        $user = Auth::user();
        $profile = $user->profile;

        // 住所の更新
        $profile->post_code = $request->post_code;
        $profile->address = $request->address;
        $profile->building = $request->building;
        $profile->save();

        // 更新完了後のリダイレクト
        return redirect()->back();
    }
}