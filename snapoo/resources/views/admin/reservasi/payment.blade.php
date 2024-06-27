@extends('layouts.user.app')
@section('contents')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{config('midtrans.client_key')}}"></script>

    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <title>Toko Durian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="my-3">SNAPO SNAPO</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{asset('assets/img/durian.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Detail Pesanan</h5>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td> : <span class="nama">{{$data->nama}}</span></td>
                    </tr>
                    <tr>
                        <td>No Hp</td>
                        <td> : <span class="no-hp">{{$data->no_hp}}</span></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td> : <span class="alamat">{{$data->alamat}}</span></td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td> : <span class="subtotal">{{$data->subtotal}}</span></td>
                    </tr>
                </table>
                <button class="btn btn-primary mt-3" id="pay-button">Bayar Sekarang</button>
            </div>
        </div>
    </div>

    <br>
    <br>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        const nama = document.querySelector('.nama').textContent;
        const no_hp = document.querySelector('.no-hp').textContent;
        const alamat = document.querySelector('.alamat').textContent;
        const subtotal = document.querySelector('.subtotal').textContent;
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            window.snap.pay('{{$snapToken}}', {
                onSuccess: function(result) {
                    // Panggil fungsi handlePaymentSuccess ketika pembayaran berhasil
                    handlePaymentSuccess(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });

        // Handler untuk kejadian 'onSuccess' setelah pembayaran berhasil
        function handlePaymentSuccess(result) {
            // Kirim pesan WhatsApp dengan informasi pembayaran
            var message = "Pembayaran berhasil! ID Pesanan: " + result.order_id;
            sendWhatsAppMessage(message);

            // Tampilkan notifikasi atau lakukan tindakan lain yang sesuai
            alert("Pembayaran berhasil!");
            console.log(result);

            // Redirect ke route baru dengan parameter query
            window.location.href = `/admin/reservasi/payment_success?order_id=${result.order_id}&nama=${nama}&no_hp=${no_hp}&alamat=${alamat}&subtotal=${subtotal}`;
        }

        // Fungsi untuk mengirim pesan WhatsApp menggunakan API WhatsApp Gateway Fonte
        function sendWhatsAppMessage(message) {
            // Ganti "YOUR_API_KEY" dengan kunci API yang Anda terima dari WhatsApp Gateway Fonte
            var apiKey = "JDLr5B1pC4hU_jFCbCnR";

            // Ganti "YOUR_PHONE_NUMBER" dengan nomor telepon penerima WhatsApp
            // Pesan WhatsApp yang ingin dikirim

            var message = `Pembayaran telah diterima\nBerikut data reservasi kamu\nNama: ${nama}\nNo. Hp: ${no_hp}\nAlamat: ${alamat}\nTotal: ${subtotal}`;

            // Kirim permintaan HTTP POST ke API WhatsApp Gateway Fonte
            fetch("https://api.fonnte.com/send", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": apiKey
                    },
                    body: JSON.stringify({
                        target: no_hp,
                        message: message
                    })
                })
                .then(response => {

                    if (response.ok) {

                        document.querySelector('#pay-button').setAttribute('disabled', 'disabled');

                        console.log("Pesan WhatsApp berhasil dikirim.");
                        alert("Pesan WhatsApp berhasil dikirim.");
                    } else {
                        console.error("Gagal mengirim pesan WhatsApp:", response.statusText);
                        alert("Gagal mengirim pesan WhatsApp.");
                    }
                })
                .catch(error => {
                    console.error("Terjadi kesalahan:", error);
                    alert("Terjadi kesalahan saat mengirim pesan WhatsApp.");
                });
        }
    </script>

</body>

</html>
@endsection