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
     <link rel="stylesheet" href="/css/style.css">
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
            <a class="nav-link {{ ($title === "Pulsa Telepon") ? 'active' : '' }} dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <h2><Strong>{{ $data->isEmpty() ? $title : $data[0]->title }}</Strong></h2>
    <p>{{ $data->isEmpty() ? $title : $data[0]->desc }}</p>
</div>
{{-- End Container Heading --}}

{{-- Info Card 5 --}}
<div class="container">

<div class="row justify-content-center">

    @php $no = 1; @endphp
    @foreach($data as $item)
        <div style="margin-right: 50px;" class="col-2">
            <div class="accordion" id="accordionExample{{$no}}">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{$no}}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$no}}" aria-expanded="true" aria-controls="collapse{{$no}}">
                        <div class="card-5" style="width: 217px; height: 170px">
                            <img src="{{ $item->image }}" class="card-img-top rounded mx-auto d-block" alt="indosat" >
                            <div class="card-body">
                            <h4>{{ $item->item_title }}</h4>
                            </div>
                        </div>
                    </button>
                    </h2>
                    <div id="collapse{{$no}}" class="accordion-collapse collapse" aria-labelledby="heading{{$no}}" data-bs-parent="#accordionExample{{$no}}">
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
                                  @php $lists = App\Models\DetailPulsaH2HItem::where('pulsa_h2h_item_id', $item->item_id)->get(); @endphp
                                    @foreach($lists as $list)
                                      <tr>
                                          <td>{{ $list->kode }}</td>
                                          <td>{{ $list->operator }}</td>
                                          <td>{{ $list->harga }}</td>
                                      </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php $no++ @endphp
    @endforeach

    {{-- 
    <!-- <div style="margin-right: 35px;" class="col-2">
    <div class="accordion" id="accordionExample2">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/telkomsel.png" class="card-img-top rounded mx-auto d-block" alt="telkomsel" >
                    <div class="card-body">
                    <h4>Telkomsel <br> Nasional</h4>
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
                      @foreach ($telkomsels as $telkomsel)
                      <tr>
                        <td> {{$telkomsel->kode}} </td>
                        <td> {{$telkomsel->operator}} </td>
                        <td> {{$telkomsel->harga}} </td>
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
                    <img src="images/axis.png" class="card-img-top rounded mx-auto d-block" alt="axis" >
                    <div class="card-body">
                    <h4>Axis <br> Nasional</h4>
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
                      @foreach ($axes as $axis)
                      <tr>
                        <td> {{$axis->kode}} </td>
                        <td> {{$axis->operator}} </td>
                        <td> {{$axis->harga}} </td>
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
                    <img src="images/xl.png" class="card-img-top rounded mx-auto d-block" alt="xl" >
                    <div class="card-body">
                    <h4>XL <br> Nasional</h4>
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
                      @foreach ($xls as $xl)
                      <tr>
                        <td> {{$xl->kode}} </td>
                        <td> {{$xl->operator}} </td>
                        <td> {{$xl->harga}} </td>
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
                    <img src="images/smartfren.png" class="card-img-top rounded mx-auto d-block" alt="smartfren" >
                    <div class="card-body">
                    <h4>Smartfren <br> Nasional</h4>
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
                      @foreach ($smartfrens as $smartfren)
                      <tr>
                        <td> {{$smartfren->kode}} </td>
                        <td> {{$smartfren->operator}} </td>
                        <td> {{$smartfren->harga}} </td>
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
                    <img src="images/3.png" class="card-img-top rounded mx-auto d-block" alt="3" >
                    <div class="card-body">
                    <h4>Three <br> Nasional</h4>
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
                      @foreach ($threes as $three)
                      <tr>
                        <td> {{$three->kode}} </td>
                        <td> {{$three->operator}} </td>
                        <td> {{$three->harga}} </td>
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
                    <img src="images/mtix.png" class="card-img-top rounded mx-auto d-block" alt="mtix" >
                    <div class="card-body">
                    <h4>MTIX ID <br> XXI</h4>
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
                      @foreach ($mtixes as $mtix)
                      <tr>
                        <td> {{$mtix->kode}} </td>
                        <td> {{$mtix->operator}} </td>
                        <td> {{$mtix->harga}} </td>
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
                    <img src="images/tix.png" class="card-img-top rounded mx-auto d-block" alt="tix" >
                    <div class="card-body">
                    <h4>TIX ID <br> XXI</h4>
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
                      @foreach ($tixes as $tix)
                      <tr>
                        <td> {{$tix->kode}} </td>
                        <td> {{$tix->operator}} </td>
                        <td> {{$tix->harga}} </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div> -->
    --}}

</div>

</div>
{{-- End Info Card 3 --}}

{{-- Footer --}}
@include('partials.footer')
{{-- End Footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>