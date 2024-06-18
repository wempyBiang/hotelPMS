<?php

namespace App\Http\Controllers;

use App\Models\TipeKamarModel;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    public function showTambahTipe () {
        $tipeKamar = TipeKamarModel::all();
        return view('admin/tambahTipe', [
            "tipeKamar" => $tipeKamar
        ]);
    }

    public function postTipeKamar(Request $req){
        $tipeKamar = new TipeKamarModel();

        $tipeKamar->nama = $req->nama;
        $tipeKamar->harga = $req->harga;

        $tipeKamar->save();
        return redirect()->back();

    }
}
