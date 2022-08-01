{{-- Navbar --}}
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="/images/logo.png" alt="logo" width="223" height="54" id="multidana-logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item" id="section1">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}"  href="/#about">About</a>
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
              <li><a class="dropdown-item" href="/tiket-kereta">Tiket Kereta</a></li>
            </ul>
          </li>
          <li class="nav-item" id="section2">
            <a class="nav-link {{ ($title === "Download App") ? 'active' : '' }}" href="/#download-app">Download App</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link {{ ($title === "Pulsa H2H") ? 'active' : '' }} dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
          <li class="nav-item" id="section3">
            <a class="nav-link {{ ($title === "Kontak Kami") ? 'active' : '' }}" href="/#kontak-kami">Kontak Kami</a>
          </li>
        </ul>
      </div>
  </div>
</nav>
{{-- End Navbar --}}


