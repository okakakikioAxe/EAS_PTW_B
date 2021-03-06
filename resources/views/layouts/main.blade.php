<?php $user = session()->get( 'user' ); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="<script src="https://kit.fontawesome.com/eb4e0c9caa.js" crossorigin="anonymous"></script>">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @yield('style')
    @yield('script1')

    <title>@yield('title')</title>
  </head>
  <body>
    
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container-md" >
          
          <a class="navbar-brand font-weight-bold" href="{{ route('home') }}">
            <h3><i class="fas fa-feather-alt text-succes me-2"></i>Fesien</h3>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('bantuan') }}">Bantuan</a>
              </li>
            </ul>
            <form action="{{ route('cari') }}" class="d-flex" method="post">
              @csrf
              @method('POST')
              <input class="form-control me-2" type="search" placeholder="Search" name="nama_barang" style="width: 350px;" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div style="width: 30px;"></div>
                  <a href="{{ route('keranjang.index') }}" class="fas fa-cart-plus mx-2 mx-2" ></a>
                  <a class="nav-link" aria-current="page" href="{{ route('user.index') }}" style="font-size : 18px; color: black;"><i class="fas fa-user-circle mx-2"></i>{{ session()->get('username') }}</a>
          </div>
        </div>
      </nav>
    </div>
      @yield('konten')
      <br>
      <br>
    
      @yield('footer')

      <div class="copyright text-center text-white font-weight-bold bg-warning p-1 ">
          <p>Developed by INLUK Copyright <i class="far fa-copyright "></i> 2021</p>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
  @yield('script2')
</html>