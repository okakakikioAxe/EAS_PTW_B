@extends('layouts.admin')

@section('title','detail produk')

@section('konten')
    <div class="container">
    <h4 class="text-center">DETAIL ADMIN</h4>
    <br>
        @foreach ($user as $u)
            
        
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">ID USER</p>
            </div>
            <div class="col">
                <p class="text-center">{{ $u->id}}</p>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">NAMA</p>
            </div>
            <div class="col">
                <p class="text-center">{{ $u->nama_user }}</p>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">USERNAME</p>
            </div>
            <div class="col">
                <p class="text-center">{{ $u->username }}</p>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">ALAMAT</p>
            </div>
            <div class="col">
                <p class="text-center">{{ $u->alamat }}</p>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">KELAMIN</p>
            </div>
            <div class="col">
                <p class="text-center">{{  $u->kelamin }}</p>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">TANGGAL LAHIR</p>
            </div>
            <div class="col">
                <p class="text-center">{{  $u->tanggal_lahir}}</p>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">EMAIL</p>
            </div>
            <div class="col">
                <p class="text-center">{{ $u->email }}</p>
            </div>
            <div class="col"></div>
        </div>

        @endforeach
        <br>
        <br>
        <div class="row">
            <div class="col text-center">
                <a href="{{ route('admin.data') }}" role="button" class="btn btn-primary w-25">OK</a>
            </div>
        </div>
        
    </div>
    
@endsection