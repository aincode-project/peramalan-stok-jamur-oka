<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;

class LaporanPenjualanController extends Controller
{
    public function index(Request $request, $id)
    {
        $tahuns = Penjualan::selectRaw('YEAR(tanggal_penjualan) as tahun')
            ->groupBy('tahun')
            ->orderBy('tahun')
            ->get();

        if ($id == 0) {
            $dataPenjualans = Penjualan::selectRaw('YEAR(tanggal_penjualan) as tahun, MONTHNAME(tanggal_penjualan) as bulan, jumlah_stok_terjual')
                ->whereYear('tanggal_penjualan', 2023)
                ->get();

            $tahunDipilih = 2023;
        } else {
            $dataPenjualans = Penjualan::selectRaw('YEAR(tanggal_penjualan) as tahun, MONTHNAME(tanggal_penjualan) as bulan, jumlah_stok_terjual')
                ->whereYear('tanggal_penjualan', $request->filter_tahun)
                ->orderByDesc('tahun')
                ->get();

            $tahunDipilih = $request->filter_tahun;
        }

        return view('laporan-penjualan.index', compact('dataPenjualans', 'tahuns', 'tahunDipilih'));
    }

    public function print(Request $request)
    {
        $dataPenjualans = Penjualan::selectRaw('YEAR(tanggal_penjualan) as tahun, MONTHNAME(tanggal_penjualan) as bulan, jumlah_stok_terjual')
        ->whereYear('tanggal_penjualan', $request->tahunDipilih)
        ->orderByDesc('tahun', 'bulan')
        ->get();

        // $pdf = PDF::make();
        $pdf = PDF::loadView('laporan-penjualan.print', compact('dataPenjualans'));

        return $pdf->stream('laporan-penjualan_' . $request->tahunDipilih . '.pdf');
    }
}
