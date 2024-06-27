@extends('layouts.app')

@section('contents')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <strong class="card-title">Laporan Penjualan </strong>
                   
                    <div class="row">
                       
                            <form action="{{ route('laporan.index') }}" method="GET">
                                <div class="form-group">
                                    <label for="tanggal_awal">Tanggal Awal:</label>
                                    <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_akhir">Tanggal Akhir:</label>
                                    <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </form>
                        </div>
                      
                            <form action="{{ route('laporan.export-pdf') }}" method="GET" class="text-right">
                                <input type="hidden" name="tanggal_awal" value="{{ request('tanggal_awal') }}">
                                <input type="hidden" name="tanggal_akhir" value="{{ request('tanggal_akhir') }}">
                                <button type="submit" class="btn btn-success">Ekspor ke PDF</button>
                            </form>
                        </div>
                    </div>

                    @if($laporan->isNotEmpty())
                    @php
                    $totalPendapatan = 0;
                    @endphp
                    <div class="table-responsive">


                        <table id="example" class="table table-striped table-hover table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="serial">ID Reservasi</th>
                                    <th class="avatar">Tanggal</th>
                                    <th class="avatar">Nama Pelanggan</th>
                                    <th class="avatar">Produk</th>
                                    <th class="avatar">Total</th>
                                    <th class="avatar">Status</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laporan as $item)
                                <tr>
                                    <td>{{ $item->id_reservasi }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nama_paket }}</td>
                                    <td>{{ 'Rp ' . number_format($item->subtotal, 0, ',', '.') }}</td>
                                    <td>{{ $item->status }}</td>
                                    
                                </tr>
                                @php
                                $totalPendapatan += $item->subtotal;
                                @endphp
                                @endforeach
                                <!-- <tr>
                                    <td colspan="4" style="text-align: right;"><strong>Total Pendapatan:</strong></td>
                                    <td><strong>{{ 'Rp ' . number_format($totalPendapatan, 0, ',', '.') }}</strong></td>
                                    
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p>Silakan pilih tanggal untuk melihat laporan.</p>
                    @endif
                </div>
            </div> <!-- /.card -->
        </div> <!-- /.col-lg-12 -->
    </div>

</div>



<!-- End Modal Tambah Data -->

@endsection