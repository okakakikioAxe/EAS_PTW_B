<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function checkout(Request $request){
        $id = session()->get('id');
        $id_transaksi = $request->id_transaksi;
        $total_harga = $request->total_harga;

       // $resorce  = $request->file('image');
        //$nama_gambar   = $resorce->getClientOriginalName();
        //$resorce->move(\base_path() ."/public/gambar/buktiTransfer", $name);
        $data = $request->input('image');
        $photo = $request->file('image')->getClientOriginalName();
        $photo = rand(1,100000).$photo;
        $destination = base_path() . '/public/gambar/buktiTransfer';
        $request->file('image')->move($destination, $photo);

        $trnsaksi = Transaksi::find($id_transaksi);
        $trnsaksi->update([
            ['total' => $total_harga],
            ['status'=>'belum disetujui'],
            ['bukti_transfer' => $photo]
        ]);
        //$query = "UPDATE `transaksi` SET `total` = ".$total_harga.",`status`='belu disetujui',`bukti_transfer`= ".$photo." WHERE `id` = ".$id_transaksi."; ";
        //DB::statement($query);

        return redirect()->route('home');

        
    }
}
