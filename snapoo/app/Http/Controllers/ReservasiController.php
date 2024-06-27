<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    //
    public function index()
    {
        $today = Carbon::today();
        // Mengambil jumlah reservasi yang belum diperiksa pada hari ini
        $jumlahReservasi = Reservasi::whereDate('created_at', $today)
            ->where('status', 'Sudah Bayar')
            ->count();

        // Mengambil detail reservasi yang belum diperiksa pada hari ini
        $reservasiBelumDiperiksa = Reservasi::whereDate('created_at', $today)
            ->where('status', 'Sudah Bayar')
            ->get();
        $data = Reservasi::all();
        return view('admin.reservasi.index', compact('data','jumlahReservasi','reservasiBelumDiperiksa'));
    }
    public function tambah(Request $request)
    {
        // Validasi request data reservasi di sini jika diperlukan

        // Ambil user yang sedang login
        $user = auth()->user();

        // Buat reservasi baru dengan order_id acak dan user_id
        $data = Reservasi::create(array_merge($request->all(), [
            'order_id' => uniqid(), // atau Str::random(10) untuk string acak
            'user_id' => $user->id
        ]));

        // Menghilangkan simbol 'Rp' dan tanda titik pada subtotal
        $subtotal = str_replace(['Rp', '.'], '', $request->subtotal);

        // Konversi subtotal ke tipe data integer
        $subtotal = intval($subtotal);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $data->order_id,
                'gross_amount' => $data->subtotal,
            ),
            'customer_details' => array(
                'first_name' => $request->nama,
                'phone' => $request->no_hp,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // Periksa apakah reservasi berhasil dibuat
        if ($data) {
            // Ambil nama paket dari data reservasi
            $nama_paket = $request->nama_paket; // Sesuaikan dengan nama field pada form reservasi

            // Temukan produk berdasarkan nama paket
            $produk = Produk::where('nama_paket', $nama_paket)->first();

            // Periksa apakah produk ditemukan
            if ($produk) {
                // Periksa apakah stok mencukupi
                if ($produk->slot > 0) {
                    // Kurangi stok
                    $produk->slot -= 1; // Misalnya, satu item dipesan

                    // Simpan perubahan stok ke dalam basis data
                    $produk->save();

                    // Redirect ke halaman welcome dengan pesan sukses
                    return view('admin.reservasi.payment', compact('data','snapToken'));
                } else {
                    // Jika stok tidak mencukupi, kembalikan dengan pesan kesalahan
                    return redirect()->back()->with('error', 'Stok tidak mencukupi untuk melakukan reservasi.');
                }
            } else {
                // Jika produk tidak ditemukan, kembalikan dengan pesan kesalahan
                return redirect()->back()->with('error', 'Produk tidak ditemukan.');
            }
        } else {
            // Jika reservasi gagal dibuat, kembalikan dengan pesan kesalahan
            return redirect()->back()->with('error', 'Gagal membuat reservasi. Silakan coba lagi.');
        }
    }
    public function update(Request $request, $id_reservasi)
    {
        $data = Reservasi::find($id_reservasi);
        $data->update($request->all());

        return redirect('reservasi')->with('pesan', 'Data berhasil diupdate');
    }

    public function hapus($id_reservasi)
    {
        $data = Reservasi::find($id_reservasi);
        $data->delete();
        return redirect('reservasi')->with('hapus', 'Data berhasil dihapus');
    }
}
