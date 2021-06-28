@extends('layouts.admin')

@section('title','admin | fesien')

@section('konten')
<br>
<br>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <button type="button" id="t1" onclick="show('c1')" class="list-group-item list-group-item-action">Melihat daftar produk</button>
                    <button type="button" id="t2" onclick="show('c2')" class="list-group-item list-group-item-action">Menambah produk</button>
                    <button type="button" id="t3" onclick="show('c3')" class="list-group-item list-group-item-action">Melihat detail produk</button>
                    <button type="button" id="t4" onclick="show('c4')" class="list-group-item list-group-item-action">Mengedit detail produk</button>
                    <button type="button" id="t5" onclick="show('c5')" class="list-group-item list-group-item-action">Menghapus produk</button>
                    <button type="button" id="t6" onclick="show('c6')" class="list-group-item list-group-item-action">Melihat laporan</button>
                    <button type="button" id="t7" onclick="show('c7')" class="list-group-item list-group-item-action">Melihat daftar admin</button>
                    <button type="button" id="t8" onclick="show('c8')" class="list-group-item list-group-item-action">Menambah admin</button>
                    <button type="button" id="t9" onclick="show('c9')" class="list-group-item list-group-item-action">Melihat detail admin</button>
                    <button type="button" id="t10" onclick="show('c10')" class="list-group-item list-group-item-action">Menghapus admin</button>

                    <button type="button" id="t11" onclick="show('c11')" class="list-group-item list-group-item-action">Edit Profil</button>
                    <button type="button" id="t12" onclick="show('c12')" class="list-group-item list-group-item-action">Logout</button>
                    
                </div>
            </div>
            <div class="col-9 bg-white">


                <div class="container mb-3" id="c1" style="display:block">
                    <h3 class="text-center">Melihat daftar produk</h3>
                    <br>
                    <p class="mb-3"> 1. Pilih 'Daftar Produk'</p>
                    <img src="{{ asset('gambar/bantuan/admin/tombol daftar produk.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3">2. Daftar produk akan tampil</p>
                    <img src="{{ asset('gambar/bantuan/admin/daftar produk.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                </div>





                <div class="container mb-3" id="c2" style="display:none">
                    <h3 class="text-center">Menambah produk</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan tombol  ' Tambah+'</p>
                    <img src="{{ asset('gambar/bantuan/admin/tambah barang.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 2. Isi detail barang</p>
                    <img src="{{ asset('gambar/bantuan/admin/simpan barang.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 3. Tekan tombol  ' simpan '</p>
                    <br>
                    <br>
                    <br>
                </div>



                <div class="container mb-3" id="c3" style="display:none">
                    <h3 class="text-center">Melihat detail produk</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan tombol mata</p>
                    <img src="{{ asset('gambar/bantuan/admin/lihat produk.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 2. Tampil detail produk</p>
                    <img src="{{ asset('gambar/bantuan/admin/detail produk.png') }}" alt="" style="width:100%;height:auto;">
                </div>



                <div class="container mb-3" id="c4" style="display:none">
                    <h3 class="text-center">Mengedit detail produk</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan tombol pensil</p>
                    <img src="{{ asset('gambar/bantuan/admin/edit produk.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 2. Isi detail produk</p>
                    <img src="{{ asset('gambar/bantuan/admin/form edit produk.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 3. Tekan simpan</p>
                    <br>
                    <br>
                    <br>
                </div>


                <div class="container mb-3" id="c5" style="display:none">
                    <h3 class="text-center">Menghapus produk</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan tombol sampah</p>
                    <img src="{{ asset('gambar/bantuan/admin/hapus produk.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 2. Konfirmasi hapus produk</p>
                    <br>
                    <br>
                    <br>
                </div>


                <div class="container mb-3" id="c6" style="display:none">
                    <h3 class="text-center">Melihat laporan</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan tombol laporan</p>
                    <img src="{{ asset('gambar/bantuan/admin/laporan.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 2. Tampil data laporan</p>
                    <img src="{{ asset('gambar/bantuan/admin/data laporan.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                </div>


                <div class="container mb-3" id="c7" style="display:none">
                    <h3 class="text-center">Melihat daftar admin</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan tombol data admin</p>
                    <img src="{{ asset('gambar/bantuan/admin/admin.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 2. Tampil data admin</p>
                    <img src="{{ asset('gambar/bantuan/admin/data admin.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                </div>


                <div class="container mb-3" id="c8" style="display:none">
                    <h3 class="text-center">Menambah admin</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan tombol 'tambah+'</p>
                    <img src="{{ asset('gambar/bantuan/admin/tambah admin.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 2. Isi detail admin</p>
                    <img src="{{ asset('gambar/bantuan/admin/form tambah admin.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 3. Klik Simpan</p>
                    <br>
                    <br>
                    <br>
                </div>


                <div class="container mb-3" id="c9" style="display:none">
                    <h3 class="text-center">Melihat detail admin</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan tombol mata</p>
                    <img src="{{ asset('gambar/bantuan/admin/lihat admin.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 2. Tampil detail admin</p>
                    <img src="{{ asset('gambar/bantuan/admin/detail admin.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                </div>


                <div class="container mb-3" id="c10" style="display:none">
                    <h3 class="text-center">Menghapus admin</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan tombol sampah</p>
                    <img src="{{ asset('gambar/bantuan/admin/hapus admin.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 2. Konfirmasi penghapusan</p>
                    
                    <br>
                    <br>
                    <br>
                </div>



                <div class="container mb-3" id="c11" style="display:none">
                    <h3 class="text-center">Edit Profil</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan profil</p>
                    <img src="{{ asset('gambar/bantuan/tombol profil.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 2. Pilih 'Edit Profil'</p>
                    <img src="{{ asset('gambar/bantuan/profil.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 3. Isi semua form yang ingin diedit</p>
                    <img src="{{ asset('gambar/bantuan/form edit profil.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 4. Tekan Simpan</p>
                </div>




                <div class="container mb-3" id="c12" style="display:none">
                    <h3 class="text-center">Logout</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan profil</p>
                    <img src="{{ asset('gambar/bantuan/tombol profil.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 2. Pilih 'Logout'</p>
                    <img src="{{ asset('gambar/bantuan/logout.png') }}" alt="" style="width:100%;height:auto;">
                    <br>
                </div>


            </div>
        </div>
    </div>
@endsection

@section('script2')
    <script>
        var terlihat = "c1" ;
        function show(kontainer){
            document.getElementById(terlihat).style.display = "none";
            document.getElementById(kontainer).style.display = "block";
            terlihat = kontainer;
        }
    </script>
@endsection
