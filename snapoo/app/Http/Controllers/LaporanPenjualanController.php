<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Dompdf\Options;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class LaporanPenjualanController extends Controller
{
    public function index(Request $request)
    {
        $today = Carbon::today();
        // Mengambil jumlah reservasi yang belum diperiksa pada hari ini
        $jumlahReservasi = Reservasi::whereDate('created_at', $today)
            ->where('status', 'paid')
            ->count();

        // Mengambil detail reservasi yang belum diperiksa pada hari ini
        $reservasiBelumDiperiksa = Reservasi::whereDate('created_at', $today)
            ->where('status', 'paid')
            ->get();
        $laporan = collect(); // Menggunakan koleksi kosong sebagai default
        $tanggal_awal = $request->input('tanggal_awal', '');
        $tanggal_akhir = $request->input('tanggal_akhir', '');

        if ($request->has(['tanggal_awal', 'tanggal_akhir'])) {
            $laporan = \App\Models\Reservasi::whereBetween('tanggal', [$request->tanggal_awal, $request->tanggal_akhir])
                ->select('id_reservasi', 'tanggal', 'nama', 'nama_paket', 'subtotal', 'status')
                ->get();
        }

        // Mengirim data ke view
        return view('admin.laporan.laporanpenjualan', compact('laporan', 'tanggal_awal', 'tanggal_akhir','jumlahReservasi','reservasiBelumDiperiksa'));
    }

    public function exportPDF(Request $request)
    {
        $tanggal_awal = $request->input('tanggal_awal');
        $tanggal_akhir = $request->input('tanggal_akhir');

        $laporan = \App\Models\Reservasi::whereBetween('tanggal', [$tanggal_awal, $tanggal_akhir])
            ->select('id_reservasi', 'tanggal', 'nama', 'nama_paket', 'subtotal', 'status')
            ->get();

        $pdf = FacadePdf::loadView('admin.laporan.pdf', compact('laporan', 'tanggal_awal', 'tanggal_akhir'));
        return $pdf->download('laporan-penjualan.pdf');
    }

  
   
}
