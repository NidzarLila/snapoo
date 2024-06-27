<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Reservasi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProdukController extends Controller
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
        $data = Produk::all();
        return view('admin.produk.index', compact('data','jumlahReservasi','reservasiBelumDiperiksa'));
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
        return view('admin.produk.tambah',compact('jumlahReservasi','reservasiBelumDiperiksa'));
    }
    public function store(Request $request)
    {
        $data = Produk::create($request->all());

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('produk')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function edit($id_produk)
    {
        $data = Produk::find($id_produk);
        return view('admin.produk.edit', compact('data'));
    }
    public function update(Request $request, $id_produk)
    {
        $data = Produk::find($id_produk);
        $data->update($request->all());

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('produk')->with('pesan', 'Data berhasil diupdate');
    }

    public function hapus($id_produk)
    {
        $data = Produk::find($id_produk);
        $data->delete();
        return redirect('produk')->with('hapus', 'Data berhasil dihapus');
    }
}
