<?php

namespace App\Http\Controllers;

use App\Retribusi_Kalibrasi;
use App\Retribusi_Pengujian;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index(){
        $retribusi_k = Retribusi_kalibrasi::all();
        $retribusi_p = Retribusi_Pengujian::all();

        // dd($retribusi_k);

        return view('welcome',compact('retribusi_k','retribusi_p'));
    }
}
