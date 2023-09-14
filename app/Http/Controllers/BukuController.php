<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index(){
        $data_buku=Buku::all();

        return view('buku',compact('data_buku'));
    }
}
