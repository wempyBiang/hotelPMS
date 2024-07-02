<?php

namespace App\Http\Controllers;

use App\Models\TipeKamarModel;
use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    public function show() {
        $tipe = TipeKamarModel::all();
        return view("home",[
            "tipes"=>$tipe
        ]);
    }
}
