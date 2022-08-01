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
            <a class="nav-link active dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <h2><Strong>Pulsa Retail</Strong></h2>
    <p>Server Pulsa dengan Dukungan Software Terbaik</p>
</div>
{{-- End Container Heading --}}

{{-- Info Card 5 --}}
<div class="container">

<div class="row justify-content-center">
  <table style="margin-left: 15px" class="table table-sm table-borderless table-responsive">
      <thead>
        <tr>
          <th scope="col">Kode</th>
          <th scope="col">Operator</th>
          <th scope="col">Harga</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tiketkeretas as $tiketkereta)
        <tr>
          <td> {{$tiketkereta->kode}} </td>
          <td> {{$tiketkereta->operator}} </td>
          <td> {{$tiketkereta->harga}} </td>
        </tr>
        @endforeach
      </tbody>
  </table>
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