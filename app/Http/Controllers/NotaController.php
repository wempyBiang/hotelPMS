<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function show() {
        return view("notaForm");
    }

    public function printNota(Request $req) {
        $nama = $req->nama;
        $tanggalNota = $req->tanggalNota;
        $noInvoice = $req->noInvoice;

        $kamars = $req->kamar;
        $hargas = $req->harga;
        $checkins = $req->checkin;
        $checkouts = $req->checkout;
        $totals = $req->total;

        return view("notaBase", [
            "nama" => $nama,
            "tanggalNota" => $tanggalNota,
            "noInvoice" => $noInvoice,
            "kamars" => $kamars,
            "hargas" => $hargas,
            "checkins" => $checkins,
            "checkouts" => $checkouts,
            "totals" => $totals
        ]);


    }
}
