<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function tableController(){
        return view('halaman.table');
    }
}
