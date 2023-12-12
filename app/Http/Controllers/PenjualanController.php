<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPenjualans = Penjualan::all();

        return view('penjualan.index', compact('dataPenjualans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jumlah_stok_terjual' => 'required|integer',
            'tanggal_penjualan' => 'required',
        ]);

        Penjualan::create([
            'nama_barang' => $request->nama_barang,
            'tanggal_penjualan' => date("Y-m-t", strtotime($request->tanggal_penjualan . +"-01")),
            'jumlah_stok_terjual' => $request->jumlah_stok_terjual,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('penjualan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        return view('penjualan.edit', compact('penjualan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jumlah_stok_terjual' => 'required|integer',
            'tanggal_penjualan' => 'required',
        ]);

        Penjualan::where('id', $penjualan->id)->update([
            'nama_barang' => $request->nama_barang,
            'tanggal_penjualan' => date("Y-m-t", strtotime($request->tanggal_penjualan . +"-01")),
            'jumlah_stok_terjual' => $request->jumlah_stok_terjual,
        ]);

        return redirect()->route('penjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $penjualan)
    {
        //
    }
}
