@extends('layouts.admin')

@section('title','admin | transaksi')

@section('konten')

@if(session()->has('message'))
<div class="container">
<div class="alert {{ session()->get('message2') }} alert-dismissible fade show" role="alert">
    {{ session()->get('message') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
@endif

<br>
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
                <td>
                    <a class="mx-2" href="{{ route('admin.detail_admin', $user->id) }}"><i class="far fa-eye" style="color:blue;"></i></a>
                    <a class="mx-2" href="{{ route('admin.delete_admin', $user->id) }}" onclick="return confirm('apakah anda yakin ingin menghapus data ini?');"><i class="fas fa-trash" style="color:red;"></i></a>
                
                </td>
            </tr>
         @endforeach
    </tbody>
    </table>
</div>

@endsection