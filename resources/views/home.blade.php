@extends('layouts.main')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/styleHome.css') }}">
@endsection

@section('title','home | fesien')


@section('konten')
      <br>
      <br>
      <br>
      <div class="container">
        <div class="row mt-4 no-gutters">
            <div class="col-md">
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('gambar/slide2.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('gambar/slide3.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
        </div>
      </div>

      <br>
      <br>
      
      <div class="container container_kategori">
          <h5>KATEGORI</h5>
          <br>
              <div class="row mx-auto text-center">
                <a href="{{ route('kategori', 1 ) }}">
                  <div class="col text-center">
                      <div class="card mr-2 ml-2 p-3 text-center kartu_kategori">
                          <div class=" text-center"> 
                            <img src="{{ asset('gambar/baju pria v2.jpg') }}" class="card-img-top gambar_kategori" alt="...">
                          </div>
                          <br>
                          <div class="card-body bg-transparent">
                            <p class="card-text">Pakaian Pria</p>
                          </div>
                      </div>
                    </a>
                  </div>

                  <div class="col text-center">
                    <a href="{{ route('kategori', 2 ) }}">
                      <div class="card mr-2 ml-2 p-3 text-center kartu_kategori">
                        <div>
                          <img src="{{ asset('gambar/baju wanita v2.jpg') }}" class="card-img-top gambar_kategori" alt="...">
                        </div>
                        <br>
                        <div class="card-body bg-transparent">
                          <p class="card-text">Pakaian Wanita</p>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col text-center">
                    <a href="{{ route('kategori', 4 ) }}">
                      <div class="card mr-2 ml-2 p-3 text-center kartu_kategori">
                        <div>
                          <img src="{{ asset('gambar/jaket v2.jpg') }}" class="card-img-top gambar_kategori" alt="...">
                        </div>
                        <br>
                        <div class="card-body bg-transparent">
                          <p class="card-text">Jaket</p>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col text-center">
                    <a href="{{ route('kategori', 3 ) }}">
                      <div class="card mr-2 ml-2 p-3 text-center kartu_kategori">
                        <div>
                          <img src="{{ asset('gambar/hoodie v2.jpg') }}" class="card-img-top gambar_kategori" alt="...">
                        </div>
                        <br>
                        <div class="card-body bg-transparent">
                          <p class="card-text">Hoodie</p>
                        </div>
                      </div>
                    </a>
                  </div>

              </div>
              
              <div class="row mx-auto text-center">
                  <div class="col text-center">
                    <a href="{{ route('kategori', 5 ) }}">
                      <div class="card mr-2 ml-2 p-3 text-center kartu_kategori">
                          <div class=" text-center"> 
                            <img src="{{ asset('gambar/pakaian bayi v2.jpg') }}" class="card-img-top gambar_kategori" alt="...">
                          </div>
                          <br>
                          <div class="card-body bg-transparent">
                            <p class="card-text">Pakaian Bayi</p>
                          </div>
                      </div>
                    </a>
                  </div>

                  <div class="col text-center">
                    <a href="{{ route('kategori', 7 ) }}">
                      <div class="card mr-2 ml-2 p-3 text-center kartu_kategori">
                        <div>
                          <img src="{{ asset('gambar/sepatu pria v2.jpg') }}" class="card-img-top gambar_kategori" alt="...">
                        </div>
                        <br>
                        <div class="card-body bg-transparent">
                          <p class="card-text">Sepatu Pria</p>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col text-center">
                    <a href="{{ route('kategori', 8 ) }}">
                      <div class="card mr-2 ml-2 p-3 text-center kartu_kategori">
                        <div>
                          <img src="{{ asset('gambar/sepatu wanita v2.jpg') }}" class="card-img-top gambar_kategori" alt="...">
                        </div>
                        <br>
                        <div class="card-body bg-transparent">
                          <p class="card-text">Sepatu Wanita</p>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col text-center">
                    <a href="{{ route('kategori', 6 ) }}">
                      <div class="card mr-2 ml-2 p-3 text-center kartu_kategori">
                        <div>
                          <img src="{{ asset('gambar/pakaian olahraga v2.jpg') }}" class="card-img-top gambar_kategori" alt="...">
                        </div>
                        <br>
                        <div class="card-body bg-transparentt">
                          <p class="card-text">Pakaian Olahraga</p>
                        </div>
                      </div>
                    </a>
                  </div>

              </div>
              <br>
      </div>

      <br>
      <br>

      <div class="container container_produk">
          <h5>PRODUK TERBARU</h5>
          <br>
              <div class="row p-2">
                @foreach ($barang as $barang)
                <div class="col-md">
                  <div class="card mr-2 ml-2 kartu_produk">
                    <img src="{{ asset('gambar/produk/' . $barang->gambar_1) }}" class="card-img-top" >
                    <div class="card-body bg-light">
                        <h5 class="card-title text-truncate">{{ $barang->nama_barang }}</h5>
                        <p class="card-text text-truncate">{{ $barang->deskripsi_singkat }}</p>
                        
                        @for ($i = 0 ; $i < $barang->rating ; $i++)
                          <i class="fa fa-star text-succes rating"></i>
                        @endfor
                        @for ($i = 0 ; $i < 5 - $barang->rating ; $i++)
                          <i class="far fa-star"></i>
                        @endfor
                        
                        <br>
                        @currency($barang->harga)
                        <br>
                        <a href="{{ route('barang.show' , $barang->id) }}" class="btn btn-primary w-100">Detail</a>
                        
                    </div>
                  </div>
                </div>
                @endforeach
                
              </div>


              <div class="row p-2">

                
              </div>
        <br>
        <br>
        </div>
      </div>
      <br>
      <br>
@endsection


@section('footer')
      <FOOter class="bg-dark text-white p-5">
        <div class="container">
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
        </div>
      </FOOter>
@endsection
