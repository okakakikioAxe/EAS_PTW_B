@extends('layouts.main')

@section('title','edit profil')


@section('notif','hidden')

@section('konten')
<br>
<br>
<br>
<br>
    <div class="container">
    <a class="btn btn-success text-right" href="{{ route('user.index') }}" role="button">Kembali</a>
        <div class="row">
            <div class="col"></div>
            <div class="col-5">
                
                <h3 class="text-center">Edit Profil</h3>
                @foreach ($user as $user)
                <form action="{{ route('user.update',session()->get('id')) }}" method='post'>
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $user->nama_user }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Nomor Telepon</label>
                        <input type="text" name="no_telepon" class="form-control"  value="{{ $user->no_telepon }}">
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
                        <input type="date" name="tanggal_lahir" class="form-control" value="{{ $user->tanggal_lahir }}">
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ $user->alamat }}">
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
                @endforeach
            </div>
            <div class="col"></div>
        </div>
    </div>
    <br>
@endsection