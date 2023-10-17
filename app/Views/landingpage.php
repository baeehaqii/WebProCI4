<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 40px 100px;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            color: #fff;
            text-transform: none;
            cursor: pointer;
        }

        .toggle {
            position: relative;
            width: 60px;
            height: 60px;
            background: url(https://i.ibb.co/HrfVRcx/menu.png);
            background-repeat: no-repeat;
            background-size: 30px;
            background-position: center;
            cursor: pointer;
        }

        .toggle.active {
            background: url(https://i.ibb.co/rt3HybH/close.png);
            background-repeat: no-repeat;
            background-size: 25px;
            background-position: center;
            cursor: pointer;
        }

        .showcase {
            position: absolute;
            right: 0;
            width: 100%;
            min-height: 100vh;
            padding: 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #111;
            transition: 0.5s;
            z-index: 2;
        }

        .showcase.active {
            right: 300px;
        }

        .showcase video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.8;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #03a9f4;
            mix-blend-mode: overlay;
        }

        .text {
            position: relative;
            z-index: 10;
        }

        .text h2 {
            font-size: 5em;
            font-weight: 800;
            color: #fff;
            line-height: 1em;
            text-transform: none;
        }

        .text h3 {
            font-size: 4em;
            font-weight: 700;
            color: #fff;
            line-height: 1em;
            text-transform: none;
        }

        .text p {
            font-size: 1.1em;
            color: #fff;
            margin: 20px 0;
            font-weight: 400;
            max-width: 700px;
        }

        .text a {
            display: inline-block;
            font-size: 1em;
            background: #fff;
            padding: 10px 30px;
            text-transform: uppercase;
            text-decoration: none;
            font-weight: 500;
            margin-top: 10px;
            color: #111;
            letter-spacing: 2px;
            transition: 0.2s;
        }

        .text a:hover {
            letter-spacing: 6px;
        }

        .social {
            position: absolute;
            z-index: 10;
            bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .social li {
            list-style: none;
        }

        .social li a {
            display: inline-block;
            margin-right: 20px;
            filter: invert(1);
            transform: scale(0.5);
            transition: 0.5s;
        }

        .social li a:hover {
            transform: scale(0.5) translateY(-15px);
        }

        .menu {
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .menu ul {
            position: relative;
        }

        .menu ul li {
            list-style: none;
        }

        .menu ul li a {
            text-decoration: none;
            font-size: 24px;
            color: #111;
        }

        .menu ul li a:hover {
            color: #03a9f4;
        }

        .image {
            transform: scale(1.0);
            padding-right: 50px;
        }

    </style>
</head>

<body>
    <section class="showcase">
        <header>
            <h2 class="logo">Findy App</h2>
            <div class="toggle"></div>
        </header>
        <div class="overlay"></div>
        <div class="text">
            <h3>Welcome To </h3>
            <h3>Findy Digital Kreatif</h3>
            <p>Findy Digital Kreatif merupakan sebuah badan usaha Persero Perseorangan yang telah resmi terdaftar pada Kementrian Hukum dan Hak Asasi Manusia Republik Indonesia dengan nomor sertifikat <b>AHU-027806.AH.01.30.Tahun 2023.</b></p>
            <a href="/login">Log In</a>
            <a href="/web">Rental Buku</a>
            <a href="/matakuliah">Form Validasi</a>
        </div>
        <div class="image">
            <img src="/assets/gambar1.png" alt="Cek">
        </div>
        <ul class="social">
            <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
            <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
            <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
        </ul>
    </section>
    <div class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Destination</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</body>
<!-- <script>
     const menuToggle = document.querySelector('.toggle');
      const showcase = document.querySelector('.showcase');

      menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        showcase.classList.toggle('active');
      })
</script> -->
</html>