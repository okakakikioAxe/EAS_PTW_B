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

    public function form_tambah_admin()
    {
        
        return view('tambahAdmin');
    }

    public function tambah_admin(Request $request)
    {
        $nama = $request->nama;
        $email = $request->email;
        $no_telepon = $request->no_telepon;
        $kelamin = $request->kelamin;
        $tanggal_lahir = $request->tanggal_lahir;
        //$tanggal_lahir = str_replace('/', '-', $tanggal_lahir);
        $alamat = $request->alamat;
        $pw1 = $request->pw1;
        $pw2 = $request->pw2;

        $arr = explode(' ',trim($nama));
        $username = $arr[0].rand(1,100);

        function cekUsername($usernamenya, $arr){
            $Username = User::where('username', $usernamenya)->first();
            if ($Username === null) {
                return $usernamenya;
            }
            else{
                $arr = explode(' ',trim($nama));
                $username = $arr[0].rand(1,100);
                cekUsername($username);
            }
        }
        
        if($pw1 == $pw2){
            $user = new User;  
            $user->nama_user = $nama;
            $user->username = $username;
            $user->email = $email;
            $user->no_telepon = $no_telepon;
            $user->kelamin = $kelamin;
            $user->tanggal_lahir = $tanggal_lahir;
            $user->alamat = $alamat;
            $user->level = 'admin';
            $user->password = bcrypt($pw1);
            $user->save();
            return redirect()->route('admin.data');
        }
        else{
            return back()->withInput();
        }

        //$user  = new User;
        //return redirect()->route('admin.data');
    }

    public function detail_admin($id){
        $user = User::where('id',$id)->get();
        return view('detailAdmin',['user'=>$user]);
    }

    

    public function delete_admin($id){
        $id_user = session()->get('id');
        //$user = User::where('id',$id)->get();
        if($id == $id_user){
            return redirect()->route('admin.data')->with('message', 'Gagal menghapus karena akun sedang dipakai')->with('message2','alert-danger');
        }
        User::where('id',$id)->delete();
        return redirect()->route('admin.data')->with('message', 'Data berhasil dihapus')->with('message2','alert-success');
    }

    public function edit_barang($id)
    {
        $barang = Barang::where('id',$id)->get();
        return view('editBarang',['barang' => $barang]);
    }

    public function form_tambah_barang()
    {
        return view('tambahProduk');
    }

    public function tambah_barang(Request $request)
    {
        $nama = $request->nama;
        $harga =$request->harga;
        $kategori = $request->kategori;
        $stok = $request->stok;
        $merk = $request->merk;
        $deskripsi_singkat = $request->deskripsi_singkat;
        $deskripsi = $request->deskripsi;
        $k_varian = $request->keterangan_varian;
        $k_gambar = $request->keterangan_gambar;

        $v1 = $request->varian_1;
        $v2 = $request->varian_2;
        $v3 = $request->varian_3;
        $v4 = $request->varian_4;
        $v5 = $request->varian_5;

        $barang = new Barang;
        $barang->nama_barang = $nama;
        $barang->harga = $harga;
        $barang->rating = 5;
        $barang->id_kategori = $kategori;
        $barang->terjual = 0;
        $barang->penilaian = 0;
        $barang->stok = $stok;
        $barang->merk = $merk;
        $barang->deskripsi = $deskripsi;
        $barang->deskripsi_singkat = $deskripsi_singkat;
        $barang->keterangan_varian = $k_varian;
        $barang->keterangan_gambar = $k_gambar;

        $barang->varian_1 = $v1;
        $barang->varian_2 = $v2;
        $barang->varian_3 = $v3;
        $barang->varian_4 = $v4;
        $barang->varian_5 = $v5;
        
        if($request->gambar_1 != null){
        $photo = $request->file('gambar_1')->getClientOriginalName();
        $photo = rand(1,100000).$photo;
        $destination = base_path() . '/public/gambar/produk';
        $request->file('gambar_1')->move($destination, $photo);
        $barang->gambar_1 = $photo;
        }

        if($request->gambar_2 != null){
        $photo = $request->file('gambar_2')->getClientOriginalName();
        $photo = rand(1,100000).$photo;
        $destination = base_path() . '/public/gambar/produk';
        $request->file('gambar_2')->move($destination, $photo);
        $barang->gambar_2 = $photo;
        }

        if($request->gambar_3 != null){
            $photo = $request->file('gambar_3')->getClientOriginalName();
            $photo = rand(1,100000).$photo;
            $destination = base_path() . '/public/gambar/produk';
            $request->file('gambar_3')->move($destination, $photo);
            $barang->gambar_3 = $photo;
        }

        if($request->gambar_4 != null){
            $photo = $request->file('gambar_4')->getClientOriginalName();
            $photo = rand(1,100000).$photo;
            $destination = base_path() . '/public/gambar/produk';
            $request->file('gambar_4')->move($destination, $photo);
            $barang->gambar_4 = $photo;
        }

        if($request->gambar_5 != null){
            $photo = $request->file('gambar_5')->getClientOriginalName();
            $photo = rand(1,100000).$photo;
            $destination = base_path() . '/public/gambar/produk';
            $request->file('gambar_5')->move($destination, $photo);
            $barang->gambar_5 = $photo;
        }
        $barang->save();

        return redirect()->route('admin.produk');
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
