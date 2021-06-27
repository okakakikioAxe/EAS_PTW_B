@extends('layouts.main')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/styleSingleProduk.css') }}">
@endsection

@section('title','Detail Produk')



@section('notif','hidden')

@section('konten')
      <!-- Breadcrum -->
        <div class="container">
            <nav aria-label="breadcrumb" style="background-color: #f2f2f2;" class="mt-4">
                <ol class="breadcrumb p-4 ">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none" >Home</a></li>
                  <li class="breadcrumb-item"><a href="#" class="text-decoration-none" >Kategori</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Produk</li>
                </ol>
              </nav>
        </div>

      <!-- Akhir Breadcrum -->

      <!-- Detail Produk -->
            <div class="container">
                <div class="row row-produk">
                    <div class="col-lg-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($barang as $barang)
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ( $barang->gambar_1  != '' )
                                    <div class="carousel-item active">
                                        <img src="{{ asset('gambar/produk/' . $barang->gambar_1 ) }}" class="d-block w-100" alt="...">
                                    </div>
                                    @endif
                                @endfor
                                
                            @endforeach
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

                    <div class="col-lg-5">
                        <h3>CREWNECK NY</h3>
                        <i class="fa fa-star text-succes"></i>
                        <i class="fa fa-star text-succes"></i>
                        <i class="fa fa-star text-succes"></i>
                        <i class="fa fa-star text-succes"></i>
                        <i class="fa fa-star-half-alt text-succes"></i> <h6>4.5</h6>
                        <h4 class="text-muted mb-3">Rp 199,000</h4>
                        <h6 class=" d-inline-block" style="margin-right:20px;">Kuantitas</h6>
                        <button type="button" class="btn btn-dark btn-sm" id="kurang"><i class="fas fa-minus"></i></button>
                        <input class=" mx-2" id="total" name="total" value="1" style="width:40px;height:31px;padding-bottom:6px;"></input>
                        <button type="button" class="btn btn-warning btn-sm" id="tambah"><i class="fas fa-plus text-white"></i></button>
                        <span class="mx-2">tersisa 94 PCS</span>

                        <div class="btn-produk mt-4">
                            <a href="#" class="btn btn-primary me-2 btn-custom" ><i class="fas fa-shopping-cart fs-6 me-2"></i> Masukkan ke Keranjang</a>
                            <a href="#" class="btn btn-danger btn-custom" >Beli Sekarang</a>
                        </div>

                        <table class="table table-borderless">
                            <tr>
                                <th>CREWNECK NY</th>
                            </tr>
                            <tr>
                                <td>Refrensi tinggi 170 cm, BB 68 kg pakai size L 100% real pict</td>
                            </tr>
                            <tr>
                                <td>Perhatikan JAPMAR size chart (Panjang x Lebar)</td>
                                <td>M - 61 cm x 49 cm</td>
                                <td>L - 64 cm x 55 cm</td>
                                <td>XL - 69 cm x 58 cm</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
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
            $('#total').get(0).value++ 
        });

        $("#kurang").click(function(){
            if($('#total').val() > 1){
                $('#total').get(0).value--
            } 
        });
    </script>
@endsection