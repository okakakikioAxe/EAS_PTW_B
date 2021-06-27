<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<script src='https://kit.fontawesome.com/eb4e0c9caa.js' crossorigin='anonymous'></script>">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loginStyle.css') }}">
    <title>Hello, world!</title>
  </head>
  <body style=" background-color : whitesmoke;">
    <div class="container-lg">
            <div class="position-absolute top-50 start-50 translate-middle bg-white p-4 rounded border border-1" style=" width:400px;">
                <h3 class="text-center" style="margin-bottom:4px;"><i class="fas fa-feather-alt text-succes me-2"></i>Fesien</h3>
                <br>
                <p style=" font-size:16px;margin-bottom:6px;" class="text-center"><strong>Silakan masuk ke dalam akun kamu</strong> </p>
                <br>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="mb-4">
                        <input type="email" style=" font-size:16px;" class="form-control" name="email" id="email" placeholder="E-mail / Username">
                    </div>
                    <div class="mb-4">
                        <input type="password" style=" font-size:16px;" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    
                    <button type="submit" style=" font-size:16px;font-weight: 500;" class="btn btn-warning w-100">Login </button>
                </form>
                <br>
                <h4><span>ATAU</span></h4>
                <p style=" font-size:15px;margin-bottom:21px;margin-top:38px;" class="text-center">Baru di Fesien? <a href="{{ route('form.register') }}" class="link-daftar"><strong>Daftar</strong></a></p>
            </div>
            
        
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>