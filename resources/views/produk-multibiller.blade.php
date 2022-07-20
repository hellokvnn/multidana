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
              <a class="nav-link {{ ($title === "About") ? 'active' : '' }}"  href="/about">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active {{ ($title === "Produk Multibiller") ? 'active' : '' }} dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
              <a class="nav-link {{ ($title === "Download App") ? 'active' : '' }}" href="/download-app">Download App</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Pulsa H2H") ? 'active' : '' }}" href="/pulsa-h2h">Pulsa H2H</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Kontak Kami") ? 'active' : '' }}" href="/kontak-kami">Kontak Kami</a>
            </li>
          </ul>
        </div>
    </div>
  </nav>
  {{-- End Navbar --}}

{{-- Container Heading --}}
<div class="container heading-7">
    <h2><Strong>Produk Multibiller</Strong></h2>
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
                    <img src="images/pln.png" class="card-img-top rounded mx-auto d-block" alt="pln" >
                    <div class="card-body">
                    <h4>PLN</h4>
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
                        @foreach ($plnmultibillers as $plnmultibiller)
                        <tr>
                          <td> {{$plnmultibiller->kode}} </td>
                          <td> {{$plnmultibiller->operator}} </td>
                          <td> {{$plnmultibiller->harga}} </td>
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
                    <img src="images/telkom.png" class="card-img-top rounded mx-auto d-block" alt="telkom" >
                    <div class="card-body">
                    <h4>Telkom</h4>
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
                        @foreach ($telkommultibillers as $telkommultibiller)
                        <tr>
                          <td> {{$telkommultibiller->kode}} </td>
                          <td> {{$telkommultibiller->operator}} </td>
                          <td> {{$telkommultibiller->harga}} </td>
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
                    <img src="images/pdam.png" class="card-img-top rounded mx-auto d-block" alt="pdam" >
                    <div class="card-body">
                    <h4>PDAM</h4>
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
                        @foreach ($pdammultibillers as $pdammultibiller)
                        <tr>
                          <td> {{$pdammultibiller->kode}} </td>
                          <td> {{$pdammultibiller->operator}} </td>
                          <td> {{$pdammultibiller->harga}} </td>
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
                    <img src="images/bpjs.png" class="card-img-top rounded mx-auto d-block" alt="bpjs" >
                    <div class="card-body">
                    <h4>BPJS</h4>
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
                        @foreach ($bpjsmultibillers as $bpjsmultibiller)
                        <tr>
                          <td> {{$bpjsmultibiller->kode}} </td>
                          <td> {{$bpjsmultibiller->operator}} </td>
                          <td> {{$bpjsmultibiller->harga}} </td>
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

<div  class="row justify-content-center">

    <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample5">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/finance.png" class="card-img-top rounded mx-auto d-block" alt="finance" >
                    <div class="card-body">
                    <h4>Finance</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample4">
            <div class="accordion-body body-6 border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($financemultibillers as $financemultibiller)
                        <tr>
                          <td> {{$financemultibiller->kode}} </td>
                          <td> {{$financemultibiller->operator}} </td>
                          <td> {{$financemultibiller->harga}} </td>
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
                    <img src="images/television.png" class="card-img-top rounded mx-auto d-block" alt="television" >
                    <div class="card-body">
                    <h4>TV Berlangganan</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample5">
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
                        @foreach ($tvberlanggananmultibillers as $tvberlanggananmultibiller)
                        <tr>
                          <td> {{$tvberlanggananmultibiller->kode}} </td>
                          <td> {{$tvberlanggananmultibiller->operator}} </td>
                          <td> {{$tvberlanggananmultibiller->harga}} </td>
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
                    <img src="images/postpaid.png" class="card-img-top rounded mx-auto d-block" alt="postpaid" >
                    <div class="card-body">
                    <h4>Pulsa Post Paid</h4>
                    </div>
                </div>
            </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample6">
            <div class="accordion-body body-7 border border-2">
                <table class="table table-sm table-borderless table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($postpaidmultibillers as $postpaidmultibiller)
                        <tr>
                          <td> {{$postpaidmultibiller->kode}} </td>
                          <td> {{$postpaidmultibiller->operator}} </td>
                          <td> {{$postpaidmultibiller->harga}} </td>
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