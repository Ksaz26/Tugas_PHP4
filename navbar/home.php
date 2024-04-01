<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="header">
    <h1>Selamat Datang di Restoran Boga Rasa</h1>
    <p>Nikmati hidangan lezat kami!</p>
</div>
<!-- food favorite -->
<div class="container">
    <h2 align="center">Menu Favorit</h2>
    <div class="menu-item">
        <h3>Nasi Goreng</h3>
        <p>Nasi goreng dengan telur, ayam, dan sayuran</p>
        <p class="price">Rp 25.000</p>
    </div>
    <div class="menu-item">
        <h3>Mie Goreng</h3>
        <p>Mie goreng dengan telur, udang, dan sayuran</p>
        <p class="price">Rp 30.000</p>
    </div>
    <div class="menu-item">
        <h3>Ayam Goreng</h3>
        <p>Ayam goreng dengan nasi dan sambal</p>
        <p class="price">Rp 35.000</p>
    </div>
<!-- Automatic slideshow -->
    <div class="slideshow-container">

        <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="https://asset.kompas.com/crops/vmDriSafVxhO05gc2dSOXby53Mc=/13x7:700x465/750x500/data/photo/2021/09/24/614dc6865eb24.jpg" style="width:100%">
        <div class="text">Nasi Goreng</div>
        </div>

        <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="https://img.okezone.com/content/2020/06/19/298/2233259/resep-masakan-bakmi-goreng-udang-cocok-kalau-malas-masak-di-akhir-pekan-YfNJhdULEm.jpg" style="width:100%">
        <div class="text">Mie Goreng</div>
        </div>

        <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="https://www.astronauts.id/blog/wp-content/uploads/2023/04/Resep-Ayam-Goreng-Serundeng-ala-Rumahan-yang-Nggak-Kalah-Enak-dari-Restoran.jpg" style="width:100%">
        <div class="text">Ayam goreng</div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    </div>
<!-- booking area -->
    <div class="booking-form">
        <h2>Booking Tempat</h2>
        <form action="#" method="post">
            <input type="text" name="name" placeholder="Nama" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="tel" name="phone" placeholder="Nomor Telepon" required><br>
            <input type="date" name="date" required><br>
            <input type="time" name="time" required><br>
            <textarea name="message" placeholder="Pesan (opsional)"></textarea><br>
            <input type="submit" value="Booking">
        </form>
    </div>
</div>
<a href="#" id="back-to-top"><i class="fas fa-chevron-up"></i></a>
<script src="js/keatas.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>