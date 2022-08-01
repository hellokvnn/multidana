<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="images/logo.png" alt="logo" width="223" height="54">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "About") ? 'active' : '' }}"  href="/#about">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link {{ ($title === "Voucher Games") ? 'active' : '' }} dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Pulsa Retail
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/pulsa-telepon">Pulsa Telepon</a></li>
                <li><a class="dropdown-item" href="/pln-tv-kabel">PLN TV Kabel</a></li>
                <li><a class="dropdown-item" href="/voucher-games">Voucher Games</a></li>
                <li><a class="dropdown-item" href="/produk-multibiller">Produk Multibiller</a></li>
                <li><a class="dropdown-item" href="/topup-e-money">Top-Up E-Money</a></li>
                <li><a class="dropdown-item" href="#">Tiket Kereta</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Download App") ? 'active' : '' }}" href="/#download-app">Download App</a>
            </li>
            <li class="nav-item {{ ($title === "Pulsa H2H") ? 'active' : '' }} dropdown">
                <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pulsa H2H
                </a>
    
                @php $lists = App\Models\PulsaH2H::all(); @endphp
    
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  @foreach ($lists as $list)
                    <li><a class="dropdown-item" href="/pulsa-h2h-list/{{$list->id}}">{{ $list->title }}</a></li>
                  @endforeach
                  <!-- <li><a class="dropdown-item" href="/pulsa-telepon">Pulsa Telepon</a></li>
                  <li><a class="dropdown-item" href="/pln-tv-kabel">PLN TV Kabel</a></li>
                  <li><a class="dropdown-item" href="/voucher-games">Voucher Games</a></li>
                  <li><a class="dropdown-item" href="/produk-multibiller">Produk Multibiller</a></li>
                  <li><a class="dropdown-item" href="/topup-e-money">Top-Up E-Money</a></li>
                  <li><a class="dropdown-item" href="#">Tiket Kereta</a></li> -->
                </ul>
              </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Kontak Kami") ? 'active' : '' }}" href="/#kontak-kami">Kontak Kami</a>
            </li>
          </ul>
        </div>
    </div>
  </nav>
  {{-- End Navbar --}}

{{-- Container Heading --}}
<div class="container heading-7">
    <h2><Strong>Voucher Games</Strong></h2>
    <p>Server Pulsa dengan Dukungan Software Terbaik</p>
</div>
{{-- End Container Heading --}}

{{-- Info Card 5 --}}
<div class="container">

