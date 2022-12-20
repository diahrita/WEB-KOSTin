<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\DataKost;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index()
    {
        $datakost = DataKost::paginate(10);
        return view('home.userpage', compact('datakost'));
    }
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.body.home');
        }
        if ($usertype == '2') {
            return view('data_kost.add_kost');
        } else {
            $datakost = DataKost::paginate(10);
            return view('home.userpage', compact('datakost'));
        }
    }
    public function DataKostDetail($id)
    {
        $datakost = DataKost::find($id);
        return view('home.detail_kost', compact('datakost'));
    }
    public function CartAdd(Request $request, $id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $datakost = DataKost::find($id);

            $cart = new Cart;
            $cart->name = $user->name;
            $cart->email = $user->email;

            $cart->user_id = $user->id;
            $cart->nama_kost = $datakost->nama_kost;
            $cart->harga_per_bulan = $datakost->harga_per_bulan;
            $cart->photo = $datakost->photo;
            $cart->kost_id = $datakost->id;

            $cart->save();
            return redirect()->back();
        } else {
            return redirect('login');
        }
    }
    public function CartView()
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
            $cart = Cart::where('user_id', '=', $id)->get();

            return view('home.viewcart', compact('cart'));
        } else {
            return redirect('login');
        }
    }
    public function CartRemove($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back;
    }
    public function KostBooking()
    {
        $user = Auth::user();
        $userid = $user->id;
        $data = Cart::where('user_id', '=', $userid)->get();

        foreach ($data as $data) {
            $booking = new Booking;
            $booking->name = $data->name;
            $booking->email = $data->email;
            $booking->nama_kost = $data->nama_kost;
            $booking->harga_per_bulan = $data->harga_per_bulan;
            $booking->photo = $data->photo;
            $booking->user_id = $data->user_id;
            $booking->kost_id = $data->kost_id;

            $booking->status_pembayaran = 'cash on delivery';

            $booking->save();

            $card_id = $data->id;
            $cart = Cart::find($card_id);
            $cart->delete();
        }
        return redirect()->back()->with('message', 'Booking kost anda sedang di proses..');
    }
}
