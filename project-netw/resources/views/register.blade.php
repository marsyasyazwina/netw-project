
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('asset/register.css') }}" rel="stylesheet">

    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="registerr">
            <form action="{{ route('register') }}" method="POST">
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
                <label for="">Password confirm</label>
                <input type="password confirm" name="password confirm" class="form-control @error('password confirm') is-invalid @enderror" placeholder="Masukkan Password kembali">
                @error('password confirm') @enderror
                
                <a href="home" class="button" type="submit" target="_blank">Register</a>
                <p>
                    <a href="#">Forgot Password?</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="/asset/gambar4.jpg" alt="">
        </div>
    </div>
</body>
</html>