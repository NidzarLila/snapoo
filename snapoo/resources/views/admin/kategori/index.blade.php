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

            <strong class="card-title">Data Kategori</strong>
            <div class="col-auto">
                <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#tambahKategoriModal">
                    Tambah Data Kategori
                </button>
                <!-- <a href="/pelanggan/exportexcel" class="btn btn-primary my-3" target="_blank">Download File Excel</a>
                <a href="/pelanggan/importexcel" class="btn btn-secondary my-3" data-toggle="modal" data-target="#exampleModal">Upload Data Pelanggan</a>
                <a href="/pelanggan/exportpdf" class="btn btn-info my-3" target="_blank">Download File PDF</a> -->
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th class="serial">No</th>
                    <th class="avatar">Nama Kategori</th>
                   
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $row)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->nama_kategori}}</td>
                    <td>
                        <a href="{{ url('kategori/edit/' . $row->id_kategori) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ url('kategori/hapus/' . $row->id_kategori) }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> <!-- /.table-stats -->
</div>

<!-- Modal -->
<div class="modal fade" id="tambahKategoriModal" tabindex="-1" role="dialog" aria-labelledby="tambahKategoriModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahKategoriModalLabel">Tambah Data Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('kategori/store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="namaKategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
