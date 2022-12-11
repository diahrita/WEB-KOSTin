<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemilik;

class PemilikController extends Controller
{
    public function PemilikView()
    {
        // $allDataUser=User::all();
        $data['allDataPemilik'] = Pemilik::all(); //menampilkan data dari tabel users
        return view('backend.pemilik.view_pemilik', $data); //manampilkan view yg ada di folder backend
    }
    public function PemilikAdd()
    {
        // $allDataUser=User::all();
        // $data['allDataPemilik'] = Pemilik::all();
        return view('backend.pemilik.add_pemilik');
    }
    public function PemilikBaru(Request $request)
    {

        $validateData = $request->validate([
            'textName' => 'required',
        ]);

        $data = new Pemilik();
        $data->nama             = $request->textName;
        $data->alamat           = $request->textAddress;
        $data->jenis_kelamin    = $request->selectJenis;
        $data->no_telepon       = $request->number;
        $data->save();

        return redirect()->route('pemilik.view')->with('info', 'Tambah Pemilik Kost Berhasil');
    }

    public function PemilikEdit($id)
    {
        $editData = Pemilik::find($id);
        return view('backend.pemilik.edit_pemilik', compact('editData'));
    }
    public function PemilikUpdate(Request $request, $id)
    {

        $data = Pemilik::find($id);
        $data->nama             = $request->nama;
        $data->alamat           = $request->alamat;
        $data->jenis_kelamin    = $request->jenis_kelamin;
        $data->no_telepon       = $request->no_telepon;
        $data->save();

        $notification = array(
            'message'
        );
        return redirect()->route('pemilik.view')->with('info', 'Update Pemilik Kost Berhasil');
    }
    public function PemilikDelete($id)
    {
        $deleteData = Pemilik::find($id);
        $deleteData->delete();


        return redirect()->route('pemilik.view')->with('info', 'Delete Pemilik Kost Berhasil');
    }
}
