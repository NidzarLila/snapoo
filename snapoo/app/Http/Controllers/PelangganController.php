<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use App\Exports\PelangganExport;
use App\Exports\PelangganExport2;
use App\Exports\PelangganExport3;
use App\Exports\PelangganExport4;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\pelanggan;
use Illuminate\Support\Facades\Session;
use App\Imports\PelangganImport;
use App\Models\Reservasi;
use App\Models\Shift;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class PelangganController extends Controller
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
        $reservasis= Reservasi::all();
        $shifts = Shift::all();
        $pelanggan = pelanggan::all();
        $data = Reservasi::all();
       
        return view('admin.pelanggan.pelanggan', compact('pelanggan','reservasis','shifts','data','jumlahReservasi','reservasiBelumDiperiksa'));
        
    }
    public function create()
    {
        return view('admin.pelanggan.tambah');
    }
    public function store(Request $request)
    {

       
        
        $data = pelanggan::create($request->all());

      
        $data->save();

       
        return redirect()->to('pelanggan')->with('success', 'Berhasil menambahkan data');
    }

    public function edit($nama)
    {
        $pelanggan = DB::table('pelanggan')->where('nama', $nama)->first();

        return view('admin.pelanggan.edit', compact('pelanggan'));
    }
    

    public function update(Request $request, $nama)
    {
       DB::table('pelanggan')->where('nama', $nama)
            ->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'harga' => $request->harga,
            'produk' => $request->produk,
        ]);

        return redirect()->to('pelanggan')->with('success', 'Berhasil mengubah data');

    }

    public function destroy($nama)
    {
        DB::table('pelanggan')->where('nama', $nama)->delete();
        return redirect()->to('pelanggan')->with('success', 'Berhasil menghapus data');
    }

    
    public function pelangganimportexcel(Request $request)

    {

            $data = $request->file('file');
            $namafile = $data->getClientOriginalName();
            $data->move('file_excel', $namafile);
            Excel::import(new PelangganImport, public_path('/file_excel/' . $namafile));
            return redirect()->back()->with('success', 'Data Berhasil Diimport!');


    }

    public function exportpdf()
    {
        $data = Pelanggan::all();
        view()->share('data',$data);
        $pdf = PDF::loadview('pelanggan.exportpdf');
        return $pdf->download('pelanggan.pdf');
    }

    public function exportexcel()
    {
        return Excel::download(new PelangganExport, 'pelanggan.xlsx');
    }
}
