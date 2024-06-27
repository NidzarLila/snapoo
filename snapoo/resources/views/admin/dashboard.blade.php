@extends('layouts.app')
@section ('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.49.0/apexcharts.min.js" integrity="sha512-NpRqjS1hba1uc6270PmwsKwQti3CSCDkZD9/dlen3+ytOUb/azIyuaGtyewUkjazLMSdl7Zy2CVWMvGxR6vFWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.49.0/apexcharts.min.css" integrity="sha512-qc0GepkUB5ugt8LevOF/K2h2lLGIloDBcWX8yawu/5V8FXSxZLn3NVMZskeEyOhlc6RxKiEj6QpSrlAoL1D3TA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@php
// Menyiapkan array bulan untuk label x-axis
$months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

// Inisialisasi array data penjualan untuk setiap bulan dengan nilai awal 0
$salesData = array_fill_keys($months, 0);

// Mengisi data penjualan yang ada ke dalam array sesuai dengan bulan yang sesuai
foreach ($salesPerMonth as $sales) {
$salesData[$months[$sales->month - 1]] = $sales->total;
}

// Menggabungkan data penjualan dengan label bulan
$data = [];
foreach ($months as $month) {
$data[] = [
'x' => $month,
'y' => $salesData[$month],
];
}
@endphp

<script>
    var options = {
        series: [{
            name: "Total Penjualan",
            data: <?php echo json_encode($data); ?> // Menggunakan data dari PHP
        }],
        chart: {
            height: 350,
            type: 'line',
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },
        title: {
            text: 'Total Penjualan per Bulan',
            align: 'left'
        },
        grid: {
            row: {
                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.5
            },
        },
        xaxis: {
            categories: <?php echo json_encode($months); ?>, // Label x-axis berdasarkan bulan
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>


@endsection


@section('contents')

<div class="animated fadeIn">
    <!-- Widgets  -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-cash"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                            <div class="stat-text"><span class="count">{{ $totalRevenue }}</span></div>
                        <div class="stat-heading">Total Pendapatan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-2">
                            <i class="pe-7s-cart"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{ $totalReservations}}</span></div>
                                <div class="stat-heading">Total Penjualan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-3">
                            <i class="pe-7s-browser"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">349</span></div>
                                <div class="stat-heading">Templates</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-4">
                            <i class="pe-7s-users"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{ $totalReservations}}</span></div>
                                <div class="stat-heading">Clients</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Widgets -->
    <!--  Traffic  -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Traffic </h4>
                </div>
                <div class="row">
                   
                        <div class="card-body">
                            <div class="p-6 m-20 bg-white rounded shadow">

                            </div>
                            <!-- <canvas id="TrafficChart"></canvas>   -->
                            <div id="chart"></div>
                        </div>
                  
                   
                </div> <!-- /.row -->
                <div class="card-body"></div>
            </div>
        </div><!-- /# column -->
    </div>
    <!--  /Traffic -->
    <div class="clearfix"></div>
    <!-- Orders -->
    <div class="orders">
        <div class="row">
           
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Transaksi Reservasi Terbaru</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">

                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
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
                                        @if ($noReservationsToday)
                                        <tr>
                                            <td colspan="6" style="text-align: center;">Tidak ada reservasi hari ini.</td>
                                        </tr>
                                        @else
                                        @foreach($reservationsToday as $index => $reservation)
                                        <tr>
                                            <td>{{ $reservation->id_reservasi }}</td>
                                            <td>{{ $reservation->tanggal }}</td>
                                            <td>{{ $reservation->nama }}</td>
                                            <td>{{ $reservation->nama_paket }}</td>
                                            <td>{{ 'Rp ' . number_format($reservation->subtotal, 0, ',', '.') }}</td>
                                            <td>{{ $reservation->status }}</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            
                        </div> <!-- /.table-stats -->
                    </div>
                </div> <!-- /.card -->
          
        </div>
    </div>
    @endsection