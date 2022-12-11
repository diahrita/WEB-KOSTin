<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pemilik;
use Illuminate\Http\Request;

class PemilikAPIController extends Controller
{
    public function PemilikView(Request $request)
    {
        $pemilik = Pemilik::all();
        return response()->json($pemilik, 200);
    }

    public function PemilikAdd(Request $request)
    {
        $validateData = $request->validate([
            'nama'           => 'required',
            'alamat'         => 'required',
            'jenis_kelamin'  => 'required',
            'no_telepon'     => 'required',
        ]);

        $pemilik = new Pemilik([
            'nama'           => $request->nama,
            'alamat'         => $request->alamat,
            'jenis_kelamin'  => $request->jenis_kelamin,
            'no_telepon'     => $request->no_telepon,
        ]);

        $pemilik->save();

        return response()->json($pemilik, 201);
    }
    public function PemilikUpdate(Request $request)
    {
        $validateData = $request->validate([
            'nama'           => 'required',
            'alamat'         => 'required',
            'jenis_kelamin'  => 'required',
            'no_telepon'     => 'required',
        ]);

        $pemilik = new Pemilik([
            'nama'           => $request->nama,
            'alamat'         => $request->alamat,
            'jenis_kelamin'  => $request->jenis_kelamin,
            'no_telepon'     => $request->no_telepon,
        ]);
        $pemilik->save();

        return response()->json($pemilik, 201);
    }
}
