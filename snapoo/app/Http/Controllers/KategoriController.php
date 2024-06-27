<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Reservasi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function index()
    {
        $kategori = Kategori::all();
        // Menghitung total semua pendapatan dari reservasi
        $totalRevenue = Reservasi::sum('subtotal');
        // Mendapatkan tanggal hari ini
        $today = Carbon::today();
 // Mengambil jumlah reservasi yang belum diperiksa pada hari ini
        $jumlahReservasi = Reservasi::whereDate('created_at', $today)
            ->where('status', 'paid')
            ->count();

        // Mengambil detail reservasi yang belum diperiksa pada hari ini
        $reservasiBelumDiperiksa = Reservasi::whereDate('created_at', $today)
            ->where('status', 'paid')
            ->get();
        // Mengambil data reservasi yang terjadi hari ini
        $reservationsToday = Reservasi::whereDate('created_at', $today)->get();
      
        $reservations = Reservasi::all();
        $totalReservations = $reservations->count();
        $noReservationsToday = $reservationsToday->isEmpty();
        // Menghitung total penjualan per bulan
        $salesPerMonth = Reservasi::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as total')
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();
        // Menggunakan dd() untuk memeriksa hasil query
        // dd($salesPerMonth);
        return view('admin.kategori.index', compact('jumlahReservasi', 'totalRevenue', 'today', 'jumlahReservasi', 'reservasiBelumDiperiksa', 'reservationsToday', 'totalReservations', 'noReservationsToday', 'salesPerMonth', 'kategori'));
    }
    public function store(Request $request)
    {
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect('kategori');
    }
}
