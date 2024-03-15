<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Masuk</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <header>Masuk</header>
            <form action="{{ route('auth.authentication') }}" method="post">
                @csrf
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="field input">
                    <label for="password">Kata Sandi</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="field">

                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Belum punya akun ? <a href="{{ route('auth.register') }}">Daftar</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
