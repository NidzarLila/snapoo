@extends('layouts.app')

@section('contents')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            @if(session()->has('pesan'))
            <!-- Tampilkan pesan session dalam bentuk Toastr saat dokumen dimuat -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Panggil metode Toastr
                    toastr.success("{{ session('pesan') }}");
                });
            </script>
            @endif
            @if(session()->has('hapus'))
            <!-- Tampilkan pesan session dalam bentuk Toastr saat dokumen dimuat -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Panggil metode Toastr
                    toastr.warning("{{ session('hapus') }}");
                });
            </script>
            @endif
            <strong class="card-title">Tambah Shift </strong>
            <div class="col-auto">
                <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#tambahModal">Tambah Shift</button>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th class="serial">No</th>
                    <th class="avatar">Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $value)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>
                        <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editModal{{$value->id_shift}}">Edit</a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal{{$value->id_shift}}">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
                <!-- Modal konfirmasi -->
                <div class="modal fade" id="hapusModal{{$value->id_shift}}" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel{{$value->id_shift}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="hapusModalLabel{{$value->id_shift}}">Konfirmasi Hapus Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus data ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <a href="{{ url('shift/hapus/' . $value->id_shift) }}" class="btn btn-danger">Ya, Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal konfirmasi -->

                <!-- Modal Edit -->
                <div class="modal fade" id="editModal{{$value->id_shift}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{$value->id_shift}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{$value->id_shift}}">Edit Shift</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('shift/'.$value->id_shift) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label for="nama">Nama:</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $value->nama }}">
                                    </div>
                                    
                                    <!-- Tambahan input lainnya sesuai kebutuhan -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal Edit -->
                @endforeach
            </tbody>
        </table>
    </div> <!-- /.card -->
</div> <!-- /.col-lg-12 -->

<!-- Modal Tambah Data -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Shift</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('shift/store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
                    </div>
                    <!-- Jika diperlukan, tambahkan input lainnya sesuai kebutuhan -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Tambah Data -->

@endsection
