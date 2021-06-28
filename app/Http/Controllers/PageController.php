<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\User;

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
        $data = DB::table('transaksi')
            ->select(DB::raw("SUM(`total`) AS `total`" ),DB::raw("DATE_FORMAT(`created_at`,'%Y-%m-%d') AS `tanggal`"))
            ->whereMonth('created_at', '6')
            ->whereYear('created_at', '2021')
            ->groupBy(DB::raw("DATE_FORMAT( `created_at`, '%Y-%m-%d')"))
            ->get();
        $data2 = DB::table('transaksi')
            ->select(DB::raw("SUM(`total`) AS `total`" ),DB::raw("DATE_FORMAT(`created_at`,'%Y-%m') AS `tanggal`"))
            ->whereMonth('created_at', '6')
            ->whereYear('created_at', '2021')
            ->groupBy(DB::raw("DATE_FORMAT( `created_at`, '%Y-%m')"))
            ->get();
        return view('laporan',['data' => $data, 'data2' => $data2]);
    }


    public function cari_laporan(Request $request)
    {
        $tanggal = $request->bulan;
        $bulan = substr($tanggal,-2);
        $tahun = substr($tanggal,0,4);
        $data = DB::table('transaksi')
            ->select(DB::raw("SUM(`total`) AS `total`" ),DB::raw("DATE_FORMAT(`created_at`,'%Y-%m-%d') AS `tanggal`"))
            ->whereMonth('created_at', $bulan)
            ->whereYear('created_at', $tahun)
            ->groupBy(DB::raw("DATE_FORMAT( `created_at`, '%Y-%m-%d')"))
            ->get();

        $data2 = DB::table('transaksi')
            ->select(DB::raw("SUM(`total`) AS `total`" ),DB::raw("DATE_FORMAT(`created_at`,'%Y-%m') AS `tanggal`"))
            ->whereMonth('created_at', $bulan)
            ->whereYear('created_at', $tahun)
            ->groupBy(DB::raw("DATE_FORMAT( `created_at`, '%Y-%m')"))
            ->get();
        return view('laporan',['data' => $data, 'data2' => $data2]);
    }


    public function data_admin()
    {
        $user = User::where('level','admin')->get();
        return view('dataAdmin', ['user' => $user]);
    }

    public function edit_barang($id)
    {
        $barang = Barang::where('id',$id)->get();
        return view('editBarang',['barang' => $barang]);
    }

    public function simpan_edit_barang(Request $request,$id)
    {
        $nama = $request->nama;
        $harga = $request->harga;
        $stok = $request->stok;
        $merk = $request->merk;
        $d_singkat = $request->deskripsi_singkat;
        $d = $request->deskripsi;
        $k_gambar = $request->keterangan_gambar;
        $k_varian = $request->keterangan_varian;

        $barang = Barang::find($id);

        $barang->nama_barang = $nama;
        $barang->harga = $harga;
        $barang->stok = $stok;
        $barang->merk = $merk;
        $barang->deskripsi_singkat = $d_singkat;
        $barang->deskripsi  = $d;
        $barang->keterangan_gambar = $k_gambar;
        $barang->keterangan_varian = $k_varian;
        $barang->save();
        
        //Barang::where('id',$id)->
        //$barang = Barang::where('id',$id)->get();
        return redirect()->route('admin.produk');
    }

    public function lihat_barang($id)
    {
        $barang = Barang::where('id',$id)->get();
        return view('lihatProduk',['barang' => $barang]);
    }
}
