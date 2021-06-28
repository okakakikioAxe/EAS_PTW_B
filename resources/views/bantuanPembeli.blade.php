@extends('layouts.main')

@section('title','bantuan | fesien')

@section('konten')
<br>
<br>
<br>
<br>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <button type="button" id="t1" onclick="show('c1')" class="list-group-item list-group-item-action">Menambah barang ke keranjang</button>
                    <button type="button" id="t2" onclick="show('c2')" class="list-group-item list-group-item-action">Menambah jumlah barang di keranjang</button>
                    <button type="button" id="t3" onclick="show('c3')" class="list-group-item list-group-item-action">Menghapus barang di keranjang</button>
                    <button type="button" id="t4" onclick="show('c4')" class="list-group-item list-group-item-action">Checkout</button>
                    <button type="button" id="t5" onclick="show('c5')" class="list-group-item list-group-item-action">Edit Profil</button>
                    <button type="button" id="t6" onclick="show('c6')" class="list-group-item list-group-item-action">Logout</button>
                    <button type="button" id="t7" onclick="show('c7')" class="list-group-item list-group-item-action">Mencari barang</button>
                </div>
            </div>
            <div class="col-9 bg-white">


                <div class="container mb-3" id="c1" style="display:block">
                    <h3 class="text-center">Menambah barang ke keranjang</h3>
                    <br>
                    <p class="mb-3"> 1. Pilih barang yang anda inginkan</p>
                    <img src="{{ asset('gambar/bantuan/pilih barang.png') }}" alt="" style="width:60%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3">2. Pilih 'Masukkan keranjang'</p>
                    <img src="{{ asset('gambar/bantuan/tambah ke keranjang.png') }}" alt="" style="width:60%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3">3. Anda akan diarahkan ke halaman keranjang</p>
                    <img src="{{ asset('gambar/bantuan/keranjang.png') }}" alt="" style="width:60%;height:auto;">
                    
                </div>





                <div class="container mb-3" id="c2" style="display:none">
                    <h3 class="text-center">Menambah jumlah barang di keranjang</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan tombol  ' + ' pada produk yang ingin dibeli</p>
                    <img src="{{ asset('gambar/bantuan/tambah barang.png') }}" alt="" style="width:60%;height:auto;">
                    <br>
                    <br>
                    <p class="mb-3"> 2. Tekan tombol  ' simpan '</p>
                </div>



                <div class="container mb-3" id="c3" style="display:none">
                    <h3 class="text-center">Menambah jumlah barang di keranjang</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan tombol dengan lingkaran merah</p>
                    <img src="{{ asset('gambar/bantuan/hapus barang.png') }}" alt="" style="width:60%;height:auto;">
                    <br>
                    <br>
                    <p class="mb-3"> 2. Barang akan hilang dari keranjang</p>
                </div>



                <div class="container mb-3" id="c4" style="display:none">
                    <h3 class="text-center">Checkout</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan checkout</p>
                    <img src="{{ asset('gambar/bantuan/checkout.png') }}" alt="" style="width:60%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 2. Upload gambar bukti pembayaran</p>
                    <img src="{{ asset('gambar/bantuan/form checkout.png') }}" alt="" style="width:60%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 3. Tekan OK</p>
                </div>



                <div class="container mb-3" id="c5" style="display:none">
                    <h3 class="text-center">Edit Profil</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan profil</p>
                    <img src="{{ asset('gambar/bantuan/tombol profil.png') }}" alt="" style="width:60%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 2. Pilih 'Edit Profil'</p>
                    <img src="{{ asset('gambar/bantuan/profil.png') }}" alt="" style="width:60%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 3. Isi semua form yang ingin diedit</p>
                    <img src="{{ asset('gambar/bantuan/form edit profil.png') }}" alt="" style="width:60%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 4. Tekan Simpan</p>
                </div>




                <div class="container mb-3" id="c6" style="display:none">
                    <h3 class="text-center">Logout</h3>
                    <br>
                    <p class="mb-3"> 1. Tekan profil</p>
                    <img src="{{ asset('gambar/bantuan/tombol profil.png') }}" alt="" style="width:60%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 2. Pilih 'Logout'</p>
                    <img src="{{ asset('gambar/bantuan/logout.png') }}" alt="" style="width:60%;height:auto;">
                    <br>
                </div>



                <div class="container mb-3" id="c7" style="display:none">
                    <h3 class="text-center">Mencari barang</h3>
                    <br>
                    <p class="mb-3"> 1. Isi nama barang yang ingin anda cari</p>
                    <img src="{{ asset('gambar/bantuan/cari barang.png') }}" alt="" style="width:60%;height:auto;">
                    <br>
                    <br>
                    <br>
                    <p class="mb-3"> 2. Pilih 'search'</p>
                    
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