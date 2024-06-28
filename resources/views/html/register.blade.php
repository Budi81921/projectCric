<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCAREER</title>
  <link href="css-bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/register.css" rel="stylesheet">
  <script src="js-bootstrap/bootstrap.bundle.min.js"></script>
  <script src="js-bootstrap/validation.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

  <!-- NAVIGASI BAR -->
  <nav class="navbar navbar-expand-lg" id="myNavbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="../img/logo.png" alt="logo" class="navbar-logo" width="60px">UCareer</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../html/n_lowongan.html">Lowongan Kerja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Perusahaan</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tentang Kami
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">UAI</a></li>
              <li><a class="dropdown-item" href="#">CRIC DSFE UAI</a></li>
            </ul>
          </li>
        </ul>

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../html/register.html">Daftar</a>
          </li>
          <li class="login-button">
            <button class="btn btn-outline-warning" href="#">MASUK</button>
          </li>
        </ul>
        </form>
      </div>
    </div>
  </nav>
  <!-- END NAVIGASI BAR -->

  <!-- Section -->
  <div class="card-register">
    <div class="text1">
      <h1>Yuk buat profilmu sebagai Pelamar!</h1>
      <h4>Daftar dengan email terverifikasi</h4>
    </div>

    <div class="box-register">
      <form class="form-register" method="POST" action="/registrationCandidate">
        @csrf
        <div class="mb-3">
          <label for="fullName" class="form-label">Nama Lengkap</label>
          <input name="fullName"type="text" class="form-control" id="fullName" placeholder="Nama lengkap">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input name ="email"type="email" class="form-control" id="email" placeholder="name@example.com">
        
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input name="password"type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock">
          <div id="passwordHelpBlock" class="form-text">
            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
          </div>
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
          <input name="confirmPassword" type="password" id="confirmPassword" class="form-control" aria-describedby="passwordHelpBlock">
        
        </div>
        <div class="mb-3">
          <button type="submit" class="btn-register" onclick="validatePassword()">DAFTAR</button>
        </div>
      </form>

      <div class="shortcut">
        <p class="card-text" style="transform: rotate(0);">
          Sudah mempunyai akun? <a href="#" class="text-primary">Masuk</a>
        </p>
        <p class="register-company">
          <a href="#" class="text-primary">Daftar sebagai Perusahaan</a>
        </p>
      </div>
    </div>
    

  </div>

</body>

</html>