<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use Midtrans\Snap;
use Midtrans\Config;

class PaymentController extends Controller
{
    public function __construct()
    {
        // Atur kredensial Midtrans
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function payment(Request $request)
    {
        // Buat transaksi baru di Midtransz
        $transactionParams = [
            'transaction_details' => [
                'order_id' => 'ORDER-' . time(),
                'gross_amount' => $request->subtotal,
            ],
            'customer_details' => [
                'first_name' => $request->nama,
                'email' => $request->email,
                'phone' => $request->no_hp,
            ],
            'item_details' => [
                [
                    'id' => 'PROD-' . time(),
                    'price' => $request->subtotal,
                    'quantity' => 1,
                    'name' => $request->nama_paket,
                    
                ],
            ],
        ];

        // Dapatkan token pembayaran dari Midtrans
        $snapToken = Snap::getSnapToken($transactionParams);

        // Kembalikan token ke halaman pembayaran
        return view('midtrans.payment', compact('snapToken'));
    }
    public function paymentSuccess(Request $request)
    {
        // Update status pembayaran di database
        $order_id = $request->query('order_id');
        $reservasi = Reservasi::where('order_id', $order_id)->first();
        if ($reservasi) {
            $reservasi->status = 'Sudah Bayar';
            $reservasi->save();
        }

        // Redirect ke halaman detail pembayaran sukses dengan data yang diperlukan
        return view('admin.reservasi.payment_success', [
            'order_id' => $order_id,
            'nama' => $request->query('nama'),
            'no_hp' => $request->query('no_hp'),
            'alamat' => $request->query('alamat'),
            'subtotal' => $request->query('subtotal')
        ]);
    }
}
