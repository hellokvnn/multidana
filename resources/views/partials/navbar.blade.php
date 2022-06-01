<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multidana | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
