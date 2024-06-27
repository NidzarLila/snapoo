<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\Shift;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function index ()
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
        $data = Shift::all();

        return view('admin.shift.index', compact('data','jumlahReservasi','reservasiBelumDiperiksa'));
    }

    public function store(Request $request)
    {
        $data = Shift::create($request->all());

      
            $data->save();

        return redirect('shift')->with('pesan', 'Data berhasil ditambahkan');
       
    }

    public function update(Request $request, $id_shift)
    {
        $data = Shift::find($id_shift);
        $data->update($request->all());
        return redirect('shift')->with('pesan', 'Data berhasil diubah');
    }

    public function hapus($id_shift)
    {
        $data = Shift::find($id_shift);
        $data->delete();
        return redirect('shift')->with('hapus', 'Data berhasil dihapus');
    }



}
