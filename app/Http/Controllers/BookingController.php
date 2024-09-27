<?php

namespace App\Http\Controllers;

use App\Models\BookingModel;
use App\Models\KamarModel;
use App\Models\OccupancyModel;
use App\Models\TipeKamarModel;
use DateTime;
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

        $tanggalCheckIn = new DateTime($req->dari);
        $tanggalCheckOut = new DateTime($req->sampai);
        $lamaMenginap = $tanggalCheckOut->diff($tanggalCheckIn)->days;

        $kamars = KamarModel::all();

        foreach ($kamars as $value) {
            $kamarTipe[] = $value->tipeKamar->nama;
        }

        $jmlKamar = array_count_values($kamarTipe);

        for ($i=0; $i < $lamaMenginap; $i++) { 
            $tempTgl = new DateTime($req->dari);
            $tempTgl = $tempTgl->modify("+".$i." day")->format("Y-m-d");
            $occupancy = OccupancyModel::where("tipe_kamar", $kamar->tipeKamar->id)->where("tgl", $tempTgl)->get();

            if (!$occupancy->isEmpty()) {
                if ($occupancy[0]->occupancy == 0) {
                    // kasi pesan error
                    return redirect()->back(); 
                }
            }
        }

        for ($i=0; $i < $lamaMenginap; $i++) { 
            $tempTgl = $tanggalCheckIn->modify("+".$i." day")->format("Y-m-d");
            $occupancy = OccupancyModel::where("tipe_kamar", $kamar->tipeKamar->id)->where("tgl", $tempTgl)->get();
            if ($occupancy->isEmpty()) {
                $occupancy = new OccupancyModel();
                $occupancy->tipe_kamar = $kamar->tipeKamar->id;
                $occupancy->tgl = $tempTgl;
                $occupancy->occupancy = $jmlKamar[$kamar->tipeKamar->nama]-1;

                $occupancy->save();
            } else {
                $occupancy = OccupancyModel::where("tipe_kamar", $kamar->tipeKamar->id)->where("tgl", $tempTgl)->first();
                $occupancy->tipe_kamar = $kamar->tipeKamar->id;
                $occupancy->tgl = $tempTgl;
                $occupancy->occupancy = $occupancy->occupancy-1;

                $occupancy->save();
            }
        }

        $booking->save();
        $kamar->save();

        return redirect()->back();

    }
}
