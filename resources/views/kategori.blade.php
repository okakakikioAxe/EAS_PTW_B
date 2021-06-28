@extends('layouts.main')

@section('title','kategori')


@section('notif','hidden')

@section('konten')
<br>
<br>
<br>
<br>
    <div class="container">
        <div class="row">
            <div class="col-2">
            <ul class="list-group">
                <li class="list-group-item"><strong>Kategori</strong></li>
                <li class="list-group-item"><a href="{{ route('kategori', 1 ) }}">Pakaian Pria</a> </li>
                <li class="list-group-item"><a href="{{ route('kategori', 2 ) }}">Pakaian Wanita</a> </li>
                <li class="list-group-item"><a href="{{ route('kategori', 4 ) }}">Jaket</a> </li> 
                <li class="list-group-item"><a href="{{ route('kategori', 3 ) }}">Hoodie</a> </li>
                <li class="list-group-item"><a href="{{ route('kategori', 5 ) }}">Pakaian Bayi</a> </li>
                <li class="list-group-item"><a href="{{ route('kategori', 7 ) }}">Sepatu Pria</a> </li>
                <li class="list-group-item"><a href="{{ route('kategori', 8 ) }}">Sepatu Wanita</a> </li>
                <li class="list-group-item"><a href="{{ route('kategori', 6 ) }}">Pakaian Olahraga</a> </li>
                
            </ul>
            </div>
            <div class="col-10 bg-white">
                @foreach ($barang as $barang)
                    <div class="card m-2 p-2 w-25 kartu_produk d-inline-block">
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
                            <a href="{{ route('barang.show' , $barang->id) }}" class="btn btn-primary">Detail</a>
                            <a href="#" class="btn btn-danger">@currency($barang->harga)</a>
                        </div>
                    </div>
                @endforeach
                  
            </div>
        </div>
    </div>
@endsection