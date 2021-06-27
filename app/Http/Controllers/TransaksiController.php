<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function checkout(Request $request){
        $id = session()->get('id');
        $total_harga = $request->total_harga;

       // $resorce  = $request->file('image');
        //$nama_gambar   = $resorce->getClientOriginalName();
        //$resorce->move(\base_path() ."/public/gambar/buktiTransfer", $name);
        $data = $request->input('image');
        $photo = $request->file('image')->getClientOriginalName();
        $photo = rand(1,100000).$photo;
        $destination = base_path() . '/public/gambar/buktiTransfer';
        $request->file('image')->move($destination, $photo);

        $transaksi = new Transaksi;
        $transaksi->id_user = $id;
        $transaksi->total = $total_harga;
        $transaksi->status = 'belum diterima';
        $transaksi->bukti_transfer = $photo;
        $transaksi->save();

        return redirect()->route('home');

        
    }
}
