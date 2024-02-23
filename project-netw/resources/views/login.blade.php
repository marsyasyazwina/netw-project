
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('asset/login.css') }}" rel="stylesheet">

    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="{{ route('login') }}" method="POST">
                <hr>
                <p>SLA NETWORK</p>
                <label for="">Name</label>
                <input type="name" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name">
                @error('name') @enderror
                <label for="">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Alamat Email">
                @error('email') @enderror
                <label for="">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password">
                @error('password') @enderror
                <a href="home" class="button" type="submit" target="_blank">Login</a>
                <p>
                    <a href="registerr">Belum punya akun? Register</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="/asset/gambar4.jpg" alt="">
        </div>
    </div>
</body>
</html>