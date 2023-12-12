<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Stok;
use App\Models\Penjualan;
use App\Models\Peramalan;
use Illuminate\Http\Request;
use App\Models\DetailPeramalan;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Auth;

class PeramalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPeramalans = Peramalan::all();

        return view('peramalan.index', compact('dataPeramalans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $minDate = Stok::min(DB::raw('DATE_FORMAT(tanggal_stok, "%Y-%m")'));
        $maxDate = Stok::max(DB::raw('DATE_FORMAT(tanggal_stok, "%Y-%m")'));

        return view('peramalan.create', compact('minDate', 'maxDate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Mencari selisih bulan
        $tanggal_awal = date_create(date("Y-m-d", strtotime($request->tanggal_awal_data . +"-01")));
        $tanggal_akhir = date_create(date("Y-m-t", strtotime($request->tanggal_akhir_data . +"-01")));
        $interval = date_diff($tanggal_awal, $tanggal_akhir);
        // Akhir mencari selisih bulan

        $dataStoks = Stok::whereBetween('tanggal_stok', [date("Y-m-d", strtotime($request->tanggal_awal_data . +"-01")), date("Y-m-t", strtotime($request->tanggal_akhir_data . +"-01"))])->get();

        $dataPenjualans = Penjualan::whereBetween('tanggal_penjualan', [date("Y-m-d", strtotime($request->tanggal_awal_data . +"-01")), date("Y-m-t", strtotime($request->tanggal_akhir_data . +"-01"))])->get();

        $dataPeramalan = Peramalan::create([
            'user_id' => Auth::user()->id,
            'tanggal_peramalan' => Carbon::now()->format('Y-m-d'),
            'tanggal_awal_data' => date("Y-m-d", strtotime($request->tanggal_awal_data . +"-01")),
            'tanggal_akhir_data' => date("Y-m-t", strtotime($request->tanggal_akhir_data . +"-01")),
            'jumlah_data' => $interval->m + 1,
        ]);

        foreach ($dataStoks as $keyStok => $valueStok) {
            foreach ($dataPenjualans as $keyPenjualan => $valuePenjualan) {
                if ($keyStok == $keyPenjualan) {
                    DetailPeramalan::create([
                        'peramalan_id' => $dataPeramalan->id,
                        'tanggal' => $valueStok->tanggal_stok,
                        'nilai_y' => $valueStok->jumlah_stok,
                        'nilai_x' => $valuePenjualan->jumlah_stok_terjual,
                        'nilai_xx' => $valuePenjualan->jumlah_stok_terjual * $valuePenjualan->jumlah_stok_terjual,
                        'nilai_xy' => $valuePenjualan->jumlah_stok_terjual * $valueStok->jumlah_stok,
                    ]);
                }
            }
        }

        $total_x = DetailPeramalan::where('peramalan_id', $dataPeramalan->id)->sum('nilai_x');
        $total_y = DetailPeramalan::where('peramalan_id', $dataPeramalan->id)->sum('nilai_y');
        $total_xx = DetailPeramalan::where('peramalan_id', $dataPeramalan->id)->sum('nilai_xx');
        $total_xy = DetailPeramalan::where('peramalan_id', $dataPeramalan->id)->sum('nilai_xy');

        $nilai_b = (($dataPeramalan->jumlah_data * $total_xy) - ($total_x * $total_y)) / (($dataPeramalan->jumlah_data * $total_xx) - ($total_x * $total_x));

        $nilai_a = ($total_y - ($nilai_b * $total_x)) / $dataPeramalan->jumlah_data;

        $detailPeramalans = DetailPeramalan::where('peramalan_id', $dataPeramalan->id)->get();
        foreach ($detailPeramalans as $key => $value) {
            $hasil_prediksi = $nilai_a + ($nilai_b * $value->nilai_x);
            $nilai_pe = (($value->nilai_y - $hasil_prediksi) / $value->nilai_y) * 100;
            if ($nilai_pe < 0) {
                $nilai_pe = $nilai_pe * -1;
            }
            DetailPeramalan::where('id', $value->id)->update([
                'hasil_prediksi' => $hasil_prediksi,
                'nilai_pe' => $nilai_pe,
            ]);
        }

        $total_pe = DetailPeramalan::where('peramalan_id', $dataPeramalan->id)->sum('nilai_pe');
        $nilai_mape = $total_pe / $dataPeramalan->jumlah_data;

        Peramalan::where('id', $dataPeramalan->id)->update([
            'total_x' => $total_x,
            'total_y' => $total_y,
            'total_xx' => $total_xx,
            'total_xy' => $total_xy,
            'nilai_a' => $nilai_a,
            'nilai_b' => $nilai_b,
            'nilai_mape' => $nilai_mape,
        ]);

        return redirect()->route('peramalan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peramalan  $peramalan
     * @return \Illuminate\Http\Response
     */
    public function show(Peramalan $peramalan)
    {
        return view('peramalan.show', compact('peramalan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peramalan  $peramalan
     * @return \Illuminate\Http\Response
     */
    public function edit(Peramalan $peramalan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peramalan  $peramalan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peramalan $peramalan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peramalan  $peramalan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peramalan $peramalan)
    {
        //
    }

    public function peramalanStok(Request $request, $id)
    {
        if ($id == 0) {
            return view('peramalan.peramalanStok', compact('id'));
        } else {
            $dataPeramalan = Peramalan::all()->max();
            $jumlah_penjualan = $request->jumlah_penjualan;
            // $hasil_prediksi = intval($dataPeramalan->nilai_a + ($dataPeramalan->nilai_b * $jumlah_penjualan));
            $hasil_prediksi = $dataPeramalan->nilai_a + ($dataPeramalan->nilai_b * $jumlah_penjualan);

            return view('peramalan.peramalanStok', compact('id', 'jumlah_penjualan', 'hasil_prediksi'));
        }

    }
}
