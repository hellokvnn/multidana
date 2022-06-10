<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multidana | {{ $title }}</title>
    {{-- Bootstap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- End Bootsrap --}}

    {{-- My Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    {{-- End My Fonts --}}

    {{-- CSS --}}
    <link rel="stylesheet" href="css/style.css">
    {{-- End CSS --}}
</head>
<body>
    {{-- Navbar --}}
    @include('partials.navbar')
    {{-- End Navbar --}}

    {{-- Carousel --}}
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
              <img src="images/test.jpg" width="500px" height="400px" class="d-block w-100" alt="test">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="images/test2.jpg" width="500px" height="400px" class="d-block w-100" alt="test2">
            </div>
            <div class="carousel-item">
              <img src="images/test3.jpg" width="500px" height="400px" class="d-block w-100" alt="test3">
            </div>
          </div>
        </div>
    </div>
    {{-- End Carousel --}}

    {{-- Container Heading --}}
    <div class="container heading">
        <h2><Strong>Pulsa Retail</Strong></h2>
        <p>Web Report Transaksi</p>
    </div>
    {{-- End Container Heading --}}

    {{-- Info Card --}}
    <div class="container">
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
    </div>
    {{-- End Card --}}

    {{-- Container Logo --}}
    <div class="container-lg-fluid logo">
      <img src="images/logo2.png" alt="logo2" class="rounded mx-auto d-block">
      <img src="images/lb.png" alt="lb" class="rounded float-start"> 
      <img src="images/rb.png" alt="rb" class="rounded float-end"> 
    </div>

    <div class="container logo-heading">
      <h2><strong>Beragam Layanan Multidana Payment</strong></h2>
    </div>

    <div class="container search-box border border-danger navbar-expand">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari Layanan Multidana">
        <button><img src="images/search.png" alt="search"></button>
      </form>
    </div>
    {{-- End Container Logo --}}

    {{-- Info Card 2 --}}
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-sm-3 rounded float-start">
          <div class="card-2" style="width: 20rem; height: 25rem">
            <img src="images/server.png" class="card-img-top rounded mx-auto d-block" alt="server">
            <div class="card-body">
              <h4>About</h4>
              <p class="card-text">Multidana merupakan bisnis server pulsa <br>
                yang berdiri sejak tahun 2017. menjadi <br>
                bagian dari Multidana Machine membuat <br>
                server ini menjadi server yang bisa <br>
                diandalkan dalam menyajikan produk <br>
                pulsa H2H.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 rounded mx-auto d-block">
          <div class="card-2" style="width: 20rem; height: 25rem">
            <img src="images/layanan.png" class="card-img-top rounded mx-auto d-block" alt="layanan">
            <div class="card-body">
              <h4>Service</h4>
              <p class="card-text">Pelayanan terbaik akan selalu kami <br>
                berikan demi menjaga kenyaman pembeli <br>
                dan mitra yang sudah mempercayai kami <br>
                sedari lama. Layanan Costumer Service <br>
                tersedia selama 24 jam hanya untuk<br>
                anda.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 rounded float-end">
          <div class="card-2" style="width: 20rem; height: 25rem">
            <img src="images/hp2.png" class="card-img-top rounded mx-auto d-block" alt="hp2">
            <div class="card-body">
              <h4>Produk</h4>
              <p class="card-text">Produk yang kami sediakan beraneka <br>
                ragam dimulai dari pulsa telepon, data <br>
                seluler, pembayaran PLN dan TV Kabel, <br>
                juga tidak lupa menyediakan voucher <br>
                game terbaik untuk pembeli dan mitra <br>
                kami.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- End Info Card 2 --}}

    {{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Alasan Memilih Multidana</h1>
        <div class="container">
          <img src="images/icon.png" class="rounded mx-lg-auto d-block" alt="icon">
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/PZMUjzaLC6Q?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="reason">
          <h5>Jaringan Nasional <br> Terluas</h5>
          <p>Multidana Payment hadir di <span> Kota <br>
              Makasar </span> Provinsi <span> Sulawesi <br>
              Selatan </span> dengan layanan tersebar <br>
              di seluruh kota besar di <br>
              Indonesia.</p>
            <button type="button" class="btn btn-light">Selengkapnya</button>
        </div>
        </div>
      </div>
    </div>
    {{-- End Jumbotron --}}
    
    {{-- Container Heading 2 --}}
    <div class="container heading-2">
    <h2><Strong>Pulsa H2H</Strong></h2>
    <p>Web Report Transaksi</p>
    </div>
    {{-- End Container Heading 2 --}}

    {{-- Info Card 3 --}}
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-sm-3">
      <div class="card" style="width: 20rem; height: 17rem">
        <img src="images/hp.png" class="card-img-top rounded mx-auto " alt="hp" >
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
    </div>
    {{-- End Info Card 3 --}}

    {{-- Jumbotron 2 --}}
    <div class="jumbotron-2 jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"></h1>
        <div id="carouselExampleIndicators-2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators indicators-2">
              <button type="button" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner inner-2">
              <div class="carousel-item active" data-bs-interval="2000">
                <img src="images/test.jpg" class="d-block w-100" alt="test">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="images/test2.jpg" class="d-block w-100" alt="test2">
              </div>
              <div class="carousel-item">
                <img src="images/test3.jpg" class="d-block w-100" alt="test3">
              </div>
            </div>
          </div>
        <div class="reason-2">
          <h5>Aplikasi Multidana</h5>
          <p>Multidana merupakan bisnis server pulsa yang berdiri <br>
              sejak tahun 2007. Menjadi bagian dari FLASH MACHINE <br>
              membuat Multidana menjadi salah satu server pulsa <br>
              handal dalam menyajikan produk H2H, pelayanan dan <br>
              perangkat yang dapat diandalkan.
          </p>
            <button type="button" class="btn btn-success btn-2">Download</button>
        </div>
        <div class="container-2">
          <img src="images/logo3.png" class="rounded float-end" alt="logo3">
        </div>
      </div>
    </div>
    </div>
    {{-- End Jumbotron 2 --}}

    {{-- Container Heading 2 --}}
    <div class="container heading-3">
    <h2><Strong>Format Transaksi </Strong></h2>
    <p>Kode tiap transaksi yang terdapat di aplikasi Multidana</p>
    </div>
    {{-- End Container Heading 2 --}}

    {{-- Info Card 3 --}}
    <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-2">
        <div class="card-3" style="width: 217px; height: 160px">
          <img src="images/transaksi-pulsa.png" class="card-img-top rounded mx-auto d-block" alt="transaksi pulsa" >
          <div class="card-body">
            <h4>Transaksi Pulsa</h4>
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card-3" style="width: 217px; height: 160px">
          <img src="images/cek-saldo.png" class="card-img-top rounded mx-auto d-block" alt="cek saldo" >
          <div class="card-body">
            <h4>Cek Saldo</h4>
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card-3" style="width: 217px; height: 160px">
          <img src="images/deposit.png" class="card-img-top rounded mx-auto d-block" alt="deposit" >
          <div class="card-body">
            <h4>Deposit Via Tiket</h4>
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card-3" style="width: 217px; height: 160px">
          <img src="images/ganti-pin.png" class="card-img-top rounded mx-auto d-block" alt="ganti pin" >
          <div class="card-body">
            <h4>Ganti Pin</h4>
          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="row justify-content-center">
      <div class="col-2">
        <div class="card-3" style="width: 217px; height: 160px">
          <img src="images/rekap-transaksi.png" class="card-img-top rounded mx-auto d-block" alt="rekap transaksi" >
          <div class="card-body">
            <h4>Rekap Transaksi</h4>
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card-3" style="width: 217px; height: 160px">
          <img src="images/komplain.png" class="card-img-top rounded mx-auto d-block" alt="komplain" >
          <div class="card-body">
            <h4 class="h4-fix-2">Komplain</h4>
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card-3" style="width: 217px; height: 160px">
          <img src="images/tagihan.png" class="card-img-top rounded mx-auto d-block" alt="tagihan" >
          <div class="card-body">
            <h4 class="h4-fix">Cek Tagihan <br> Pembayaran</h4>
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card-3" style="width: 217px; height: 160px">
          <img src="images/pembayaran.png" class="card-img-top rounded mx-auto d-block" alt="pembayaran" >
          <div class="card-body">
            <h4 class="h4-fix">Pembayaran <br> Pascabayar</h4>
          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="row justify-content-center">
      <div class="col-2">
        <div class="card-3" style="width: 217px; height: 160px">
          <img src="images/cek-harga.png" class="card-img-top rounded mx-auto d-block" alt="cek harga" >
          <div class="card-body">
            <h4>Cek Harga Produk</h4>
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card-3" style="width: 217px; height: 160px">
          <img src="images/" class="card-img-top rounded mx-auto d-block" alt="transfer deposit" >
          <div class="card-body">
            <h4>Transfer Deposit</h4>
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card-3" style="width: 217px; height: 160px">
          <img src="images/markup-global.png" class="card-img-top rounded mx-auto d-block" alt="markup global" >
          <div class="card-body">
            <h4>Markup Global</h4>
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card-3" style="width: 217px; height: 160px">
          <img src="images/.png" class="card-img-top rounded mx-auto d-block" alt="markup spesifik" >
          <div class="card-body">
            <h4>Markup Spesifik</h4>
          </div>
        </div>
      </div>
    </div>
    </div>
    {{-- End Info Card 3 --}}

  <div class="container mt-4">
      @yield('container')
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
