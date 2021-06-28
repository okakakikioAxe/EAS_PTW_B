<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\Keranjang;

class TransaksiController extends Controller
{
    public function checkout(Request $request){
        $id = session()->get('id');
        $total_harga = $request->total_harga;

        $data = $request->input('image');
        $photo = $request->file('image')->getClientOriginalName();
        $photo = rand(1,100000).$photo;
        $destination = base_path() . '/public/gambar/buktiTransfer';
        $request->file('image')->move($destination, $photo);

        $transaksi = new Transaksi;
        $transaksi->id_user = $id;
        $transaksi->total = $total_harga;
        $transaksi->status = "sudah ditransfer";
        $transaksi->bukti_transfer = $photo;
        $transaksi->save();
        
        $keranjang = DB::table('keranjang')
            ->join('barang', 'id_barang', '=', 'barang.id')
            ->select('barang.stok','keranjang.id','keranjang.id_barang','keranjang.jumlah')
            ->where('keranjang.id_user', $id)
            ->get();

        foreach($keranjang as $produk){
            $jumlah = $produk->jumlah;
            $id_produk = $produk->id_barang;

            Barang::where('id',$id_produk)->decrement('stok',$jumlah);
            Keranjang::where('id_barang', $id_produk)->where('id_user',$id)->delete();
        }

        return redirect()->route('home');

        
    }
}
