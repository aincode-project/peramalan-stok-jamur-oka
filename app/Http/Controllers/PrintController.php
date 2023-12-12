<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class PrintController extends Controller
{
    public function printPenjualan(Request $request)
    {
        $dataPenjualans = Penjualan::selectRaw('YEAR(tanggal_penjualan) as tahun, MONTHNAME(tanggal_penjualan) as bulan, SUM(jumlah_stok_terjual) as jumlah_stok_terjual')
        ->whereYear('tanggal_penjualan', $request->tahunDipilih)
        ->groupBy('tahun', 'bulan')
        ->orderByDesc('tahun', 'bulan')
        ->get();

        // $pdf = PDF::make();
        $pdf = PDF::loadView('laporan-penjualan.print', compact('dataPenjualans'));

        return $pdf->stream('laporan-penjualan_' . $request->tahunDipilih . '.pdf');
    }
}
