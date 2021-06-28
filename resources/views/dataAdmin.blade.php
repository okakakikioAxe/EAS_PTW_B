@extends('layouts.admin')

@section('title','admin | transaksi')

@section('konten')
<div class="container">
    <h3 class="text-center">DATA ADMIN</h3>
    <br>
    <a class="btn btn-primary text-right" href="{{ route('admin.form_tambah_admin') }}" role="button">Tambah +</a>
</div>
<br>

<div class="container">
    <table class="table">
    <thead>
        <tr class="text-center" >
        <th scope="col" >NO</th>
        <th scope="col" >ID User</th>
        <th scope="col" >Nama</th>
        <th scope="col" >Handle</th>
        </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>
        @foreach ($user as $user)
            <tr class="text-center">
                <td><?php echo $i ?></td>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama_user }}</td>
                <td><a class="mx-2" href="#"><i class="far fa-eye" style="color:blue;"></i></a></td>
            </tr>
         @endforeach
    </tbody>
    </table>
</div>

@endsection