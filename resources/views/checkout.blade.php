@extends('layouts.main')

@section('title','checkout')

@section('notif','hidden')

@section('konten')
      <div class="container">
          <div class="row">
              <div class="col"></div>
              <div class="col-7">
                  <br>
                  <br>
                  <br>
                <h2 class=" text-center bg-white p-3">Pembayaran</h2>
                <br>
                <div class="container bg-white p-2">
                  <h5 class="text-dark text-center" >NO REKENING</h5>
                  <h2 class="text-danger text-center" >BNI   -   0225759872</h2>
                  <h5 class="text-info text-center" >(Admin Fesien)</h5>
                  <br>
                  <br>
                 
                    <h5 class="text-dark text-center" >Jumlah yang harus dibayar : @currency($total_harga)</h5>
                 
                  <br>
                  <hr class="sidebar-divider btn-dark">
                  <p class="text-dark" >Instruksi Pembayaran : </p>
                  <div class="container">
                      <div class="row">
                          <div class="col-1">
                              1.
                          </div>
                          <div class="col-8">
                              Transfer ke nomer rekening diatas sesuai nominal yang harus dibayar
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-1">
                              2.
                          </div>
                          <div class="col-8">
                              Kirim bukti transfer ke form dibawah
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-1">
                              3.
                          </div>
                          <div class="col-8">
                              Klik OK dan tunggu informasi berikutnya
                          </div>
                      </div>

                  </div>
                  <hr class="sidebar-divider btn-dark">
                  <form action="{{ route('checkout') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload bukti transfer</label>
                        
                        <input type="hidden" name="total_harga" id="total_harga" value="{{ $total_harga }}">
                        <input type="hidden" name="id_transaksi" id="id_transaksi" value="{{ $id_transaksi }}">
                        <input class="form-control" type="file" id="image" name="image" required> 
                    </div>
                    <br>
                    <button type="submit" class="btn btn-warning btn-lg w-100"><Small></Small> OK </button>
                  </form>
                  <br>
                </div>
              </div>


              <div class="col"></div>


          </div>
          
      </div>
      <br>

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

