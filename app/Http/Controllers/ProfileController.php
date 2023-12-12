<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('profile.index', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => ['file', 'mimes:jpeg,jpg,png'],
        ]);

        if ($request->file('image')) {
            // Storage::delete($request->oldImage);
            $image = $request->file('image')->store('foto_user');
        } else {
            $image = $request->oldImage;
        }

        User::where('id', Auth::user()->id)->update([
            'image' => $image,
        ]);

        return redirect()->route('profile.index');
    }

    public function updatePassword(Request $request, $id)
    {
        $validatedData = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::where('id', Auth::user()->id)->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('profile.index');
    }
}
