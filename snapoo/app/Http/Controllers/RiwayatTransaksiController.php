<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class RiwayatTransaksiController extends Controller
{
    public function index()
    {
     
    // Ambil user yang sedang login
    $user = auth()->user();

    // Ambil riwayat reservasi dari user
    $reservations = Reservasi::where('user_id', $user->id)->get();
     return view('user.history', compact('reservations'));
    }

    public function history()
{
    // Ambil user yang sedang login
    $user = auth()->user();

    // Ambil riwayat reservasi dari user
    $reservations = Reservasi::where('user_id', $user->id)->get();

    // Kirim data reservasi ke view
    return view('user.history', compact('reservations'));
}
    
   
}
