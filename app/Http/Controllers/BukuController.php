<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//* TAMBAHKAN KODE BERIKUT UNTUK MEMANGGIL MODEL BUKU
use App\Models\Buku;

class BukuController extends Controller
{
    //* FUNGSI INDEX
    public function index() {
        $data_buku = Buku::all()->sortByDesc('id');
        $no = 0;
        $count = Buku::count(); 
        $total = Buku::sum('harga');
        return view('buku.index', compact('data_buku', 'no', 'count', 'total'));
    }
    
    public function create(){
        return view('buku.create');
    }
    
    public function store(Request $request)
    {
        //
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect('/buku');
    }
}