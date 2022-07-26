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
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="/about">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
              <a class="nav-link" href="/download-app">Download App</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pulsa-h2h">Pulsa H2H</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kontak-kami">Kontak Kami</a>
            </li>
          </ul>
        </div>
    </div>
  </nav>
{{-- End Navbar --}}

<div class="container">
    <div class="row justify-content-center">
        <h1 style="margin-left: 100px; margin-top: 80px; color:#A00043;" class="h3 mb-4">Daftar</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div style="margin-left: 50px" class="col-4 mb-4">
                    <input style="border-color: #A00043 !important" id="name" type="text" class="form-control border-bottom rounded-0 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div style="margin-left: 50px" class="col-4 mb-4">
                    <input style="border-color: #A00043 !important" id="email" type="email" class="form-control border-bottom rounded-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div style="margin-left: 50px" class="col-4 mb-4">
                    <input style="border-color: #A00043 !important" id="password" type="password" class="form-control border-bottom rounded-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div style="margin-left: 50px" class="col-4 mb-4">
                <input style="border-color: #A00043 !important" id="password-confirm" type="password" class="form-control border-bottom rounded-0" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                <button style="background: #A00043; color: #fff" type="submit" class="btn mt-4">
                    {{ __('Register') }}
                </button>
                </div>
            </form>
    </div>
</div>


               
