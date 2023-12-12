<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataUsers = User::all();

        return view('user.index', compact('dataUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->store('foto_user');

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('password'),
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'hak_akses' => $request->hak_akses,
            'image' => $image
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if ($request->file('image')) {
            Storage::delete($request->oldImage);
            $image = $request->file('image')->store('foto_user');
        } else {
            $image = $request->oldImage;
        }

        User::where('id', $user->id)->update([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'hak_akses' => $request->hak_akses,
            'image' => $image
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
