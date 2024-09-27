<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function show() {
        return view("notaForm");
    }

    public function show2() {
        return view("notaForm2");
    }

    public function show3() {
        return view("notaForm3");
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
        $pembayaran = $req->pembayaran;

        return view("notaBase", [
            "nama" => $nama,
            "tanggalNota" => $tanggalNota,
            "noInvoice" => $noInvoice,
            "kamars" => $kamars,
            "hargas" => $hargas,
            "checkins" => $checkins,
            "checkouts" => $checkouts,
            "totals" => $totals,
            "pembayaran" => $pembayaran
        ]);


    }

    public function printNota2(Request $req) {
        $nama = $req->nama;
        $tanggalNota = $req->tanggalNota;
        $noInvoice = $req->noInvoice;

        $keterangan = $req->keterangan;
        $harga = $req->harga;
        $jumlah = $req->jumlah;
        $total = $req->total;
 
        return view("notaBase2", [
            "nama" => $nama,
            "tanggalNota" => $tanggalNota,
            "noInvoice" => $noInvoice,
            "keterangans" => $keterangan,
            "jumlahs" => $jumlah,
            "hargas" => $harga,
            "totals" => $total,
        ]);


    }

    public function printNota3(Request $req) {
        $nama = $req->nama;
        $tanggalNota = $req->tanggalNota;
        $noInvoice = $req->noInvoice;

        $tanggal = $req->tanggal;
        $keterangan = $req->keterangan;
        $harga = $req->harga;
        $jumlah = $req->jumlah;
        $total = $req->total;
 
        return view("notaBase3", [
            "nama" => $nama,
            "tanggalNota" => $tanggalNota,
            "noInvoice" => $noInvoice,
            "tanggals" => $tanggal,
            "keterangans" => $keterangan,
            "jumlahs" => $jumlah,
            "hargas" => $harga,
            "totals" => $total,
        ]);


    }
}
