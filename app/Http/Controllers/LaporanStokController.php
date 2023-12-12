<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class LaporanStokController extends Controller
{
    public function index(Request $request, $id)
    {
        $tahuns = Stok::selectRaw('YEAR(tanggal_stok) as tahun')
            ->groupBy('tahun')
            ->orderBy('tahun')
            ->get();

        if ($id == 0) {
            $dataStoks = Stok::selectRaw('YEAR(tanggal_stok) as tahun, MONTHNAME(tanggal_stok) as bulan, jumlah_stok')
                ->whereYear('tanggal_stok', 2023)
                ->get();

            $tahunDipilih = 2023;
        } else {
            $dataStoks = Stok::selectRaw('YEAR(tanggal_stok) as tahun, MONTHNAME(tanggal_stok) as bulan, jumlah_stok')
                ->whereYear('tanggal_stok', $request->filter_tahun)
                ->orderByDesc('tahun')
                ->get();

            $tahunDipilih = $request->filter_tahun;
        }

        return view('laporan-stok.index', compact('dataStoks', 'tahuns', 'tahunDipilih'));
    }

    public function print(Request $request)
    {
        $dataStoks = Stok::selectRaw('YEAR(tanggal_stok) as tahun, MONTHNAME(tanggal_stok) as bulan, jumlah_stok')
        ->whereYear('tanggal_stok', $request->tahunDipilih)
        ->orderByDesc('tahun', 'bulan')
        ->get();

        // $pdf = PDF::make();
        $pdf = PDF::loadView('laporan-stok.print', compact('dataStoks'));

        return $pdf->stream('laporan-stok_' . $request->tahunDipilih . '.pdf');
    }
}
