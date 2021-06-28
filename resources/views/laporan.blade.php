@extends('layouts.admin')

@section('title','admin | laporan')

@section('konten')
<div class="container">
    <h3 class="text-center">DATA LAPORAN</h3>
</div>
<br>
<div class="container">
    <form action="{{ route('admin.cari_laporan') }}" method="post">
        @csrf
        @method('POST')
        <input type="month" name="bulan" class="d-inline-block">
        <button type="submit" class="btn btn-primary d-inline-block mx-3">Refresh</button>
    </form>
</div>
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
        <?php $i = 1; ?>
        @foreach ($data as $data)
            <tr class="text-center">
                <td><?php echo $i; ?></td>
                <td>{{ $data->tanggal }}</td>
                <td>@currency($data->total)</td>
            </tr>
            <?php $i++; ?>
        @endforeach
    </tbody>
    </table>


    <br>
    <br>
    <br>
    <br>
    <table class="table">
    <thead>
        <tr class="text-center" >
        <th scope="col" >NO</th>
        <th scope="col" >Bulan</th>
        <th scope="col" >Total Pendapatan</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        @foreach ($data2 as $data2)
            <tr class="text-center">
                <td><?php echo $i; ?></td>
                <td>{{ $data2->tanggal }}</td>
                <td>@currency($data->total)</td>
            </tr>
        <?php $i++; ?>
        @endforeach
    </tbody>
    </table>
</div>

@endsection