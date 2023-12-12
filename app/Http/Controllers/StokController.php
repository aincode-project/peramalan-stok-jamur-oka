<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataStoks = Stok::all();

        return view('stok.index', compact('dataStoks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stok.create');
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
            'jumlah_stok' => 'required|integer',
            'tanggal_stok' => 'required',
        ]);

        Stok::create([
            'nama_barang' => $request->nama_barang,
            'tanggal_stok' => date("Y-m-t", strtotime($request->tanggal_stok . +"-01")),
            'jumlah_stok' => $request->jumlah_stok,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('stok.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function show(Stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function edit(Stok $stok)
    {
        return view('stok.edit', compact('stok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stok $stok)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jumlah_stok' => 'required|integer',
            'tanggal_stok' => 'required',
        ]);

        Stok::where('id', $stok->id)->update([
            'nama_barang' => $request->nama_barang,
            'tanggal_stok' => date("Y-m-t", strtotime($request->tanggal_stok . +"-01")),
            'jumlah_stok' => $request->jumlah_stok,
        ]);

        return redirect()->route('stok.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stok $stok)
    {
        //
    }
}
