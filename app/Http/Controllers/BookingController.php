<?php

namespace App\Http\Controllers;

use App\Models\BookingModel;
use App\Models\TipeKamarModel;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function showBooking(){
        $tipeKamar = TipeKamarModel::all();

        return view("booking", [
            "types"=>$tipeKamar
        ]);
    }

    public function postBooking(Request $req){
        $booking = new BookingModel();
        $booking->kamar = $req->kamar;
        $booking->nama = $req->alamat;
        $booking->check_in = $req->check_in;
        $booking->check_out = $req->check_out;
        $booking->tgl_masuk = $req->dari;
        $booking->tgl_keluar = $req->sampai;
        $booking->bayar = $req->bayar;
        $booking->extra_bed = $req->extraBed;
        $booking->keterangan = $req->keterangan;

        $booking->save();

        return redirect()->back();

    }
}
