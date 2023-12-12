<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Stok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tahunPenjualan = Penjualan::select(DB::raw("YEAR(tanggal_penjualan) as tahun"))
            ->GroupBy(DB::raw("YEAR(tanggal_penjualan)"))
            ->pluck('tahun');

        $tahunStok = Stok::select(DB::raw("YEAR(tanggal_stok) as tahun"))
            ->GroupBy(DB::raw("YEAR(tanggal_stok)"))
            ->pluck('tahun');

        return view('home', compact('tahunStok', 'tahunPenjualan'));
    }

    public function getMonthlySalesData(Request $request) {
        $year = $request->input('year'); // Ambil tahun dari request

        // Query database untuk mengambil data penjualan berdasarkan tahun
        $salesData = DB::table('penjualans')
            ->select(
                DB::raw('MONTH(tanggal_penjualan) as month'),
                DB::raw('jumlah_stok_terjual')
            )
            ->whereYear('tanggal_penjualan', $year)
            ->orderBy('month')
            ->get();

        $labels = [];
        $data = [];

        // Buat label bulan dan data total penjualan dari hasil query
        for ($i = 1; $i <= 12; $i++) {
            $labels[] = date('F', mktime(0, 0, 0, $i, 1, 2000)); // Nama bulan
            $monthData = $salesData->where('month', $i)->first();
            $data[] = $monthData ? $monthData->jumlah_stok_terjual : 0;
        }

        $response = [
            'labels' => $labels,
            'data' => $data
        ];

        return response()->json($response);
    }

    public function getMonthlyStockData(Request $request) {
        $year = $request->input('year'); // Ambil tahun dari request

        // Query database untuk mengambil data penjualan berdasarkan tahun
        $stockData = DB::table('stoks')
            ->select(
                DB::raw('MONTH(tanggal_stok) as month'),
                DB::raw('jumlah_stok')
            )
            ->whereYear('tanggal_stok', $year)
            ->orderBy('month')
            ->get();

        $labels = [];
        $data = [];

        // Buat label bulan dan data total penjualan dari hasil query
        for ($i = 1; $i <= 12; $i++) {
            $labels[] = date('F', mktime(0, 0, 0, $i, 1, 2000)); // Nama bulan
            $monthData = $stockData->where('month', $i)->first();
            $data[] = $monthData ? $monthData->jumlah_stok : 0;
        }

        $response = [
            'labels' => $labels,
            'data' => $data
        ];

        return response()->json($response);
    }
}
