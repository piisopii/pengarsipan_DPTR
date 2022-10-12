<!--pakai variable HOST, USER, PASSWORD, dan DB buat konekin php dan mysql
    limit 1 di .$password. yaitu batas utk mengakhiri nilai kolom basis data kedua nilai kanan
    baris 19 fungsinya cek di database tersedia atau tidak-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Here</title>
    <link rel="stylesheet" a href="{{asset('css/style.css')}}">
    <link rel="stylesheet" a href="css3\font-awesome.min.css"/>
</head>
<body>
  <nav>
  <div class="nav">
        <div class="logo">
            <img src="">
        </div>
        <div class="judul">
            <marquee style="font-size: 60px;">Dinas Pertanahan dan Tata Ruang DIY</marquee>
            <p>Jl. Tentara Rakyat Mataram No.4, Bumijo, Kec. Jetis, Kota Yogyakarta, Saerah Istimewa Yogyakarta 55231</p>
            <p>No. Hp || Email???</p><br><br>
        </div>
    </div>
  </nav>
    <div class="container">
        <img src="{{asset('foto/login.png')}}"/>
        <form method="POST" action="#"> <!--pakai hashtag karena mau menampilkan pesan apapun di halaman ini dengan benar-->
            <div class="form-input">
            <input type="text" name="username" placeholder="Username"/>
            </div>

            <div class="form-input">
            <input type="password" name="password" placeholder="Password"/>
            </div>

            <input type="submit" name="submit" value="LOGIN" class="btn-login"/>
        </form>
    </div>
</body>
</html>