<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    
        //dashboard admin
        public function index(){

            return view('users.index');
        }

    
}
