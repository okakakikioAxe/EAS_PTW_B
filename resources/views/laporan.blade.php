@extends('layouts.admin')

@section('title','admin | laporan')

@section('konten')
<div class="container">
    <h3 class="text-center">DATA LAPORAN</h3>
</div>
<br>

<div class="container">
    <table class="table">
    <thead>
        <tr class="text-center" >
        <th scope="col" >NO</th>
        <th scope="col" >Tanggal</th>
        <th scope="col" >Jumlah</th>
        </tr>
    </thead>
    <tbody>
        
            <tr class="text-center">
                <td>1</td>
                <td>1</td>
                <td>100</td>
                
            </tr>
        
    </tbody>
    </table>
</div>

@endsection