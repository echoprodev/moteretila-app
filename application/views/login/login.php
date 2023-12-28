<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/login/style.css') ?>">
</head>

<body>
    <div class="login-container">
        <div class="left">
            <h1>Selamat Datang</h1>
            <form action="<?= base_url('Login/process_login') ?>" method="post">
                <div class="group form-control">
                    <input type="text" name="username" parsley-trigger="change" required placeholder="Masukkan Username" id="username">
                    <i class="fa fa-user"></i>
                </div>
                <div class="group form-control">
                    <input type="password" name="password" required placeholder="Masukkan Password" id="password">
                    <i class="fa fa-key"></i>
                </div>

                <button type="submit" name="login">Login</button>
            </form>
        </div>
        <div class="right">
            <img src="<?= base_url('assets/login/login.png') ?>" alt="Login Image">
            <h2>MOTERETILA</h2>
            <h3>Monitoring TRTL (Temuan Rekomendasi Tindak Lanjut)</h3>
        </div>
    </div>

</body>

</html>
