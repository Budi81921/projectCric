<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCAREER</title>
  <link href="/css-bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="/css/register.css" rel="stylesheet">
  <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
  <script src="/js-bootstrap/validation.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

  @include('layout.navbar')
  <!-- Section -->
  <div class="card-register">
    <div class="text1">
      <h1>Yuk buat profilmu sebagai Perusahaan!</h1>
      <h4>Daftar dengan email terverifikasi</h4>
    </div>

    <div class="box-register">
      <form class="form-register" method="POST" action="/registrasi/perusahaan/create">
        @csrf
        <div class="mb-3">
          <label for="fullName" class="form-label">Nama Perusahaan</label>
          <input name="fullName"type="text" class="form-control" id="fullName" placeholder="Nama Perusahaan">
        
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
          Sudah mempunyai akun? <a href="/" class="text-primary">Masuk</a>
        </p>
        <p class="register-company">
          <a href="/registrationCandidate" class="text-primary">Daftar sebagai Candidate</a>
        </p>
      </div>
    </div>
    

  </div>

</body>

</html>