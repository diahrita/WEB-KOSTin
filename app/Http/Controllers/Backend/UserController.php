<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DataKost;

class UserController extends Controller
{
    public function UserView()
    {
        // $allDataUser=User::all();
        $data['allDataUser'] = User::all(); //menampilkan data dari tabel users
        return view('backend.user.view_user', $data); //manampilkan view yg ada di folder backend
    }
}
