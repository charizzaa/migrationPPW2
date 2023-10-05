<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        // fungsi index
        $data_buku = Buku::all();
        $data_buku_sort = Buku::all()->sortByDesc('id');
        $no = 1;
        $count_data = Buku::count();
        $sum_harga = Buku::sum('harga');

        return view('buku.index', compact('data_buku', 'data_buku_sort', 'no', 'count_data', 'sum_harga'));
    }

    public function create(){
        return view('buku.create');
    }

    public function store(Request $request){
        $buku = new Buku;
        $buku->judul =$request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect('/buku');
    }

    public function destroy($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }

    public function update($id){
        $buku = Buku::find($id);
        return view('buku.update', compact('buku'));
    }

    public function updatedata(Request $request, $id){
        $buku = Buku::find($id);
        $buku->judul =$request->judul;
        $buku->penulis =$request->penulis;
        $buku->harga =$request->harga;
        $buku->tgl_terbit =$request->tgl_terbit;
        $buku->save();
        return redirect('/buku');
    }

    public function show($id){
        $buku = Buku::find($id);
        return view('buku.show', compact('buku'));
    }
}