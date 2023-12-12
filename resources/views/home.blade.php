@extends('admin.admin')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Dashboard</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Grafik Penjualan per Bulan</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="yearFilterSales" class="form-label">Pilih Tahun:</label>
                            <select id="yearFilterSales" class="form-control">
                                @foreach ($tahunPenjualan as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach

                                {{-- <option value="2024">2024</option> --}}
                                <!-- Tambahkan opsi lain sesuai dengan tahun yang ada di data Anda -->
                            </select>
                        </div>
                    </div>
                    <div id="grafik_penjualan"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Grafik Pengeluaran Stok Bulanan</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="yearFilterStock" class="form-label">Pilih Tahun:</label>
                            <select id="yearFilterStock" class="form-control">
                                @foreach ($tahunStok as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach

                                {{-- <option value="2024">2024</option> --}}
                                <!-- Tambahkan opsi lain sesuai dengan tahun yang ada di data Anda -->
                            </select>
                        </div>
                    </div>
                    <div id="grafik_stok"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        var colors = ['#FF530D', '#E82C0C', '#FF0000', '#E80C7A', '#E80C7A'];
        var chart;
        var salesData = [];

        // Inisialisasi grafik awal
        createChart(2022); // Gantilah tahun awal sesuai kebutuhan

        $('#yearFilterSales').change(function() {
            var selectedYear = $(this).val();
            updateChart(selectedYear);
        });

        function createChart(year) {
            // Fetch data penjualan berdasarkan tahun yang dipilih
            $.ajax({
                url: '/get-monthly-sales-data',
                method: 'GET',
                data: { year: year },
                success: function(response) {
                    salesData = response;
                    renderSalesChart();
                },
                error: function() {
                    alert('Terjadi kesalahan dalam mengambil data.');
                }
            });
        }

        function updateChart(year) {
            // Fetch data penjualan berdasarkan tahun yang dipilih
            $.ajax({
                url: '/get-monthly-sales-data',
                method: 'GET',
                data: { year: year },
                success: function(response) {
                    salesData = response;
                    renderSalesChart();
                },
                error: function() {
                    alert('Terjadi kesalahan dalam mengambil data.');
                }
            });
        }

        function renderSalesChart() {
            Highcharts.chart('grafik_penjualan', {
                // chart: {
                //     type: 'column'
                // },
                credits: {
                    enabled: false
                },
                title: {
                    text: 'Grafik Penjualan Bulanan'
                },
                xAxis: {
                    categories: salesData.labels,
                    title: {
                        text: 'Bulan'
                    }
                },
                yAxis: {
                    title: {
                        text: 'Jumlah Kg Penjualan'
                    }
                },
                plotOptions : {
                    series : {
                        allowPointSelect: true
                    }
                },
                colors:colors,
                series: [{
                    name: 'Jumlah Penjualan per Kg',
                    colorByPoint: true,
                    data: salesData.data
                }]
            });
        }
    });

    $(document).ready(function() {
        var colors = ['#FF530D', '#E82C0C', '#FF0000', '#E80C7A', '#E80C7A'];
        var chart;
        var stockData = [];

        // Inisialisasi grafik awal
        createChart(2022); // Gantilah tahun awal sesuai kebutuhan

        $('#yearFilterStock').change(function() {
            var selectedYear = $(this).val();
            updateChart(selectedYear);
        });

        function createChart(year) {
            // Fetch data penjualan berdasarkan tahun yang dipilih
            $.ajax({
                url: '/get-monthly-stock-data',
                method: 'GET',
                data: { year: year },
                success: function(response) {
                    stockData = response;
                    renderStockChart();
                },
                error: function() {
                    alert('Terjadi kesalahan dalam mengambil data.');
                }
            });
        }

        function updateChart(year) {
            // Fetch data penjualan berdasarkan tahun yang dipilih
            $.ajax({
                url: '/get-monthly-stock-data',
                method: 'GET',
                data: { year: year },
                success: function(response) {
                    stockData = response;
                    renderStockChart();
                },
                error: function() {
                    alert('Terjadi kesalahan dalam mengambil data.');
                }
            });
        }

        function renderStockChart() {
            Highcharts.chart('grafik_stok', {
                // chart: {
                //     type: 'column'
                // },
                credits: {
                    enabled: false
                },
                title: {
                    text: 'Grafik Pengeluaran Stok Bulanan'
                },
                xAxis: {
                    categories: stockData.labels,
                    title: {
                        text: 'Bulan'
                    }
                },
                yAxis: {
                    title: {
                        text: 'Jumlah Kg Stok'
                    }
                },
                plotOptions : {
                    series : {
                        allowPointSelect: true
                    }
                },
                colors:colors,
                series: [{
                    name: 'Jumlah Stok per Kg',
                    colorByPoint: true,
                    data: stockData.data
                }]
            });
        }
    });
</script>
@endsection
