<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\Transaksi;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = session()->get('id');
        $keranjang = DB::table('keranjang')
            ->join('barang', 'id_barang', '=', 'barang.id')
            ->select('barang.nama_barang','barang.harga','barang.stok' ,'barang.gambar_1','keranjang.*')
            ->where('keranjang.id_user', $id)
            ->get();
        return view ('keranjang', ['keranjang' => $keranjang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_barang = $request->id_barang;
        $jumlah = $request->jumlah_barang;
        $variasi = $request->variasi;
        $id_user = session()->get('id');



        $cek_keranjang = DB::table('keranjang')
            ->join('transaksi', 'id_transaksi', '=', 'transaksi.id')
            ->select('keranjang.*','transaksi.*')
            ->where('keranjang.id_user' ,'=', $id_user)
            ->where( 'transaksi.bukti_transfer' ,'=' , null)
            ->first();

        

        //$cek_keranjang = Keranjang::where(['id_barang'=> $id_barang, 'id_user' => $id_user , 'varian' => $variasi])->first();
        if($cek_keranjang == null){
            $transaksi = new Transaksi;
            $transaksi->id_user = $id_user;
            $transaksi->save();
        }
            $data_transaksi =  Transaksi::where(['id_user' => $id_user,'bukti_transfer' => null])->first();
            $id_transaksi = $data_transaksi->id;

            $keranjang = new Keranjang;
            $keranjang->id_barang = $id_barang;
            $keranjang->id_user = $id_user;
            $keranjang->id_transaksi = $id_transaksi;
            $keranjang->varian = $variasi;
            $keranjang->jumlah = $jumlah;
            $keranjang->save();
        
        return redirect()->route('keranjang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jumlah = $request->jumlah;
        Keranjang::where('id',$id)->update(['jumlah'=> $jumlah]);
        return redirect()->route('keranjang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Keranjang::where('id', $id)->delete();
        //$data->delete();
        return redirect()->route('keranjang.index');
    }

    public function form_checkout(Request $request){
        $total_harga = $request->total_harga;
        //$total_harga = array('total_harga'=>$total_harga);
        return view('checkout',['total_harga'=>$total_harga]);
    }
}
