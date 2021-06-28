@extends('layouts.main')

@section('title','profil')


@section('notif','hidden')

@section('konten')
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-2 col-md">
                <a href="{{ route('user.index') }}" class="d-block" style="padding-bottom:5px;font-size : 18px; color: black;"><i class="far fa-user mx-2"></i><strong>Akun Saya</strong> </a>
                <hr class="sidebar-divider btn-dark ">
                <a href="{{ route('logout') }}" class="d-block" style="padding-bottom:5px;font-size : 18px; color: black;"><i class="fas fa-sign-out-alt mx-2"></i><strong>Logout</strong> </a>
        </div>
        <div class="col-9" style="background-color:white;">
            @foreach ($user as $user)

            <!-- container profil -->
            <div class="container profil" id="c-profil" style="display:block;">
                <div class="row my-2">
                    <h4>Profil Saya</h4>
                    <p>Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</p>
                </div>
                <hr>

                <div class="row">
                    <div class="col-2">
                        <h4 class="my-4" style="font-size:17px;color:gray;text-align:right;">Username</h4>
                        <h4 class="my-4" style="font-size:17px;color:gray;text-align:right;">Nama</h4>
                        <h4 class="my-4" style="font-size:17px;color:gray;text-align:right;">Email</h4>
                        <h4 class="my-4" style="font-size:17px;color:gray;text-align:right;">Nomor Telepon</h4>
                        <h4 class="my-4" style="font-size:17px;color:gray;text-align:right;">Kelamin</h4>
                        <h4 class="my-4" style="font-size:17px;color:gray;text-align:right;">Tanggal Lahir</h4>
                        <h4 class="my-4" style="font-size:17px;color:gray;text-align:right;">Alamat</h4>
                    </div>
                    <div class="col-7" style="border-right:1px solid black">
                        <h4 class="my-4" style="font-size:17px;color:black;text-align:left;">{{ $user->username }}</h4>
                        <h4 class="my-4" style="font-size:17px;color:black;text-align:left;">{{ $user->nama_user }}</h4>
                        <h4 class="my-4" style="font-size:17px;color:black;text-align:left;">{{ $user->email }}</h4>
                        @if ($user->no_telepon == '' || $user->no_telepon == null)
                            <h4 class="my-4" style="font-size:17px;color:black;text-align:left;"><i>(belum diisi)</i></h4>
                        @else
                            <h4 class="my-4" style="font-size:17px;color:black;text-align:left;">{{ $user->no_telepon }}</h4>
                        @endif

                        @if ($user->kelamin == '' || $user->kelamin == null)
                            <h4 class="my-4" style="font-size:17px;color:black;text-align:left;"><i>(belum diisi)</i></h4>
                        @else
                            <h4 class="my-4" style="font-size:17px;color:black;text-align:left;">{{ $user->kelamin }}</h4>
                        @endif

                        @if ($user->tanggal_lahir == '' || $user->tanggal_lahir == null)
                            <h4 class="my-4" style="font-size:17px;color:black;text-align:left;"><i>(belum diisi)</i></h4>
                        @else
                            <h4 class="my-4" style="font-size:17px;color:black;text-align:left;">{{ $user->tanggal_lahir }}</h4>
                        @endif

                        @if ($user->alamat == '' || $user->alamat == null)
                            <h4 class="my-4" style="font-size:17px;color:black;text-align:left;"><i>(belum diisi)</i></h4>
                        @else
                            <h4 class="my-4" style="font-size:17px;color:black;text-align:left;">{{ $user->alamat }}</h4>
                        @endif
                        
                        <br>
                        <a  href="{{ route('user.edit',session()->get('id')) }}" role="button" class="btn btn-warning">Edit Profil</a>
                    </div>
                    <div class="col text-center">
                        <img src="{{ asset('gambar/default-user.png') }}" class="img-thumbnail rounded-circle" alt="...">
                        <br>
                        <br>
                        <button type="button" class="btn btn-outline-secondary">Pilih Gambar</button>
                    </div>
                </div>

                <div class="row my-2"></div>
            </div>
            <!-- akhir container profil -->
            @endforeach


        </div>

    </div>
</div>
<br>
<br>
@endsection
