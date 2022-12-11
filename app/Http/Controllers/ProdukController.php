<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Merk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index($id){
        $merk = Merk::find($id);
        $produk = Produk::where('merk_id', $id)->get();
        return view('produk.index',compact('produk','merk'));
    }

    public function edit(Produk $produk,$id){
        $produk = Produk::find($id);
        return view('produk.edit',compact('produk'));
    }

    public function updateproduct(Request $request,$id){
        $produk = Produk::find($id);
        $produk->update($request->all());
        return redirect()->route('merks.index')->with('success', 'Produk Berhasil Diubah');
    }

    public function destroy($id){
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('merks.index')->with('success', 'Produk Berhasil Diubah');
    }
}
