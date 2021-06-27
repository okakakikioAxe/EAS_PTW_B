@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/styleKeranjang.css') }}">
@endsection

@section('title','keranjang')

@section('notif','hidden')

@section('konten')

      <!-- Breadcrum -->

      <div class="container">
        <nav aria-label="breadcrumb" style="background-color: #f2f2f2;" class="mt-4">
            <ol class="breadcrumb p-4 ">
              <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none" >Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
            </ol>
          </nav>
    </div>

      <!-- Akhir Breadcrum -->

      <!-- Keranjang 1 -->

      <div class="container my-3 bg-white">
          
        <h3 class="p-4">Produk Dalam Keranjang</h3>
          
      </div>
        
    </div>
           
      <div class="container bg-white my-2 produk" id="produk1">
      <input type="hidden" class="index" value="1">
        <div class="row row-keranjang">
            <div class="col-lg-2">
                <figure class="figure">
                    <img src="{{ asset('gambar/produk/baju1.jpg') }}" class="figure-img img-fluid " style="border-radius: 5px; width: 200px;" >
                  </figure>

            </div>

            <div class="col mt-3">
                <h6 class="mb-2 text-muted"> Produk</h6>
                <h5 class="mt-2">PULLOVER HOODIE CHAMPION BIG C</h5>
                <h6 class="text-muted mb-3">Rp 279,000</h6>
            </div>

            <div class="col mt-5">
              <h6 class="mb-2"></h6>
              <h7 class="mt-3 text-muted">Varian : </h7>
              <div class="btn-group" role="group" aria-label="Basic example">
              <h7 class="mb-1 text-muted">M - 30 x 50</h7>
            </div>
              
            </div>

            <div class="col-3 mt-4">
              <h6 class="mb-3 text-muted">Kuantitas</h6>
              <h7 class="mt-4 text-muted mr-3">Jumlah produk :</h7>
              <button type="button" class="btn btn-primary btn-sm operator" onclick="kurang('1')"><i class="fas fa-minus text-white"></i></button>
              <span class="mx-2 jumlah" id="value1">1</span>
              <button type="button" class="btn btn-primary btn-sm operator" onclick="tambah('1')"><i class="fas fa-plus text-white"></i></button>
              <input type="hidden" id="harga1" value="100000"></input>
              <p>Terisia 20 PCS</p>
              <input type="hidden" id="stok1" value="20"></input>
             <!-- <input type="hidden" class="kuantitas" id="kuantitas1" value=""></input> -->
            </div>

            <div class="col-lg-1">
                <a class="btn btn-danger w-100 h-100"  href="#" onclick="remove('1')" role="button"><i class="fas fa-ban py-lg-5"></i></a>
            </div>

        </div>
    </div>
      <!-- Akhir Keranjang 1 -->

      <!-- Keranjang 2 -->
      <div class="container bg-white my-2 produk" id="produk2">
        <input type="hidden" class="index" value="2">
        <div class="row row-keranjang">
            <div class="col-lg-2">
                <figure class="figure">
                    <img src="{{ asset('gambar/produk/celana1.jpg') }}" class="figure-img img-fluid " style="border-radius: 5px; width: 200px;" >
                  </figure>

            </div>

            <div class="col mt-3">
                <h6 class="mb-2 text-muted"> Produk</h6>
                <h5 class="mt-2">CREWNECK NY</h5>
                <h6 class="text-muted mb-3">Rp 199,000</h6>
            </div>

            <div class="col mt-5">
              <h6 class="mb-2"></h6>
              <h7 class="mt-3 text-muted">Varian : </h7>
              <div class="btn-group" role="group" aria-label="Basic example">
              <h7 class="mb-1 text-muted">M - 30 x 50</h7>
            </div>
              
            </div>

            <div class="col-3 mt-4">
              <h6 class="mb-3 text-muted">Kuantitas</h6>
              <h7 class="mt-4 text-muted mr-3">Jumlah produk :</h7>
              <button type="button" class="btn btn-primary btn-sm operator" onclick="kurang('2')"><i class="fas fa-minus text-white"></i></button>
              <span class="mx-2 jumlah" id="value2">2</span>
              <button type="button" class="btn btn-primary btn-sm operator" onclick="tambah('2')"><i class="fas fa-plus text-white"></i></button>
              <input type="hidden" id="harga2" value="200000"></input>
              <p>Terisia 10 PCS</p>
              <input type="hidden" id="stok2" value="10"></input>
            </div>

            <div class="col-sm-1 ">
                <a class="btn btn-danger w-100 h-100"  href="#" onclick="remove('2')" role="button"><i class="fas fa-ban py-5"></i></a>
            </div>
        </div>
    </div>
      <!-- Akhir Keranjang 2 -->

      <!-- CheckOut-->
        <div class="container mt-4">
            <div class="row row-checkout">
                <h5 class="text-dark" id="total">Total(1 produk): Rp 1,073,000</h5>
                <button type="button" class="btn btn-warning btn-lg"><Small></Small> CheckOut </button>
            </div>
        </div>

      <!-- Akhir CheckOut-->
@endsection

      
@section('footer')
        <FOOter class="bg-dark text-white p-5">
            <div class="row">
                <div class="col-md-3">
                    <h5>LAYANAN PELANGGAN</h5>
                    <ul>
                        <li>Pusat Bantuan</li>
                        <li>Cara Pembelian</li>
                        <li>Pengiriman</li>
                        <li>Cara Pengembalian</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>TENTANG KAMI</h5>
                </div>
                <div class="col-md-3">
                    <h5>MITRA KERJA SAMA</h5>
                    <ul>
                        <li>JNT Express</li>
                        <li>JNE</li>
                        <li>Si Cepat</li>
                        <li>Pos Indonesia</li>
                        <li>Ninja Express</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>HUBUNGI KAMI</h5>
                    <ul>
                        <li>+62 888 777 999 111</li>
                        <li>Customer@T-shirtshop.com</li>
                    </ul>
                </div>
            </div>
        </FOOter>
@endsection

@section('script2')
  <script>

        function tambah(id){
            var value = parseInt( document.getElementById('value'+id).innerHTML  );
            var stok = parseInt(document.getElementById('stok'+id).value) ;
            
            if(value < stok){
              value += 1;
              document.getElementById("value"+id).innerHTML = value;
              document.getElementById("kuantitas"+id).value = value;
            }
          
        }

        function kurang(id){
          if(document.getElementById('value'+id).innerHTML != 1){
            var value = parseInt( document.getElementById('value'+id).innerHTML  );
            value -= 1;
            document.getElementById("value"+id).innerHTML = value;
          }
        }

        
        function hitung(){
            var index = 0;
            var jumlah_produk = 0;
            var total = 0;
            $('.index').each(function(){
              index = parseFloat(this.value);

              let kuantitas = parseFloat($('#value'+index).text());;
              let harga =parseFloat( $('#harga'+index).val() );
              total += (harga * kuantitas);  
              jumlah_produk += kuantitas;
            });
            document.getElementById("total").innerHTML = "Total("+jumlah_produk+" produk): Rp " + total;
        }



        $('.operator').click(function(){
            hitung();
          })
        
        window.onload = function(){
            hitung();
        }

        function remove(id){
          $("#produk"+id).remove();
          hitung();
        }



    </script>
@endsection
      
