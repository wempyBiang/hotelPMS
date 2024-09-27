<?php

namespace App\Http\Controllers;

use App\Models\KamarModel;
use App\Models\TipeKamarModel;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function showTambahKamar(){
        $types = TipeKamarModel::all();

        return view("admin/tambahKamar", [
            "types"=>$types
        ]);
    }

    public function postKamar(Request $req) {
        $nomors = explode("\r\n", $req->nomor);
        
        foreach ($nomors as $nomor) {
            $kamar = new KamarModel();
            $kamar->tipe = $req->tipe;
            $kamar->nomor = $nomor;
            $kamar->terisi = false;
            $kamar->save();
        }


        return redirect()->back();

    }
}
