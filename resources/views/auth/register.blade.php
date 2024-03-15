<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Daftar Akun</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <header>Daftar Akun</header>
            <form action="{{ route('auth.store') }}" method="post">
                @csrf
                <div class="field input">
                    <label for="name">Username</label>
                    <input type="text" name="name" id="name" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="no_telp">Nomor Telephone</label>
                    <input type="text" name="no_telp" id="no_telp" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Kata Sandi</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">

                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Apakah punya akun ? <a href="{{ route('auth.login') }}" >Masuk</a>
                </div>
            </form>
</body>
