<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

{{-- Container Heading --}}
<div class="container heading-7">
    <h2><Strong>Pulsa Retail</Strong></h2>
    <p>Server Pulsa dengan Dukungan Software Terbaik</p>
</div>
{{-- End Container Heading --}}

{{-- Info Card 5 --}}
<div class="container-fluid">

<div class="row justify-content-center">

    <div class="col-2">
    <div class="accordion" id="accordionExample1">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <div class="card-5" style="width: 217px; height: 170px">
                    <img src="images/indosat.png" class="card-img-top rounded mx-auto d-block" alt="indosat" >
                    <div class="card-body">
                    <h4>Indosat <br> Nasional</h4>
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
                      @foreach ($indosats as $indosat)
                      <tr>
                        <td> {{$indosat->kode}} </td>
                        <td> {{$indosat->operator}} </td>
                        <td> {{$indosat->harga}} </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div class="col-2">
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

    <div class="col-2">
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

    <div class="col-2">
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

    <div class="col-2">
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
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample5">
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
    
    <div class="col-2">
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

    <div class="col-2">
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


    <div class="col-2">
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