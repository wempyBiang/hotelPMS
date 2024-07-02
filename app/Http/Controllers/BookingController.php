<?php

namespace App\Http\Controllers;

use App\Models\BookingModel;
use App\Models\KamarModel;
use App\Models\TipeKamarModel;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function showBooking(){
        $tipeKamar = TipeKamarModel::all();
        $kamar = KamarModel::all();

        return view("booking", [
            "types"=>$tipeKamar,
            "kamars"=>$kamar
        ]);
    }

    public function postBooking(Request $req){
        $booking = new BookingModel();
        $kamar = KamarModel::find($req->kamar);

        $booking->kamar = $req->kamar;
        $booking->nama = $req->nama;
        $booking->alamat = $req->alamat;
        $booking->check_in = filter_var($req->check_in, FILTER_VALIDATE_BOOLEAN);
        $kamar->terisi = filter_var($req->check_in, FILTER_VALIDATE_BOOLEAN);
        $booking->check_out = false;
        $booking->tgl_masuk = $req->dari;
        $booking->tgl_keluar = $req->sampai;
        $booking->bayar = $req->bayar;
        $booking->extra_bed = $req->extraBed;
        $booking->keterangan = $req->keterangan == null? "": $req->keterangan;

        $booking->save();
        $kamar->save();

        return redirect()->back();

    }
}
