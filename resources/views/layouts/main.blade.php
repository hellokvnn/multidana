<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multidana</title>
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
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            @foreach ($sliders as $slider)
            <div class="carousel-item active" data-bs-interval="2000">
              <img src="{{asset('storage/' . $slider->foto)}}" width="500px" height="400px" class="d-block w-100">
            </div>
            @endforeach
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
          <a href="/pulsa-telepon" class="text-decoration-none">
          <div class="card" style="width: 20rem; height: 17rem">
            <img src="images/pulsa-h2h/pulsa-telepon.png" class="card-img-top rounded mx-auto d-block" alt="pulsa telepon" >
            <div class="card-body">
              <h4>Pulsa Telepon</h4>
              <p class="card-text">Produk Pulsa Retail <br>Terbaik</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="/pln-tv-kabel" class="text-decoration-none">
          <div class="card" style="width: 20rem; height: 17rem">
            <img src="images/pulsa-h2h/pln.png" class="card-img-top rounded mx-auto d-block" alt="pln" >
            <div class="card-body">
              <h4>PLN TV Kabel Data</h4>
              <p class="card-text">Pembayaran listrik, tv kabel dan <br> data seluler</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="/voucher-games" class="text-decoration-none">
          <div class="card" style="width: 20rem; height: 17rem">
            <img src="images/pulsa-h2h/voucher-game.png" class="card-img-top rounded mx-auto d-block" alt="voucher-game" >
            <div class="card-body">
              <h4>Voucher Game</h4>
              <p class="card-text">Produk Game Online Terbaik</p>
            </div>
          </div>
          </a>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-sm-3">
          <a href="/voucher-games" class="text-decoration-none">
          <div class="card" style="width: 20rem; height: 17rem">
            <img src="images/pulsa-h2h/multibiller.png" class="card-img-top rounded mx-auto d-block" alt="multibiller" >
            <div class="card-body">
              <h4>Produk Multibiller</h4>
              <p class="card-text">Produk Multibiller dan <br> Pascabyar</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-sm-3">
          <a href="/voucher-games" class="text-decoration-none">
          <div class="card" style="width: 20rem; height: 17rem">
            <img src="images/pulsa-h2h/topup.png" class="card-img-top rounded mx-auto d-block" alt="topup" >
            <div class="card-body">
              <h4>Top-Up E-Money</h4>
              <p class="card-text">Gopay, Ovo, Dana, Shopeepay</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-sm-3">
          <div class="card" style="width: 20rem; height: 17rem">
            <img src="images/pulsa-h2h/tiket-kereta.png" class="card-img-top rounded mx-auto d-block" alt="tiket kereta" >
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
    <div class="container logo">
      <img src="images/logo2.png" alt="logo2" class="rounded mx-auto d-block">
      <img style="margin-left: -112px;" src="images/lb.png" alt="lb" class="rounded float-start"> 
      <img style="margin-right: -111px" src="images/rb.png" alt="rb" class="rounded float-end"> 
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
    <div class="container">
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
    <div class="jumbotron">
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
              <div class="collapse" id="collapseExample"> 
          </div>

          <button style="background: #fff; color: #A00043; border: transparent" class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
            Selengkapnya
          </button>

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
        <img src="images/pulsa-h2h/pulsa-telepon.png" class="card-img-top rounded mx-auto " alt="pulsa telepon" >
        <div class="card-body">
          <h4>Pulsa Telepon</h4>
          <p class="card-text">Produk Pulsa Retail <br>Terbaik</p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card" style="width: 20rem; height: 17rem">
        <img src="images/pulsa-h2h/pln.png" class="card-img-top rounded mx-auto d-block" alt="pln" >
        <div class="card-body">
          <h4>PLN TV Kabel Data</h4>
          <p class="card-text">Pembayaran listrik, tv kabel dan <br> data seluler</p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card" style="width: 20rem; height: 17rem">
        <img src="images/pulsa-h2h/voucher-game.png" class="card-img-top rounded mx-auto d-block" alt="voucher game" >
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
        <img src="images/pulsa-h2h/multibiller.png" class="card-img-top rounded mx-auto d-block" alt="multibiller" >
        <div class="card-body">
          <h4>Produk Multibiller</h4>
          <p class="card-text">Produk Multibiller dan <br> Pascabyar</p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card" style="width: 20rem; height: 17rem">
        <img src="images/pulsa-h2h/topup.png" class="card-img-top rounded mx-auto d-block" alt="topup" >
        <div class="card-body">
          <h4>Top-Up E-Money</h4>
          <p class="card-text">Gopay, Ovo, Dana, Shopeepay</p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card" style="width: 20rem; height: 17rem">
        <img src="images/pulsa-h2h/tiket-kereta.png" class="card-img-top rounded mx-auto d-block" alt="tiket kereta" >
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
    <div class="jumbotron-2">
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
          <button style="background: #20A15C; border: transparent" class="btn">Download</button>
        </div>
        <div class="container-2">
          <img src="images/logo3.png" class="rounded float-end" alt="logo3">
        </div>
    </div>
    </div>

    {{-- End Jumbotron 2 --}}

    {{-- Container Heading 3 --}}
    <div class="container heading-3">
    <h2><Strong>Format Transaksi </Strong></h2>
    <p>Kode tiap transaksi yang terdapat di aplikasi Multidana</p>
    </div>
    {{-- End Container Heading 3 --}}

    {{-- Info Card 3 --}}
    <div class="container">
      
    <div class="row justify-content-center">

      <div style="margin-right: 30px;" class="col-2">
        <div class="accordion" id="accordionExampleSatu">
          <div class="accordion-item item-1">
              <h2 class="accordion-header header-1" id="headingSatu1">
              <button class="accordion-button button-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSatu1" aria-expanded="true" aria-controls="collapseSatu1">
                  <div class="card-3" style="width: 217px; height: 160px">
                    <img src="images/format-transaksi/transaksi-pulsa.png" class="card-img-top rounded mx-auto d-block" alt="transaksi pulsa" >
                    <div class="card-body">
                      <h4>Transaksi Pulsa</h4>
                    </div>
                  </div>
              </button>
              </h2>
              <div id="collapseSatu1" class="accordion-collapse collapse" aria-labelledby="headingSatu1" data-bs-parent="#accordionExampleSatu">
              <div class="accordion-body bodyy-1 border border-2">
                @foreach ($transaksipulsas as $transaksipulsa)
                <form>
                  <div class="mb-3">
                    <label for="disableTextInput1" class="form-label">format:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput1" placeholder="{{$transaksipulsa->format}}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="disableTextInput2" class="form-label">contoh:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput2" placeholder="{{$transaksipulsa->contoh}}" disabled>
                  </div>
                </form>
                <div class="container heading-8">
                  <h4>Cek Saldo</h4>
                  <p>{!!$transaksipulsa->desc!!}</p>
                </div>
                @endforeach 
              </div>
              </div>
          </div>
        </div>
      </div>

      <div style="margin-right: 30px;" class="col-2">
        <div class="accordion" id="accordionExampleDua">
          <div class="accordion-item item-1">
              <h2 class="accordion-header header-1" id="headingDua2">
              <button class="accordion-button button-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDua2" aria-expanded="true" aria-controls="collapseDua2">
                <div class="card-3" style="width: 217px; height: 160px">
                  <img src="images/format-transaksi/cek-saldo.png" class="card-img-top rounded mx-auto d-block" alt="cek saldo" >
                  <div class="card-body">
                    <h4>Cek Saldo</h4>
                  </div>
                </div>
              </button>
              </h2>
              <div id="collapseDua2" class="accordion-collapse collapse" aria-labelledby="headingDua2" data-bs-parent="#accordionExampleSatu">
              <div class="accordion-body bodyy-2 border border-2">
                @foreach ($ceksaldos as $ceksaldo)
                <form>
                  <div class="mb-3">
                    <label for="disableTextInput1" class="form-label">format:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput1" placeholder="{{$ceksaldo->format}}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="disableTextInput2" class="form-label">contoh:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput2" placeholder="{{$ceksaldo->contoh}}" disabled>
                  </div>
                </form>
                <div class="container heading-8">
                  <h4>Cek Saldo</h4>
                  <p>{!!$ceksaldo->desc!!}</p>
                </div>
                @endforeach 
              </div>
              </div>
          </div>
        </div>
      </div>

      <div style="margin-right: 30px;" class="col-2">
        <div class="accordion" id="accordionExampleTiga">
          <div class="accordion-item item-1">
              <h2 class="accordion-header header-1" id="headingTiga3">
              <button class="accordion-button button-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTiga3" aria-expanded="true" aria-controls="collapseTiga3">
                <div class="card-3" style="width: 217px; height: 160px">
                  <img src="images/format-transaksi/deposit-via-tiket.png" class="card-img-top rounded mx-auto d-block" alt="deposit" >
                  <div class="card-body">
                    <h4>Deposit Via Tiket</h4>
                  </div>
                </div>
              </button>
              </h2>
              <div id="collapseTiga3" class="accordion-collapse collapse" aria-labelledby="headingTiga3" data-bs-parent="#accordionExampleDua">
              <div class="accordion-body bodyy-3 border border-2">
                @foreach ($depositviatikets as $depositviatiket)
                <form>
                  <div class="mb-3">
                    <label for="disableTextInput1" class="form-label">format:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput1" placeholder="{{$depositviatiket->format}}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="disableTextInput2" class="form-label">contoh:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput2" placeholder="{{$depositviatiket->contoh}}" disabled>
                  </div>
                </form>
                <div class="container heading-8">
                  <h4>Cek Saldo</h4>
                  <p>{!!$depositviatiket->desc!!}</p>
                </div>
                @endforeach 
              </div>
              </div>
          </div>
        </div>
      </div>

      <div style="margin-right: 30px;" class="col-2">
        <div class="accordion" id="accordionExampleEmpat">
          <div class="accordion-item item-1">
              <h2 class="accordion-header header-1" id="headingEmpat4">
              <button class="accordion-button button-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmpat4" aria-expanded="true" aria-controls="collapseEmpat4">
                <div class="card-3" style="width: 217px; height: 160px">
                  <img src="images/format-transaksi/ganti-pin.png" class="card-img-top rounded mx-auto d-block" alt="ganti pin" >
                  <div class="card-body">
                    <h4>Ganti Pin</h4>
                  </div>
                </div>
              </button>
              </h2>
              <div id="collapseEmpat4" class="accordion-collapse collapse" aria-labelledby="headingEmpat4" data-bs-parent="#accordionExampleTiga">
              <div class="accordion-body bodyy-4 border border-2">
                @foreach ($gantipins as $gantipin)
                <form>
                  <div class="mb-3">
                    <label for="disableTextInput1" class="form-label">format:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput1" placeholder="{{$gantipin->format}}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="disableTextInput2" class="form-label">contoh:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput2" placeholder="{{$gantipin->contoh}}" disabled>
                  </div>
                </form>
                <div class="container heading-8">
                  <h4>Cek Saldo</h4>
                  <p>{!!$gantipin->desc!!}</p>
                </div>
                @endforeach 
              </div>
              </div>
          </div>
        </div>
      </div>

    </div>

    <br>

    <div class="row justify-content-center">

      <div style="margin-right: 30px;" class="col-2">
        <div class="accordion" id="accordionExampleLima">
          <div class="accordion-item item-1">
              <h2 class="accordion-header header-1" id="headingLima5">
              <button class="accordion-button button-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLima5" aria-expanded="true" aria-controls="collapseLima5">
                <div class="card-3" style="width: 217px; height: 160px">
                  <img src="images/format-transaksi/rekap-transaksi.png" class="card-img-top rounded mx-auto d-block" alt="rekap transaksi" >
                  <div class="card-body">
                    <h4>Rekap Transaksi</h4>
                  </div>
                </div>
              </button>
              </h2>
              <div id="collapseLima5" class="accordion-collapse collapse" aria-labelledby="headingLima5" data-bs-parent="#accordionExampleEmpat">
              <div class="accordion-body bodyy-1 border border-2">
                @foreach ($rekaptransaksis as $rekaptransaksi)
                <form>
                  <div class="mb-3">
                    <label for="disableTextInput1" class="form-label">format:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput1" placeholder="{{$rekaptransaksi->format}}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="disableTextInput2" class="form-label">contoh:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput2" placeholder="{{$rekaptransaksi->contoh}}" disabled>
                  </div>
                </form>
                <div class="container heading-8">
                  <h4>Cek Saldo</h4>
                  <p>{!!$rekaptransaksi->desc!!}</p>
                </div>
                @endforeach 
              </div>
              </div>
          </div>
        </div>
      </div>

      <div style="margin-right: 30px;" class="col-2">
        <div class="accordion" id="accordionExampleEnam">
          <div class="accordion-item item-1">
              <h2 class="accordion-header header-1" id="headingEnam6">
              <button class="accordion-button button-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEnam6" aria-expanded="true" aria-controls="collapseEnam6">
                <div class="card-3" style="width: 217px; height: 160px">
                  <img src="images/format-transaksi/komplain.png" class="card-img-top rounded mx-auto d-block" alt="komplain" >
                  <div class="card-body">
                    <h4 class="h4-fix-2">Komplain</h4>
                  </div>
                </div>
              </button>
              </h2>
              <div id="collapseEnam6" class="accordion-collapse collapse" aria-labelledby="headingEnam6" data-bs-parent="#accordionExampleLima">
              <div class="accordion-body bodyy-2 border border-2">
                @foreach ($komplainformats as $komplainformat)
                <form>
                  <div class="mb-3">
                    <label for="disableTextInput1" class="form-label">format:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput1" placeholder="{{$komplainformat->format}}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="disableTextInput2" class="form-label">contoh:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput2" placeholder="{{$komplainformat->contoh}}" disabled>
                  </div>
                </form>
                <div class="container heading-8">
                  <h4>Cek Saldo</h4>
                  <p>{!!$komplainformat->desc!!}</p>
                </div>
                @endforeach 
              </div>
              </div>
          </div>
        </div>
      </div>

      <div style="margin-right: 30px;" class="col-2">
        <div class="accordion" id="accordionExampleTujuh">
          <div class="accordion-item item-1">
              <h2 class="accordion-header header-1" id="headingTujuh7">
              <button class="accordion-button button-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTujuh7" aria-expanded="true" aria-controls="collapseTujuh7">
                <div class="card-3" style="width: 217px; height: 160px">
                  <img src="images/format-transaksi/cek-tagihan-pascabayar.png" class="card-img-top rounded mx-auto d-block" alt="cek tagihan tagihan" >
                  <div class="card-body">
                    <h4 class="h4-fix">Cek Tagihan <br> Pembayaran</h4>
                  </div>
                </div>
              </button>
              </h2>
              <div id="collapseTujuh7" class="accordion-collapse collapse" aria-labelledby="headingTujuh7" data-bs-parent="#accordionExampleEnam">
              <div class="accordion-body bodyy-3 border border-2">
                @foreach ($cektagihanpembayarans as $cektagihanpembayaran)
                <form>
                  <div class="mb-3">
                    <label for="disableTextInput1" class="form-label">format:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput1" placeholder="{{$cektagihanpembayaran->format}}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="disableTextInput2" class="form-label">contoh:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput2" placeholder="{{$cektagihanpembayaran->contoh}}" disabled>
                  </div>
                </form>
                <div class="container heading-8">
                  <h4>Cek Saldo</h4>
                  <p>{!!$cektagihanpembayaran->desc!!}</p>
                </div>
                @endforeach 
              </div>
              </div>
          </div>
        </div>
      </div>

      <div style="margin-right: 30px;" class="col-2">
        <div class="accordion" id="accordionExampleDelapan">
          <div class="accordion-item item-1">
              <h2 class="accordion-header header-1" id="headingDelapan8">
              <button class="accordion-button button-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDelapan8" aria-expanded="true" aria-controls="collapseDelapan8">
                <div class="card-3" style="width: 217px; height: 160px">
                  <img src="images/format-transaksi/pembayaran-pascabayar.png" class="card-img-top rounded mx-auto d-block" alt="pembayaran pascabayar" >
                  <div class="card-body">
                    <h4 class="h4-fix">Pembayaran <br> Pascabayar</h4>
                  </div>
                </div>
              </button>
              </h2>
              <div id="collapseDelapan8" class="accordion-collapse collapse" aria-labelledby="headingDelapan8" data-bs-parent="#accordionExampleTujuh">
              <div class="accordion-body bodyy-4 border border-2">
                @foreach ($pembayaranpascabayars as $pembayaranpascabayar)
                <form>
                  <div class="mb-3">
                    <label for="disableTextInput1" class="form-label">format:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput1" placeholder="{{$pembayaranpascabayar->format}}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="disableTextInput2" class="form-label">contoh:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput2" placeholder="{{$pembayaranpascabayar->contoh}}" disabled>
                  </div>
                </form>
                <div class="container heading-8">
                  <h4>Cek Saldo</h4>
                  <p>{!!$pembayaranpascabayar->desc!!}</p>
                </div>
                @endforeach 
              </div>
              </div>
          </div>
        </div>
      </div>

    </div>

    <br>

    <div class="row justify-content-center">

      <div style="margin-right: 30px;" class="col-2">
        <div class="accordion" id="accordionExampleSembilan">
          <div class="accordion-item item-1">
              <h2 class="accordion-header header-1" id="headingSembilan9">
              <button class="accordion-button button-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSembilan9" aria-expanded="true" aria-controls="collapseSembilan9">
                <div class="card-3" style="width: 217px; height: 160px">
                  <img src="images/format-transaksi/cek-harga-produk.png" class="card-img-top rounded mx-auto d-block" alt="cek harga produk" >
                  <div class="card-body">
                    <h4>Cek Harga Produk</h4>
                  </div>
                </div>
              </button>
              </h2>
              <div id="collapseSembilan9" class="accordion-collapse collapse" aria-labelledby="headingSembilan9" data-bs-parent="#accordionExampleDelapan">
              <div class="accordion-body bodyy-1 border border-2">
                @foreach ($cekhargaproduks as $cekhargaproduk)
                <form>
                  <div class="mb-3">
                    <label for="disableTextInput1" class="form-label">format:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput1" placeholder="{{$cekhargaproduk->format}}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="disableTextInput2" class="form-label">contoh:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput2" placeholder="{{$cekhargaproduk->contoh}}" disabled>
                  </div>
                </form>
                <div class="container heading-8">
                  <h4>Cek Saldo</h4>
                  <p>{!!$cekhargaproduk->desc!!}</p>
                </div>
                @endforeach 
              </div>
              </div>
          </div>
        </div>
      </div>

      <div style="margin-right: 30px;" class="col-2">
        <div class="accordion" id="accordionExampleSepuluh">
          <div class="accordion-item item-1">
              <h2 class="accordion-header header-1" id="headingSepuluh10">
              <button class="accordion-button button-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSepuluh10" aria-expanded="true" aria-controls="collapseSepuluh10">
                <div class="card-3" style="width: 217px; height: 160px">
                  <img src="images/format-transaksi/transfer-deposit.png" class="card-img-top rounded mx-auto d-block" alt="transfer deposit" >
                  <div class="card-body">
                    <h4>Transfer Deposit</h4>
                  </div>
                </div>
              </button>
              </h2>
              <div id="collapseSepuluh10" class="accordion-collapse collapse" aria-labelledby="headingSepuluh10" data-bs-parent="#accordionExampleSembilan">
              <div class="accordion-body bodyy-2 border border-2">
                @foreach ($transferdeposits as $transferdeposit)
                <form>
                  <div class="mb-3">
                    <label for="disableTextInput1" class="form-label">format:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput1" placeholder="{{$transferdeposit->format}}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="disableTextInput2" class="form-label">contoh:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput2" placeholder="{{$transferdeposit->contoh}}" disabled>
                  </div>
                </form>
                <div class="container heading-8">
                  <h4>Cek Saldo</h4>
                  <p>{!!$transferdeposit->desc!!}</p>
                </div>
                @endforeach 
              </div>
              </div>
          </div>
        </div>
      </div>

      <div style="margin-right: 30px;" class="col-2">
        <div class="accordion" id="accordionExampleSebelas">
          <div class="accordion-item item-1">
              <h2 class="accordion-header header-1" id="headingSebelas11">
              <button class="accordion-button button-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSebelas11" aria-expanded="true" aria-controls="collapseSebelas11">
                <div class="card-3" style="width: 217px; height: 160px">
                  <img src="images/format-transaksi/markup-global.png" class="card-img-top rounded mx-auto d-block" alt="markup global" >
                  <div class="card-body">
                    <h4>Markup Global</h4>
                  </div>
                </div>
              </button>
              </h2>
              <div id="collapseSebelas11" class="accordion-collapse collapse" aria-labelledby="headingSebelas11" data-bs-parent="#accordionExampleSepuluh">
              <div class="accordion-body bodyy-3 border border-2">
                @foreach ($markupglobals as $markupglobal)
                <form>
                  <div class="mb-3">
                    <label for="disableTextInput1" class="form-label">format:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput1" placeholder="{{$markupglobal->format}}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="disableTextInput2" class="form-label">contoh:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput2" placeholder="{{$markupglobal->contoh}}" disabled>
                  </div>
                </form>
                <div class="container heading-8">
                  <h4>Cek Saldo</h4>
                  <p>{!!$markupglobal->desc!!}</p>
                </div>
                @endforeach 
              </div>
              </div>
          </div>
        </div>
      </div>

      <div style="margin-right: 30px;" class="col-2">
        <div class="accordion" id="accordionExampleDuabelas">
          <div class="accordion-item item-1">
              <h2 class="accordion-header header-1" id="headingDuabelas12">
              <button class="accordion-button button-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDuabelas12" aria-expanded="true" aria-controls="collapseDuabelas12">
                <div class="card-3" style="width: 217px; height: 160px">
                  <img src="images/format-transaksi/markup-spesifik.png" class="card-img-top rounded mx-auto d-block" alt="markup spesifik" >
                  <div class="card-body">
                    <h4>Markup Spesifik</h4>
                  </div>
                </div>
              </button>
              </h2>
              <div id="collapseDuabelas12" class="accordion-collapse collapse" aria-labelledby="headingDuabelas12" data-bs-parent="#accordionExampleSebelas">
              <div class="accordion-body bodyy-4 border border-2">
                @foreach ($markupspesifiks as $markupspesifik)
                <form>
                  <div class="mb-3">
                    <label for="disableTextInput1" class="form-label">format:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput1" placeholder="{{$markupspesifik->format}}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="disableTextInput2" class="form-label">contoh:</label>
                    <input type="text" class="form-control control-3 border border-1" id="disableTextInput2" placeholder="{{$markupspesifik->contoh}}" disabled>
                  </div>
                </form>
                <div class="container heading-8">
                  <h4>Cek Saldo</h4>
                  <p>{!!$markupspesifik->desc!!}</p>
                </div>
                @endforeach 
              </div>
              </div>
          </div>
        </div>
      </div>

    </div>

    </div>
    {{-- End Info Card 3 --}}

    {{-- Container Heading 4 --}}
    <div class="container heading-4">
      <h2><Strong>Hubungi Kami</Strong></h2>
      <hr>
    </div>
    {{-- End Container Heading 4 --}}

    {{-- Komplain --}}
    <div class="container">
      <img style="margin-left: -112px;" src="images/lb.png" alt="lb" class="rounded float-start">
      <img src="images/cs.png" class="cs" alt="cs">
      <div class="container align-items-end heading-5">
        <h5 class="fw-semibold">Komplain</h5>
      </div>
      <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
        @csrf
      <div class="container">
        <input class="form-control-2" type="text" name="nama"  placeholder="Nama Lengkap">
        <input class="form-control-2" type="email" name="email" placeholder="Email">
        <input class="form-control-2" type="text" name="subject"  placeholder="Subject:">
        <textarea class="form-control-2 textarea" name="text" id="exampleFormControlTextarea1" placeholder="Text"></textarea> <br>
        <button onclick="myFunction()" type="submit" class="btn kirim">Kirim</button>
        <script>
          function myFunction() {
            alert("Komplain Sudah Dikirim !")
          }
        </script>
      </div>
        <img style="margin-right: -111px;" src="images/rb.png" alt="rb" class="rounded float-end"> 
      </form>
    </div>
    </form>

    {{-- End Komplain --}}

    {{-- Container Heading 6 --}}
    <div class="container justify-content-center heading-6">
      <h5>Team Support Layanan Multidana Telegram</h5>
      <hr>
    </div>
    {{-- End Container Heading 6 --}}

    {{-- Info Card 5 --}}
    <div class="container">
      <div class="row justify-content-center">
        @foreach ($customerservicesettings as $customerservicesetting)
        <div class="col-2">
          <div class="card-4" style="width: 217px; height: 160px">
            <img src="images/cs2.png" class="card-img-top rounded mx-auto d-block" alt="cs2" >
            <div class="card-body">
            <h4>{{$customerservicesetting->nama}}</h4>
             <p>{{$customerservicesetting->nomor}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    {{-- End Info Card 5 --}}

  <div class="container mt-4">
      @yield('container')
  </div>

{{-- Footer --}}
@include('partials.footer')
{{-- End Footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
