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
            <strong class="card-title">Tambah Waktu Booking </strong>
            <div class="col-auto">
                <a href="{{ url('waktu/tambah') }}" class="btn btn-primary my-3">Tambah Waktu Booking</a>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th class="serial">No</th>
                    <th class="avatar">Waktu</th>
                    <th class="avatar">Tersedia</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $value)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $value->waktu }}</td>
                    <td>{{ $value->tersedia }}</td>
                    <td>
                        <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editModal{{$value->id}}">Edit</a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal{{$value->id}}">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
                <!-- Modal konfirmasi -->
                <div class="modal fade" id="hapusModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel{{$value->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="hapusModalLabel{{$value->id}}">Konfirmasi Hapus Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus data ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <a href="{{ url('waktu/hapus/' . $value->id) }}" class="btn btn-danger">Ya, Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal konfirmasi -->
                @endforeach
            </tbody>
        </table>
    </div> <!-- /.card -->
</div> <!-- /.col-lg-12 -->

<!-- Modal Edit -->
@foreach($data as $value)
<div class="modal fade" id="editModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{$value->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{$value->id}}">Edit Waktu Booking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('waktu/'.$value->id) }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="waktu">Waktu:</label>
                        <input type="text" class="form-control" id="waktu" name="waktu" value="{{ $value->waktu }}">
                    </div>
                    <div class="form-group">
                        <label for="tersedia">Tersedia:</label>
                        <input type="text" class="form-control" id="tersedia" name="tersedia" value="{{ $value->tersedia }}">
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

    @endforeach
    <!-- End Modal Edit -->

</div>

@endsection