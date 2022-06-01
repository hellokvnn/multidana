<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multidana | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- My Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    {{-- CSS --}}
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    {{-- Navbar --}}
    @include('partials.navbar')
    {{-- End Navbar --}}

    {{-- Carousel --}}
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/test.jpg" width="500px" height="400px" class="d-block w-100" alt="carousel">
              </div>
              <div class="carousel-item">
                <img src="images/test2.jpg" width="500px" height="400px" class="d-block w-100" alt="carousel">
              </div>
              <div class="carousel-item">
                <img src="images/test3.jpg" width="500px" height="400px" class="d-block w-100" alt="carousel">
              </div>
            </div>
          </div>
    </div>
    {{-- End Carousel --}}

    <div class="container heading">
        <h2><Strong>Pulsa Retail</Strong></h2>
        <h5>Web Report Transaksi</h5>
    </div>

    {{-- Card --}}
        <div class="container">

          {{-- Info Card --}}
          <div class="row justify-content-center">
            <div class="col-sm-3">
              <div class="card" style="width: 20rem; height: 17rem">
                <img src="images/hp.png" class="card-img-top rounded mx-auto d-block" alt="hp" >
                <div class="card-body">
                  <h4>Pulsa Telepon</h4>
                  <p class="card-text">Produk Pulsa Retail <br>Terbaik</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 20rem; height: 17rem">
                <img src="images/tv.png" class="card-img-top rounded mx-auto d-block" alt="tv" >
                <div class="card-body">
                  <h4>PLN TV Kabel Data</h4>
                  <p class="card-text">Pembayaran listrik, tv kabel dan <br> data seluler</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 20rem; height: 17rem">
                <img src="images/game.png" class="card-img-top rounded mx-auto d-block" alt="game" >
                <div class="card-body">
                  <h4>Voucher Game</h4>
                  <p class="card-text">Produk Game Online Terbaik</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-sm-3">
              <div class="card" style="width: 20rem; height: 17rem">
                <img src="images/money.png" class="card-img-top rounded mx-auto d-block" alt="money" >
                <div class="card-body">
                  <h4>Produk Multibiller</h4>
                  <p class="card-text">Produk Multibiller dan <br> Pascabyar</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 20rem; height: 17rem">
                <img src="images/topup-money.png" class="card-img-top rounded mx-auto d-block" alt="topup-money" >
                <div class="card-body">
                  <h4>Top-Up E-Money</h4>
                  <p class="card-text">Gopay, Ovo, Dana, Shopeepay</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 20rem; height: 17rem">
                <img src="images/kereta.png" class="card-img-top rounded mx-auto d-block" alt="kereta" >
                <div class="card-body">
                  <h4>Tiket Kereta</h4>
                  <p class="card-text">Produk Tiket Kereta Api <br> Terbaik</p>
                </div>
              </div>
            </div>
          </div>
          {{-- End Info Card --}}

        </div>
    {{-- End Card --}}

    <div class="container logo">
      <img src="images/logo2.png" alt="logo2" class="rounded mx-auto d-block">
    </div>

    <div class="container logo-heading">
      <h2><strong>Beragam Layanan Multidana Payment</strong></h2>
    </div>

    <div class="container mt-4">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
