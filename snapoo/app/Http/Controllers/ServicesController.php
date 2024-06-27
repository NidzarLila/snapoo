<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\Services;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\Web\Service;

class ServicesController extends Controller
{
    public function index()
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
        $services = Services::all();
        return view('admin.services.index ', compact('services','jumlahReservasi','reservasiBelumDiperiksa'));
    }

    public function tambah()
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

        $services = Services::all();
        return view('admin.services.tambah ', compact('services','jumlahReservasi','reservasiBelumDiperiksa'));
    }

    public function store(Request $request)
    {

        $data = Services::create($request->all());

        return redirect('services')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id_services)
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
        $services = Services::find($id_services);
        return view('admin.services.edit', compact('services','jumlahReservasi','reservasiBelumDiperiksa'));
    }

    public function update(Request $request, $id_services)
    {
        $services = Services::find($id_services);
        $services->update($request->all());

        return redirect('services')->with('pesan', 'Data berhasil diupdate');
    }

    public function hapus($id)
    {
        $services = Services::find($id);
        $services->delete();
        return redirect('services')->with('hapus', 'Data berhasil dihapus');
    }


}
