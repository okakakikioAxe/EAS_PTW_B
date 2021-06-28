@extends('layouts.admin')

@section('title','tambah produk')

@section('konten')
<br>
    <div class="container">
    <a class="btn btn-success text-right" href="{{ route('admin.produk') }}" role="button">Kembali</a>
        <div class="row">
            <div class="col"></div>
            <div class="col-5">
                <h3 class="text-center">TAMBAH PRODUK</h3>
                
                <form action="{{ route('admin.tambah_barang') }}" method='post' enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="inputState" class="form-label">Kategori</label>
                        <select id="kategori" name="kategori" class="form-select">
                            <option value="1" selected>Pakaian Pria</option>
                            <option value="2">Pakaian Wanita</option>
                            <option value="3">Hoodie</option>
                            <option value="4">Jaket</option>
                            <option value="5">Pakaian Bayi</option>
                            <option value="6">Pakaian Olahraga</option>
                            <option value="7">Sepatu Pria</option>
                            <option value="8">Sepatu Wanita</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="text" name="stok" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Deskripsi Singkat</label>
                        <input type="text" name="deskripsi_singkat" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" ></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="varian" class="form-label">Keterangan Varian</label>
                        <input type="text" name="keterangan_varian" class="form-control mb-1" placeholder="keterangan varian">
                        <input type="text" name="varian_1" class="form-control" placeholder="varian 1">
                        <input type="text" name="varian_2" class="form-control" placeholder="varian 2">
                        <input type="text" name="varian_3" class="form-control" placeholder="varian 3">
                        <input type="text" name="varian_4" class="form-control" placeholder="varian 4">
                        <input type="text" name="varian_5" class="form-control" placeholder="varian 5">
                    </div>

                    <div class="mb-3">
                        <label for="varian" class="form-label">Keterangan Gambar</label>
                        <input type="text" name="keterangan_gambar" class="form-control mb-1" placeholder="keterangan gambar">
                        <input type="file" name="gambar_1" class="form-control" placeholder="gambar 1">
                        <input type="file" name="gambar_2" class="form-control" placeholder="gambar 2">
                        <input type="file" name="gambar_3" class="form-control" placeholder="gambar 3">
                        <input type="file" name="gambar_4" class="form-control" placeholder="gambar 4">
                        <input type="file" name="gambar_5" class="form-control" placeholder="gambar 5">
                    </div>
                    <br>
                    <button type="submit" onclick="return confirm('apakah data tersebut sudah benar?');" class="btn btn-primary w-100">Simpan</button>
                </form>
                
            </div>
            <div class="col"></div>
        </div>
    </div>
    <br>
    <br>
    <br>

    <div class="copyright text-center text-white font-weight-bold bg-warning p-1 ">
          <p>Developed by INLUK Copyright <i class="far fa-copyright "></i> 2021</p>
    </div>
@endsection