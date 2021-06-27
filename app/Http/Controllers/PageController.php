<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Transaksi;

class PageController extends Controller
{
    //variabel untuk username
    public $username = '';


    public function home(Request $request)
    {
        
		$nama = array('nama' => $request->session()->get('nama'));
		
        $barang = Barang::all();
        
        return view ('home', ['barang' => $barang]);
        
        //return view ('admin');
    }

    public function login()
    {
        return view ('login');
    }

    public function register()
    {
        return view ('register');
    }

    public function admin()
    {
        return view ('admin');
    }

    public function kategori($id){
        $barang = Barang::where('id_kategori',$id)->get();
        return view('kategori',['barang' => $barang]);
    }

    public function cari(Request $request){
        $nama = $request->nama_barang;
        $barang = Barang::where('nama' );
    }

    public function daftar_produk()
    {
        $produk = Barang::all();
        return view ('daftarProduk',['barang' => $produk]);
    }

    public function laporan()
    {
        return view('laporan');
    }

    public function transaksi()
    {
        $transaksi = transaksi::where('status','belum diterima')->get();
        return view('transaksi', ['transaksi' => $transaksi]);
    }
}
