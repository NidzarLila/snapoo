@extends('layouts.user.app')
@section('contents')
    <div class="container mt-5">
        <h1 class="my-3">Detail Pembayaran</h1>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Detail Pesanan</h5>
                <table>
                    <tr>
                        <td>ID Pesanan</td>
                        <td> : <span class="order-id">{{ $order_id }}</span></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td> : <span class="nama">{{ $nama }}</span></td>
                    </tr>
                    <tr>
                        <td>No Hp</td>
                        <td> : <span class="no-hp">{{ $no_hp }}</span></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td> : <span class="alamat">{{ $alamat }}</span></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td> : <span class="subtotal">{{ $subtotal }}</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection