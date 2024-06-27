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
            <strong class="card-title">Data Pelanggan</strong>
            <div class="col-auto">
                <!-- <a href="{{ url('services/tambah') }}" class="btn btn-primary my-3">Tambah Data Services Extra</a> -->
                <!-- <a href="/pelanggan/exportexcel" class="btn btn-primary my-3" target="_blank">Download File Excel</a>
                <a href="/pelanggan/importexcel" class="btn btn-secondary my-3" data-toggle="modal" data-target="#exampleModal">Upload Data Pelanggan</a>
                <a href="/pelanggan/exportpdf" class="btn btn-info my-3" target="_blank">Download File PDF</a> -->
            </div>
        </div>

        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th>Tanggal Reservasi</th>
                        <th>Waktu Reservasi</th>
                        <th>Total</th>
                        <th>Nama Paket</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $reservasi)
                    <tr>
                        <td class="serial">{{ $loop->iteration }}</td>
                        <td>{{ $reservasi->nama }}</td>
                        <td>{{ $reservasi->email }}</td>
                        <td>{{ $reservasi->no_hp }}</td>
                        <td>{{ $reservasi->alamat }}</td>
                        <td>{{ $reservasi->tanggal }}</td>
                        <td>{{ $reservasi->waktu }}</td>
                        <td>{{ $reservasi->subtotal }}</td>
                        <td>{{ $reservasi->nama_paket }}</td>
                        <td>{{$reservasi->status}}</td>
                        

                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editModal{{$reservasi->id_reservasi}}"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal{{$reservasi->id_reservasi}}"><i class="fa fa-trash-o"></i></a>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailModal{{$reservasi->id_reservasi}}"><i class="fa fa-eye"></i></button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- /.table-stats -->
    </div>
</div>

@foreach($data as $reservasi)
<!-- Modal Detail -->
<div class="modal fade" id="detailModal{{$reservasi->id_reservasi}}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel{{$reservasi->id_reservasi}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel{{$reservasi->id_reservasi}}">Detail Reservasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Nama Lengkap: {{ $reservasi->nama }}</p>
                <p>Email: {{ $reservasi->email }}</p>
                <p>No. Telepon: {{ $reservasi->no_hp }}</p>
                <p>Alamat: {{ $reservasi->alamat }}</p>
                <p>Tanggal Reservasi: {{ $reservasi->tanggal }}</p>
                <p>Waktu Reservasi: {{ $reservasi->waktu }}</p>
                <p>Total: {{ $reservasi->subtotal }}</p>
                <p>Nama Paket: {{ $reservasi->nama_paket }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Detail -->

<!-- Modal Edit -->
<div class="modal fade" id="editModal{{$reservasi->id_reservasi}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{$reservasi->id_reservasi}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{$reservasi->id_reservasi}}">Edit Reservasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('pelanggan/store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <!-- Isikan form untuk data lainnya -->
                    <div class="form-group">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $reservasi->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $reservasi->email }}">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No. Telepon:</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $reservasi->no_hp }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea class="form-control" id="alamat" name="alamat">{{ $reservasi->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Reservasi:</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $reservasi->tanggal }}">
                    </div>
                    <div class="form-group">
                        <label for="waktu">Waktu Reservasi:</label>
                        <input type="time" class="form-control" id="waktu" name="waktu" value="{{ $reservasi->waktu }}">
                    </div>
                    <div class="form-group">
                        <label for="subtotal">Total:</label>
                        <input type="text" class="form-control" id="subtotal" name="subtotal" value="{{ $reservasi->subtotal }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_paket">Nama Paket:</label>
                        <input type="text" class="form-control" id="nama_paket" name="nama_paket" value="{{ $reservasi->nama_paket }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" id="status" name="status">
                            <option value="Pending" {{ $reservasi->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Diproses" {{ $reservasi->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                            <option value="Selesai" {{ $reservasi->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="person">Person</label>
                        <input type="text" class="form-control" id="person" name="person">
                    </div>

                    <div class="form-group">
                        <label for="basic_frame">Basic Frame</label>
                        <input type="text" class="form-control" id="basic_frame" name="basic_frame">
                    </div>

                    <div class="form-group">
                        <label for="special_frame">Special Frame</label>
                        <input type="text" class="form-control" id="special_frame" name="special_frame">
                    </div>

                    <div class="form-group">
                        <label for="instax">Instax</label>
                        <input type="text" class="form-control" id="instax" name="instax">
                    </div>

                    <div class="form-group">
                        <label for="projector">Projector</label>
                        <input type="text" class="form-control" id="projextor" name="projextor">
                    </div>

                    <div class="form-group">
                        <label for="custom_image">Custom Image</label>
                        <input type="text" class="form-control" id="custom_image" name="custom_image">
                    </div>

                    <div class="form-group">
                        <label for="a4">A4</label>
                        <input type="text" class="form-control" id="a4" name="a4">
                    </div>

                    <div class="form-group">
                        <label for="pet">Pet</label>
                        <input type="text" class="form-control" id="pet" name="pet">
                    </div>

                    <div class="form-group">
                        <label for="lovers_flowers">Lovers Flowers</label>
                        <input type="text" class="form-control" id="lover_flower" name="lover_flower">
                    </div>

                    <div class="form-group">
                        <label for="shift">Shift</label>
                        <select class="form-control" id="shift_id" name="shift_id">
                            @foreach($shifts as $shift)
                            <option value="{{ $shift->id }}">{{ $shift->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan">
                    </div>
                    <!-- End of form for other data -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal Edit -->

<!-- Modal Hapus -->
<div class="modal fade" id="hapusModal{{$reservasi->id_reservasi}}" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel{{$reservasi->id_reservasi}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel{{$reservasi->id_reservasi}}">Konfirmasi Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <!-- Link untuk menghapus data -->
                <a href="{{ url('reservasi/hapus/' . $reservasi->id_reservasi) }}" class="btn btn-danger">Ya, Hapus</a>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal Hapus -->
@endforeach

@endsection