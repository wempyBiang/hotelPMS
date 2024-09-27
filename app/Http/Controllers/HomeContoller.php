<?php

namespace App\Http\Controllers;

use App\Models\BookingModel;
use App\Models\KamarModel;
use App\Models\OccupancyModel;
use App\Models\TipeKamarModel;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeContoller extends Controller
{
    public function show() {
        $bookedRooms = BookingModel::where("check_out","=", false)->first();
        $bookedRoomTipe = array();
        $kamars = KamarModel::all();
        $tipes = TipeKamarModel::all();
        $kamarTipe = [];
        $jmlKamar = [];
        $dates = [];
        $terisi = [];
        $sisaTipe = [];

        // hitung jumlah kamar
        foreach ($kamars as $kamar) {
            $kamarTipe[] = $kamar->tipeKamar->nama;
        }
        //dictionary 
        $jmlKamar = array_count_values($kamarTipe);

        // membuat list tanggal, terisi dan sisa
        
        for ($i=0; $i < count($tipes); $i++) { 
            $startDate = new DateTime();
            $sisa = [];
            
            for ($j=0; $j < 7; $j++) { 
                $occupancy = OccupancyModel::where("tgl", "=", $startDate->format("Y/m/d"))->where("tipe_kamar", "=", $tipes[$i]->id)->first();
                // Log::info($startDate->format("Y/m/d"));
                if ($occupancy != null){
                    $terisi[] = $occupancy->occupancy;
                    $sisa[$startDate->format("d/m/Y")] = $jmlKamar[$occupancy->tipeKamar->nama] - $occupancy->occupancy;
                    // dd($jmlKamar[$bookedRooms->kamarForeign->tipeKamar->nama]);
                }
                
                $dates[] = $startDate->format("d/m/Y");
                $startDate->modify("+1 day");
            }

            $sisaTipe[$tipes[$i]->nama] = $sisa;
        }

        // dd($jmlKamar);


        return view("home",[
            "jmlKamar"=> $jmlKamar,
            "tipeKamars" => $tipes,
            "dates" => $dates,
            "sisa" => $sisaTipe
        ]);
    
    }

    public function ketersediaan($tipe, $tanggalDari, $tanggalSampai) {

    
    }
}
