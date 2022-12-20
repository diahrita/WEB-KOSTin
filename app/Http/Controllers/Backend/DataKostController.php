<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\DataKost;
use Illuminate\Support\Facades\Auth;
// use Spatie\Backtrace\File;
use Illuminate\Support\Facades\File;

class DataKostController extends Controller
{
    public function DataKostView()
    {
        // $allDataUser=User::all();
        $datakost['allDataKost'] = DataKost::all(); //menampilkan data dari tabel users
        return view('data_kost.view_kost', $datakost); //manampilkan view yg ada di folder backend
    }
    public function DataKostAdd()
    {
        // $allDataUser=User::all();
        // $data['allDataDataKost'] = DataKost::all();
        return view('data_kost.add_kost');
    }
    public function DataKostBaru(Request $request)
    {
        // dd($request->all());
        // $datakost = DataKost::create($request->all());
        $validateData = $request->validate([
            'nama'        => 'required',
            'jenis'       => 'required',
            'deskripsi'   => 'required',
            'tahun'       => 'required',
            'peraturan'   => 'required',
            'fasilitas'   => 'required',
            'ukuran'      => 'required',
            'jumlahkamar' => 'required',
            'kamarkosong' => 'required',
            'harga'       => 'required',
            'alamat'      => 'required',
            'photo'       => 'required|image|mimes:png,jpg|max:2040'
        ]);

        $photo = $request->photo;
        $slug = Str::slug($photo->getClientOriginalName());
        $new_photo = time() . '_' . $slug;
        $photo->move('foto_kost', $new_photo);

        $datakost = new DataKost();
        $datakost->nama_kost                = $request->nama;
        $datakost->jenis_kost               = $request->jenis;
        $datakost->deskripsi                = $request->deskripsi;
        $datakost->tahun_kost_dibangun      = $request->tahun;
        $datakost->peraturan_kost           = $request->peraturan;
        $datakost->fasilitas_kost           = $request->fasilitas;
        $datakost->ukuran_kamar             = $request->ukuran;
        $datakost->jumlah_semua_kamar       = $request->jumlahkamar;
        $datakost->jumlah_kamar_tersedia    = $request->kamarkosong;
        $datakost->harga_per_bulan          = $request->harga;
        $datakost->alamat                   = $request->alamat;
        $datakost->photo                    = 'foto_kost' . $new_photo;

        $datakost->save();

        return to_route('data_kost.view')->with('Tambah Data Kost Berhasil!');
    }

    public function DataKostEdit($id)
    {
        $editKost = DataKost::find($id);
        return view('data_kost.edit_kost', compact('editKost'));
    }
    public function DataKostUpdate(Request $request, $id)
    {

        $datakost = DataKost::find($id);
        $datakost->nama_kost                = $request->nama_kost;
        $datakost->jenis_kost               = $request->jenis_kost;
        $datakost->deskripsi                = $request->deskripsi;
        $datakost->tahun_kost_dibangun      = $request->tahun_kost_dibangun;
        $datakost->peraturan_kost           = $request->peraturan_kost;
        $datakost->fasilitas_kost           = $request->fasilitas_kost;
        $datakost->ukuran_kamar             = $request->ukuran_kamar;
        $datakost->jumlah_semua_kamar       = $request->jumlah_semua_kamar;
        $datakost->jumlah_kamar_tersedia    = $request->jumlah_kamar_tersedia;
        $datakost->harga_per_bulan          = $request->harga_per_bulan;
        $datakost->alamat                   = $request->alamat;
        $datakost->save();

        if ($request->hasFile('photo')) {
            $validateData = $request->validate([
                'photo' => 'required|image|mimes:png,jpg|max:2040'
            ]);
            File::delete($datakost->photo);
            $photo = $request->photo;
            $slug = Str::slug($photo->getClientOriginalName());
            $new_photo = time() . '_' . $slug;
            $photo->move('app/public/foto_kost/', $new_photo);
            $datakost->photo = 'app/public/foto_kost/' . $new_photo;
        }

        $notification = array(
            'message'
        );
        return redirect()->route('data_kost.view')->with('info', 'Update Data Kost Berhasil');
    }
    public function DataKostDelete($id)
    {
        $deleteData = DataKost::find($id);
        $deleteData->delete();


        return redirect()->route('data_kost.view')->with('info', 'Delete Data Kost Berhasil');
    }
    public function DataKostDetail($id)
    {
        $datakost = DataKost::find($id);
        return view('home.detail_kost', compact('datakost'));
    }
}
