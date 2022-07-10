<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multidana</title>
    <link rel="stylesheet" href="css/style.css">
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
                  <li><a class="dropdown-item" href="/voucher-games">Voucher Game</a></li>
                  <li><a class="dropdown-item" href="/produk-multibiller">Produk Multibiller</a></li>
                  <li><a class="dropdown-item" href="/topup-e-money">Top Up E-Money</a></li>
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

</body>
</html>
