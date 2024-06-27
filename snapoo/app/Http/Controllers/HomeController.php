<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Reservasi;
use App\Models\Services;
use App\Models\Waktu;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\Web\Service;

class HomeController extends Controller
{
    //

    public function index()
    {
         // Mengambil riwayat reservasi yang terkait dengan pengguna yang login
          // Cek apakah pengguna sudah login untuk mengambil riwayat reservasi
          if (auth()->check()) {
            $reservationHistory = Reservasi::where('nama', auth()->user()->nama)->get();
        } else {
            $reservationHistory = []; // Tetapkan sebagai array kosong jika tidak login
        }

        $times = Waktu::all();
        $data = Produk::all();
        $services = Services::all();
        return view('user.welcome', compact('data','services','times','reservationHistory'));
    }
    public function home()
    {
         // Mengambil riwayat reservasi yang terkait dengan pengguna yang login
        $reservationHistory = Reservasi::where('nama', auth()->user()->nama)->get();
        $times = Waktu::all();
        $data = Produk::all();
        $services = Services::all();
        return view('user.welcome', compact('data','services','times','reservationHistory'));
    }
}
