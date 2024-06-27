@extends('layouts.app')
@section('contents')



<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data Services Extra</li>
        </ol>
    </div>

    <div class="card mb-4">
        <!-- <form action="/produk/store" method="POST">
            @csrf -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Services Extra</h6>
            </div>
            <div class="card-body">
                <form action="/services/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Services</label>
                        <input type="text" class="form-control" name="nama_service" id="nama_service" placeholder="Nama Service Extra" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Harga</label>
                        <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukan Harga" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </form>
    </div>
    <!--Row-->


    @endsection