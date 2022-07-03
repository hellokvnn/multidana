<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multidana | {{$title}}</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    {{-- Jumbotron 3 --}}
    <div class="jumbotron-3 jumbotron-fluid">
    <div class="container">
        <h1 class="display-4"></h1>
        <img src="images/logofooter.png" alt="logofooter">
        <p class="text-footer">2022 PT Multidana Payment</p>
        <br>
        <h5>Kota Makasar</h5>
        <p>Jl. Makasar no. 78 <br>
            Sulawesi Selatan
        </p>
        <p>
        Telp : (021) 9990920 <br>
        Fax : (021) 9990920 <br>
        Email : csmultidana@office.com
        </p>
        <p>
        Solution Centre : 1500-3990-1111-1111 <br>
        WhatsApp : 0824 2321 3123
        </p>
    </div>
    <div class="container-footer">
        <img src="images/whatsapp.png" alt="whatsapp">
        <p>Tentang kami</p>
        <p>Layanan Multidana</p>
        <p>Jaringan</p>
        <p>Kontak</p>
        <img class="img-footer-1" src="images/instagram.png" alt="instagram">
        <img class="img-footer-2" src="images/twitter.png" alt="twitter">
    </div>
    </div>
    {{-- End Jumbotron 3 --}}
  
  
    <div class="container mt-4">
        @yield('container')
    </div>

</body>
</html>