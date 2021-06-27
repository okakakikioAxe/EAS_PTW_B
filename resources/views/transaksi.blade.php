@extends('layouts.admin')

@section('title','admin | transaksi')

@section('konten')
<div class="container">
    <h3 class="text-center">DATA TRANSAKSI</h3>
</div>
<br>

<div class="container">
    <table class="table">
    <thead>
        <tr class="text-center" >
        <th scope="col" >ID Transaksi</th>
        <th scope="col" >Total transaksi</th>
        <th scope="col" >Handle</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transaksi as $transaksi)
            <tr class="text-center">
                <td>{{ $transaksi->id }}</td>
                <td>@currency($transaksi->total)</td>
                <td><a class="mx-2" href="#"><i class="far fa-eye" style="color:blue;"></i></a></td>
            </tr>
         @endforeach
    </tbody>
    </table>
</div>

@endsection