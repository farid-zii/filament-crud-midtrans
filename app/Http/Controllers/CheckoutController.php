<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class CheckoutController extends Controller
{
    public function process(Request $request)
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Data transaksi
        $transactionDetails = [
            'order_id' => uniqid(),
            'gross_amount' => $request->amount,
        ];

        $customerDetails = [
            'first_name' => $request->name,
            'email' => $request->email,
        ];

        $transaction = [
            'transaction_details' => $transactionDetails,
            'customer_details' => $customerDetails,
        ];

        // Mendapatkan token transaksi
        $snapToken = Snap::getSnapToken($transaction);

        // Mengirimkan token ke view untuk ditampilkan
        return view('checkout.payment', ['snapToken' => $snapToken]);
    }
}
