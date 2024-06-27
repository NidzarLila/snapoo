@extends('layouts.app')

@section('contents')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            @if(session()->has('pesan'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    toastr.success("{{ session('pesan') }}");
                });
            </script>
            @endif
            @if(session()->has('hapus'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    toastr.warning("{{ session('hapus') }}");
                });
            </script>
            @endif

            <strong class="card-title">Data Produk</strong>
            <div class="col-auto">
                <a href="{{ url('produk/tambah') }}" class="btn btn-primary my-3">Tambah Data Produk</a>
                <!-- <a href="/pelanggan/exportexcel" class="btn btn-primary my-3" target="_blank">Download File Excel</a>
                <a href="/pelanggan/importexcel" class="btn btn-secondary my-3" data-toggle="modal" data-target="#exampleModal">Upload Data Pelanggan</a>
                <a href="/pelanggan/exportpdf" class="btn btn-info my-3" target="_blank">Download File PDF</a> -->
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th class="serial">No</th>
                    <th class="avatar">Paket</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Kuota</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->nama_paket }}</td>
                    <td>{{ $row->deskripsi }}</td>
                    <td>{{ $row->harga }}</td>
                    <td><img src="{{ asset('images/' . $row->gambar) }}" width="100px"></td>
                    <td>{{$row->slot}}</td>
                    <td>
                        <a href="{{ url('produk/edit/' . $row->id_produk) }}" class="btn btn-warning" data-toggle="modal" data-target="#editModal{{$row->id_produk}}">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal{{$row->id_produk}}">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>

                <!-- Modal edit -->
                <div class="modal fade" id="editModal{{$row->id_produk}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{$row->id_produk}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{ url('produk/' . $row->id_produk) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel{{$row->id_produk}}">Edit Produk</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="nama_paket">Nama Paket:</label>
                                        <input type="text" class="form-control" id="nama_paket" name="nama_paket" value="{{ $row->nama_paket }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi:</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $row->deskripsi }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga:</label>
                                        <input type="text" class="form-control" id="harga" name="harga" value="{{ $row->harga }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Gambar:</label>
                                        <input type="file" class="form-control-file" id="gambar" name="gambar">
                                        <img src="{{ asset('images/' . $row->gambar) }}" alt="Gambar Produk" class="img-fluid mb-2" style="max-width: 200px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="slot">Kuota:</label>
                                        <input type="text" class="form-control" id="slot" name="slot" value="{{ $row->slot }}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Modal edit -->

                <!-- Modal konfirmasi -->
                <div class="modal fade" id="hapusModal{{$row->id_produk}}" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel{{$row->id_produk}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="hapusModalLabel{{$row->id_produk}}">Konfirmasi Hapus Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus data ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <a href="{{ url('produk/hapus/' . $row->id_produk) }}" class="btn btn-danger">Ya, Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal konfirmasi -->
                @endforeach
            </tbody>
        </table>
    </div> <!-- /.table-stats -->
</div>
@endsection