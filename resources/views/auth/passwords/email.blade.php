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
        <img src="/images/logo.png" alt="logo" width="223" height="54">
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
                <li><a class="dropdown-item" href="/tiket-kereta">Tiket Kereta</a></li>
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

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="background: #fff; color: #A00043" class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input style="margin-left: -10px; margin-top: 2px" id="email" type="email" class="form-control-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button style="background: #A00043; color: #fff" type="submit" class="btn">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- Jumbotron 3 --}}
    <div class="jumbotron-3" id="kontak-kami">
        <div class="container">
            <h1 class="display-4"></h1>
            <div class="container">
                <img src="/images/logofooter.png" alt="logofooter">
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
                Solution Centre : 1500-399 <br>
                WhatsApp : 0824 2321 3123
                </p>
            </div>
        </div>
        <div class="container-footer">
            <div class="container">
                <img src="/images/whatsapp.png" alt="whatsapp">
                <p>Tentang kami</p>
                <p>Layanan Multidana</p>
                <p>Jaringan</p>
                <p>Kontak</p>
                <img class="img-footer-1" src="/images/instagram.png" alt="instagram">
                <img class="img-footer-2" src="/images/twitter.png" alt="twitter">
            </div>
        </div>
    </div>
    {{-- End Jumbotron 3 --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
