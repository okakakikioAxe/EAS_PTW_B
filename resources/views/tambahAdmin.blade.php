@extends('layouts.admin')

@section('title','tambah admin')

@section('konten')
<br>
    <div class="container">
    <a class="btn btn-success text-right" href="{{ route('admin.data') }}" role="button">Kembali</a>
        <div class="row">
            <div class="col"></div>
            <div class="col-5">
                <h3 class="text-center">TAMBAH ADMIN</h3>
                
                <form action="{{ route('admin.tambah_admin') }}" method='post'>
                    @csrf
                    @method('POST')
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Nomor Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelamin" class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kelamin" id="l" value="laki-laki">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Laki - Laki
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="kelamin" id="p" value="perempuan" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Perempuan
                                </label>
                            </div>
                    </div>
                    <div class="mb-3">
                        <label for="ttl" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label for="pw1" class="form-label">Password</label>
                        <input type="password" name="pw1" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="pw2" class="form-label">Konfirmasi Password</label>
                        <input type="password" name="pw2" class="form-control">
                    </div>
                    
                    <br>
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
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