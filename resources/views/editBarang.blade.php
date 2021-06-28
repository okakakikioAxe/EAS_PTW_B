@extends('layouts.admin')

@section('title','edit produk')

@section('konten')
<br>
    <div class="container">
    <a class="btn btn-success text-right" href="{{ route('admin.produk') }}" role="button">Kembali</a>
        <div class="row">
            <div class="col"></div>
            <div class="col-5">
                <h3 class="text-center">Edit Produk</h3>
                @foreach ($barang as $barang)
                <form action="{{ route('admin.simpan_edit_barang',$barang->id) }}" method='post'>
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama" class="form-label">ID Barang</label>
                        <input type="text" name="id" class="form-control" readonly value="{{ $barang->id}}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $barang->nama_barang}}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Harga</label>
                        <input type="text" name="harga" class="form-control" value="{{ $barang->harga }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Stok</label>
                        <input type="text" name="stok" class="form-control" value="{{ $barang->stok }}">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control"  value="{{ $barang->merk }}">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Deskripsi singkat</label>
                        <input type="text" name="deskripsi_singkat" class="form-control"  value="{{ $barang->deskripsi_singkat }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" >{{ $barang->deskripsi }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Keterangan gambar</label>
                        <input type="text" name="keterangan_gambar" class="form-control"  value="{{ $barang->keterangan_gambar }}">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Keterangan varian</label>
                        <input type="text" name="keterangan_varian" class="form-control"  value="{{ $barang->keterangan_varian }}">
                    </div>
                    
                    <br>
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </form>
                @endforeach
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