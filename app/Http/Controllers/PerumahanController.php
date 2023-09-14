<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perumahan;

class PerumahanController extends Controller
{
    public function index()
    {
        //fungsi index
        $data_perumahan = Perumahan::all();    
        return view('about');
    }

}
