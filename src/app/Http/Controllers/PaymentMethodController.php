<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaymentMethodController extends Controller
{
    public function showPaymentForm(Request $request)
    {
        // 支払い方法を取得
        $paymentMethods = PaymentMethod::all();

        // 既存の取引を取得（もしあれば）
        $transaction = Transaction::where('buyer_id', auth()->id())->latest()->first();

        return view('payment-method', compact('paymentMethods', 'transaction'));
    }

    public function processPayment(Request $request)
    {
        // 最後の取引を取得（まだ取引が存在しない場合も考慮）
        $transaction = Transaction::where('buyer_id', auth()->id())->latest()->first();

        if ($transaction) {
            // 既存の取引がある場合は支払方法を更新
            $transaction->update([
                'payment_method_id' => $request->payment_method,
            ]);
        }

        // 支払方法変更後に transaction-page にリダイレクト
        return redirect()->route('transaction-page');
    }
}