<div class="row justify-content-center">

    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample1">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/megaxus.png" class="card-img-top rounded mx-auto d-block" alt="megaxus" >
                    <div class="card-body">
                    <h4>Megaxus</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
            <div class="accordion-body border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($megaxuses as $megaxus)
                        <tr>
                          <td> {{$megaxus->kode}} </td>
                          <td> {{$megaxus->operator}} </td>
                          <td> {{$megaxus->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample2">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/ml.png" class="card-img-top rounded mx-auto d-block" alt="ml" >
                    <div class="card-body">
                    <h4>Mobile Legend <br> Bang-Bang</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
            <div class="accordion-body body-2 border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($mlbbs as $mlbb)
                        <tr>
                          <td> {{$mlbb->kode}} </td>
                          <td> {{$mlbb->operator}} </td>
                          <td> {{$mlbb->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample3">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/steam.png" class="card-img-top rounded mx-auto d-block" alt="steam" >
                    <div class="card-body">
                    <h4>Voucher <br> Steam Sea</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
            <div class="accordion-body body-3 border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($steams as $steam)
                        <tr>
                          <td> {{$steam->kode}} </td>
                          <td> {{$steam->operator}} </td>
                          <td> {{$steam->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample4">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/garena.png" class="card-img-top rounded mx-auto d-block" alt="garena" >
                    <div class="card-body">
                    <h4>Garena</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample3">
            <div class="accordion-body body-4 border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($garenas as $garena)
                        <tr>
                          <td> {{$garena->kode}} </td>
                          <td> {{$garena->operator}} </td>
                          <td> {{$garena->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>

</div>

    <br>

<div class="row justify-content-center">

    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample5">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/lyto.png" class="card-img-top rounded mx-auto d-block" alt="lyto" >
                    <div class="card-body">
                    <h4>Lyto</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample4">
            <div class="accordion-body border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($lytos as $lyto)
                        <tr>
                          <td> {{$lyto->kode}} </td>
                          <td> {{$lyto->operator}} </td>
                          <td> {{$lyto->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>
    
    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample6">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/zynga.png" class="card-img-top rounded mx-auto d-block" alt="zynga" >
                    <div class="card-body">
                    <h4>Zynga</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample5">
            <div class="accordion-body body-2 border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($zyngas as $zynga)
                        <tr>
                          <td> {{$zynga->kode}} </td>
                          <td> {{$zynga->operator}} </td>
                          <td> {{$zynga->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample7">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/digicash.png" class="card-img-top rounded mx-auto d-block" alt="digicash" >
                    <div class="card-body">
                    <h4>Digicash</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample6">
            <div class="accordion-body body-3 border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($digicashes as $digicash)
                        <tr>
                          <td> {{$digicash->kode}} </td>
                          <td> {{$digicash->operator}} </td>
                          <td> {{$digicash->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>


    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample8">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/mogplay.png" class="card-img-top rounded mx-auto d-block" alt="mogplay" >
                    <div class="card-body">
                    <h4>Mogplay</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample7">
            <div class="accordion-body body-4 border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($mogplays as $mogplay)
                        <tr>
                            <td> {{$mogplay->kode}} </td>
                            <td> {{$mogplay->operator}} </td>
                            <td> {{$mogplay->harga}} </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>

    <br>

<div class="row justify-content-center">

    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample9">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingNine">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/itunes.png" class="card-img-top rounded mx-auto d-block" alt="itunes" >
                    <div class="card-body">
                    <h4>Itunes Gift Card</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample8">
            <div class="accordion-body border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($itunes as $itunes)
                        <tr>
                          <td> {{$itunes->kode}} </td>
                          <td> {{$itunes->operator}} </td>
                          <td> {{$itunes->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>
    
    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample10">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTen">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/cherry.png" class="card-img-top rounded mx-auto d-block" alt="cherry" >
                    <div class="card-body">
                    <h4>Cherry Credits</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample9">
            <div class="accordion-body body-2 border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($cherries as $cherry)
                        <tr>
                          <td> {{$cherry->kode}} </td>
                          <td> {{$cherry->operator}} </td>
                          <td> {{$cherry->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample11">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEleven">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/pts.png" class="card-img-top rounded mx-auto d-block" alt="pts" >
                    <div class="card-body">
                    <h4>PTS My Card</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample10">
            <div class="accordion-body body-3 border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($pts as $pts)
                        <tr>
                          <td> {{$pts->kode}} </td>
                          <td> {{$pts->operator}} </td>
                          <td> {{$pts->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample12">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwelve">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/iah.png" class="card-img-top rounded mx-auto d-block" alt="iah" >
                    <div class="card-body">
                    <h4>iCredit IAH <br> Indonesia</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample11">
            <div class="accordion-body body-4 border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($iahs as $iah)
                        <tr>
                          <td> {{$iah->kode}} </td>
                          <td> {{$iah->operator}} </td>
                          <td> {{$iah->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>

</div>

    <br>

<div class="row justify-content-center">

    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample13">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThirteen">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/playstation.png" class="card-img-top rounded mx-auto d-block" alt="playstation" >
                    <div class="card-body">
                    <h4>Playstation</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample12">
            <div class="accordion-body border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($playstations as $playstation)
                        <tr>
                          <td> {{$playstation->kode}} </td>
                          <td> {{$playstation->operator}} </td>
                          <td> {{$playstation->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>
    
    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample14">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFourteen">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/geon.png" class="card-img-top rounded mx-auto d-block" alt="geon" >
                    <div class="card-body">
                    <h4>Geon</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample13">
            <div class="accordion-body body-2 border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($geons as $geon)
                        <tr>
                          <td> {{$geon->kode}} </td>
                          <td> {{$geon->operator}} </td>
                          <td> {{$geon->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample15">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFiveteen">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveteen" aria-expanded="true" aria-controls="collapseFiveteen">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/vcoin.png" class="card-img-top rounded mx-auto d-block" alt="vcoin" >
                    <div class="card-body">
                    <h4>V-Coin VTC</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseFiveteen" class="accordion-collapse collapse" aria-labelledby="headingFiveteen" data-bs-parent="#accordionExample14">
            <div class="accordion-body body-3 border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($vcoins as $vcoin)
                        <tr>
                          <td> {{$vcoin->kode}} </td>
                          <td> {{$vcoin->operator}} </td>
                          <td> {{$vcoin->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample16">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSixteen">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/mol.png" class="card-img-top rounded mx-auto d-block" alt="mol" >
                    <div class="card-body">
                    <h4>MOL Point</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample15">
            <div class="accordion-body body-4 border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($mols as $mol)
                        <tr>
                          <td> {{$mol->kode}} </td>
                          <td> {{$mol->operator}} </td>
                          <td> {{$mol->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>

</div>

<br>

<div class="row justify-content-center">

    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample17">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeventeen">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="true" aria-controls="collapseSeventeen">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/gemscool.png" class="card-img-top rounded mx-auto d-block" alt="gemscool" >
                    <div class="card-body">
                    <h4>Gemscool</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample16">
            <div class="accordion-body body-5 border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($gemscools as $gemscool)
                        <tr>
                          <td> {{$gemscool->kode}} </td>
                          <td> {{$gemscool->operator}} </td>
                          <td> {{$gemscool->harga}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>

</div>
{{-- End Info Card 3 --}}

<div class="container mt-4">
    @yield('container')
</div>

{{-- Footer --}}
@include('partials.footer')
{{-- End Footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>