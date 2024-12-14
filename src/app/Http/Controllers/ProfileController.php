<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        // ログイン中のユーザーのプロフィールを取得
        $user = Auth::user();
        $profile = $user->profile;

        // 画像の保存処理
        if ($request->hasFile('image_url')) {
            // 古い画像を削除
            if ($profile->image_url) {
                // URLからストレージパスに変換して削除
                $oldImagePath = str_replace(asset('storage'), '', $profile->image_url);
                Storage::disk('public')->delete($oldImagePath);
            }

            // 新しい画像を保存
            $path = $request->file('image_url')->store('profiles', 'public');
            // URL形式で保存
            $profile->image_url = asset('storage/' . $path);
        }

        // 他のプロフィール情報を更新
        $profile->nick_name = $request->nick_name;
        $profile->post_code = $request->post_code;
        $profile->address = $request->address;
        $profile->building = $request->building;
        $profile->save();

        // 更新完了後のリダイレクト
        return redirect()->back()->with('success', 'プロフィールを更新しました！');
    }
}
