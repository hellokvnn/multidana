<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multidana | Home</title>
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
          <div class="navbar-nav ms-auto">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}"  href="/about">About</a>
            <a class="nav-link {{ ($title === "Pulsa Retail") ? 'active' : '' }}" href="/pulsa-retail">Pulsa Retail</a>
            <a class="nav-link {{ ($title === "Download App") ? 'active' : '' }}" href="/download-app">Download App</a>
            <a class="nav-link {{ ($title === "Pulsa H2H") ? 'active' : '' }}" href="/pulsa-h2h">Pulsa H2H</a>
            <a class="nav-link {{ ($title === "Kontak Kami") ? 'active' : '' }}" href="/kontak-kami">Kontak Kami</a>
          </div>
        </div>
      </div>
    </nav>
    {{-- End Navbar --}}

</body>
</html>
