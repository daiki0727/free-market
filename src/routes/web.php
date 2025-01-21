<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ItemDetailController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\BuildingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 会員登録処理
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

// ログイン処理
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

// ログアウト処理
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

//メール認証
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

//メール確認リンクリクエスト処理
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/profile');
})->middleware(['auth', 'signed'])->name('verification.verify');

//メール再送信
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back();
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// ホーム画面表示
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

//マイページ画面表示
Route::get('/mypage', [MypageController::class, 'index'])
    ->name('mypage')
    ->middleware('auth');

// プロフィール画面表示
Route::get('/profile', [ProfileController::class, 'show'])
    ->name('profile')
    ->middleware('auth');

// プロフィール情報編集
Route::post('/update-profile', [ProfileController::class, 'update'])
    ->name('profile.update')
    ->middleware('auth');

// 出品画面表示
Route::get('/item', [ListingController::class, 'show'])
    ->name('item')
    ->middleware('auth');

// 出品機能
Route::post('/item-listing', [ListingController::class, 'store'])
    ->name('item-listing')
    ->middleware('auth');

// 商品詳細画面表示
Route::get('/item-detail/{id}', [ItemDetailController::class, 'index'])
    ->name('item-detail');

//お気に入り登録機能
Route::post('/items/{item}/favorite', [FavoriteController::class, 'toggle'])
    ->name('items.favorite.toggle')
    ->middleware('auth');

// 住所変更画面表示
Route::get('/building', [BuildingController::class, 'show'])
    ->name('profile')
    ->middleware('auth');

// 住所変更機能
Route::post('/change-building', [BuildingController::class, 'update'])
    ->name('change.building')
    ->middleware('auth');
