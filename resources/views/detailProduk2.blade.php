@extends('layouts.main')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/styleSingleProduk.css') }}">
@endsection

@section('title','produk')

@section('notif','hidden')

@section('konten')
    @foreach ($barang as $barang)
      <!-- Breadcrum -->
        <div class="container">
            <nav aria-label="breadcrumb" style="background-color: #f2f2f2;" class="mt-4">
                <ol class="breadcrumb p-4 ">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none" >Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('kategori', $barang->id_kategori ) }}" class="text-decoration-none" >{{ $barang->nama_kategori }}</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang }}</li>
                </ol>
              </nav>
        </div>

      <!-- Akhir Breadcrum -->

      <!-- Detail Produk -->
            <div class="container w-100">
                <div class="row row-produk">
                    <div class="col-lg-5">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                
                                        @if ( $barang->gambar_1  != '' )
                                        <div class="carousel-item active">
                                            <img src="{{ asset('gambar/produk/' . $barang->gambar_1 ) }}" class="d-block w-100" alt="...">
                                        </div>
                                        @endif
                                        @if ( $barang->gambar_2  != '' )
                                        <div class="carousel-item">
                                            <img src="{{ asset('gambar/produk/' . $barang->gambar_2 ) }}" class="d-block w-100" alt="...">
                                        </div>
                                        @endif
                                        @if ( $barang->gambar_3  != '' )
                                        <div class="carousel-item">
                                            <img src="{{ asset('gambar/produk/' . $barang->gambar_3 ) }}" class="d-block w-100" alt="...">
                                        </div>
                                        @endif
                                        @if ( $barang->gambar_4  != '' )
                                        <div class="carousel-item">
                                            <img src="{{ asset('gambar/produk/' . $barang->gambar_4 ) }}" class="d-block w-100" alt="...">
                                        </div>
                                        @endif
                                        @if ( $barang->gambar_5  != '' )
                                        <div class="carousel-item">
                                            <img src="{{ asset('gambar/produk/' . $barang->gambar_5 ) }}" class="d-block w-100" alt="...">
                                        </div>
                                        @endif
                                
                            </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            

                        </div>
                    
                        
                    
                    <div class="col-lg">

                        <!-- form -->
                        <form action="{{ route('keranjang.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="id_barang" id="id_barang" value="{{ $barang->id }}">

                            <h3>{{ $barang->nama_barang }}</h3>
                            
                            <h6 class=" d-inline-block label-rating rating">{{ $barang->rating }}</h6>
                            @for ($i = 0 ; $i < $barang->rating ; $i++)
                            <i class="fa fa-star text-succes rating"></i>
                            @endfor
                            @for ($i = 0 ; $i < 5 - $barang->rating ; $i++)
                            <i class="far fa-star"></i>
                            @endfor
                            
                            
                            <h6 class=" d-inline-block penilaian"><strong>{{ $barang->penilaian }}</strong> Penilaian</h6>
                            <h6 class=" d-inline-block"><strong>{{ $barang->terjual }}</strong> Terjual</h6>

                            <br>
                            <br>
                            <h3 class="mb-3 harga">@currency($barang->harga)</h3>
                            <br>
                            <h6 class=" d-inline-block" style="margin-right:20px;">Kuantitas</h6>
                            <button type="button" class="btn btn-dark btn-sm" id="kurang"><i class="fas fa-minus"></i></button>
                            
                        <!-- <input class=" mx-2" id="total" name="total" value="1" style="width:40px;height:31px;padding-bottom:6px;"></input> -->
                            <span class="mx-2" id="jumlah">1</span>
                            <input type="hidden" id="jumlah_barang" name="jumlah_barang" value="1">

                            <button type="button" class="btn btn-warning btn-sm" id="tambah"><i class="fas fa-plus text-white"></i></button>
                            <span class="mx-2">tersisa {{ $barang->stok }} PCS</span>
                            <input type="hidden" value="{{ $barang->stok }}" id="stok">
                            <br>
                            <br>
                            <div>
                                <p>{{ $barang->keterangan_gambar }}</p>
                            </div>
                            <div>
                                <p>Pilih variasi : </p>
                            </div>
                            <div>
                                @if ( $barang->varian_1  != '' )
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="variasi" id="varian_1" value="{{ $barang->varian_1 }}"  checked>
                                    <label class="form-check-label" >
                                        {{ $barang->varian_1 }}
                                    </label>
                                </div>
                                @endif
                                @if ( $barang->varian_2  != '' )
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="variasi" id="varian_2" value="{{ $barang->varian_2 }}">
                                    <label class="form-check-label" >
                                        {{ $barang->varian_2 }}
                                    </label>
                                </div>
                                @endif
                                @if ( $barang->varian_3  != '' )
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="variasi" id="varian_3" value="{{ $barang->varian_3 }}" >
                                    <label class="form-check-label" >
                                        {{ $barang->varian_3 }}
                                    </label>
                                </div>
                                @endif
                                @if ( $barang->varian_4  != '' )
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="variasi" id="varian_4" value="{{ $barang->varian_4 }}" >
                                    <label class="form-check-label" >
                                        {{ $barang->varian_4 }}
                                    </label>
                                </div>
                                @endif
                                @if ( $barang->varian_5  != '' )
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="variasi" id="varian_5" value="{{ $barang->varian_5 }}" >
                                    <label class="form-check-label" >
                                        {{ $barang->varian_5 }}
                                    </label>
                                </div>
                                @endif
                            </div>
                            <br>
                            <h7>{{ $barang->keterangan_varian }}}</h7>

                            <div class="btn-produk mt-4">
                                <button class="btn btn-primary me-2 btn-custom" type="submit" ><i class="fas fa-shopping-cart fs-6 me-2"></i> Masukkan Keranjang</button>
                                <a href="#" class="btn btn-danger btn-custom" >Beli Sekarang</a>
                            </div>
                        </form>

                         <!-- akhir form -->

                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col">
                        <div class="container" style="background-color:white;">
                            <h3>Deskripsi Produk</h3>
                            <br>
                            <div class="container-label-deskripsi">
                                <p class="label-deskripsi">Kategori</p>
                                <p class="deskripsi">: {{ $barang->nama_kategori }}</p>
                                <br>
                                <p class="label-deskripsi">Merk</p>
                                <p class="deskripsi">: {{ $barang->merk }}</p>
                                <br>
                                <p class="label-deskripsi">Stok</p>
                                <p class="deskripsi">: {{ $barang->stok }}</p>
                                <br>
                            </div>
                            <br>
                            <p>
                                {{ $barang->deskripsi }}
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>


            
    @endforeach
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
        $("#tambah").click(function(){
            var value = parseInt( document.getElementById('jumlah').innerHTML  );
            if(value != $('#stok').val()){
                value += 1;
                document.getElementById("jumlah").innerHTML = value;
                document.getElementById("jumlah_barang").value = value;
            }
        });

        $("#kurang").click(function(){
            var value = parseInt( document.getElementById('jumlah').innerHTML  );
            if(value != 1){
                value -= 1;
                document.getElementById("jumlah").innerHTML = value;
                document.getElementById("jumlah_barang").value = value;
            }
        });


    </script>
@endsection