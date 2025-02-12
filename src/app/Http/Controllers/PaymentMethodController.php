<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function showPaymentForm()
    {
        // データベースから支払い方法を取得
        $paymentMethods = PaymentMethod::all();

        // ビューにデータを渡す
        return view('payment-method', compact('paymentMethods'));
    }

    public function processPayment(Request $request)
    {

        // 選択された支払い方法を取得
        $selectedPayment = PaymentMethod::find($request->payment_method);

        // ここで支払い処理を追加する（必要に応じて）

        return redirect()->route('payment.success');
    }
}