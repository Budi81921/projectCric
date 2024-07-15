
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCAREER</title>
  <link href="/css-bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="/css-bootstrap/bootstrap.min.css">
  <link href="/Layoutcss/navbar.css" rel="stylesheet">
  <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
  <script src="/js-bootstrap/popper.min.js"></script>
  <script src="/js-bootstrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

@auth()
  <!-- NAVIGASI BAR -->
  <nav class="navbar navbar-expand-lg" id="myNavbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home">
        <img src="/img/logo.png" alt="logo" class="navbar-logo">UCareer</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/lowongan">Lowongan Kerja</a>
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
          <div class="navbar-nav">
            <div class="wishlist">
              <a href="/wishlist"><i class="bi bi-bookmark-fill"></i></a>
            </div>
            <div class="akun">
                <a href="/profile">
                  @if(Auth::user()->candidate->fotoProfilCandidate === null)
                    <img src="../IMAGE/profil.png" alt="profil">
                  @else
                    <div class="profil-navbar"><img src="{{ asset('storage/userCandidate/' . Auth::user()->candidate->id . '/fotoProfileCandidate/' . Auth::user()->candidate->fotoProfilCandidate) }}" alt="profil"></div>
                  @endif
                    <h6>{{ Auth::user()->nama_lengkap }}</h6>
                </a>
            </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- END NAVIGASI BAR -->
@endauth

@guest
<nav class="navbar navbar-expand-lg" id="myNavbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="/img/logo.png" alt="logo" class="navbar-logo" width="60px">UCareer</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/lowongan">Lowongan Kerja</a>
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
          <a class="nav-link" href="/registrationCandidate">Daftar</a>
        </li>
        <li class="login-button">
          <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">MASUK</button>

          <!-- POP UP LOGIN-->
          <div class="modal fade" id="exampleModalToggle" tabindex="-1" aria-labelledby="exampleModalToggleLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header align-items-center">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          <h3 class="modal-title" id="exampleModalLabel1">MASUK</h3>
                          <p>
                            <button data-bs-toggle="modal">PELAMAR</button>|
                            <button class="text-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" style="padding-left: 5px;">PERUSAHAAN</button>
                          </p>
                      </div>
                      <div class="modal-body">
                          <form method="POST" action="/loginCandidate" onsubmit="return validatePassword1()">
                              @csrf
                              <!-- Email input -->
                              <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Email</label>
                                  <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" value="{{ old('email') }}">
                                  @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror 
                              </div>
                              <!-- password input -->
                              <div class="mb-3">
                                  <label for="inputPassword1" class="form-label">Password</label>
                                  <input name="password" type="password" id="inputPassword1" class="form-control @error('password') is-invalid @enderror">
                                  @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                                </div>
                              <button type="submit" class="btn btn-primary">MASUK</button>
                          </form>
                          <p>Apakah anda belum mempunyai akun?<a href="../html/register.html" class="text-primary">Daftar di sini</a></p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="modal fade" id="exampleModalToggle2" tabindex="-1" aria-labelledby="exampleModalToggleLabel2" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header align-items-center">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h3 class="modal-title" id="exampleModalLabel2">MASUK</h3>
                        <p>
                          <button class="text-primary" data-bs-toggle="modal" data-bs-target="#exampleModalToggle" >PELAMAR</button>|
                          <button style="padding-left: 5px;" data-bs-toggle="modal">PERUSAHAAN</button>
                        </p>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/login/company" onsubmit="return validatePassword2()">
                            @csrf
                            <!-- Email input -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label">Email</label>
                                <input name="email2" type="email" class="form-control" id="exampleFormControlInput2">
                            </div>
                            <!-- password input -->
                            <div class="mb-3">
                                <label for="inputPassword2" class="form-label">Password</label>
                                <input name ="password2" type="password" id="inputPassword2" class="form-control">
                                <div class="error-message" id="password-error-message2"></div>
                            </div>
                            <button type="submit" class="btn btn-primary">MASUK</button>
                        </form>
                        <p>Apakah anda belum mempunyai akun?<a href="../html/register.html" class="text-primary">Daftar di sini</a></p>
                    </div>
                </div>
            </div>
          </div>

          <script>
            function validatePassword1() {
                const passwordInput = document.getElementById('inputPassword1').value;
               
        
                if (passwordInput !== correctPassword) {
                    const errorMessage = document.getElementById('password-error-message1');
                    errorMessage.textContent = 'Password yang dimasukkan salah. Silakan coba lagi.';
                    document.getElementById('inputPassword1').classList.add('is-invalid');
                    return false; // Mencegah form dari submit
                } else {
                    const errorMessage = document.getElementById('password-error-message1');
                    errorMessage.textContent = '';
                    document.getElementById('inputPassword1').classList.remove('is-invalid');
                    alert('Login berhasil!');
                    return true; // Izinkan form untuk submit
                }
            }
        
            function validatePassword2() {
                const passwordInput = document.getElementById('inputPassword2').value;
        
                if (passwordInput !== correctPassword) {
                    const errorMessage = document.getElementById('password-error-message2');
                    errorMessage.textContent = 'Password yang dimasukkan salah. Silakan coba lagi.';
                    document.getElementById('inputPassword2').classList.add('is-invalid');
                    return false; // Mencegah form dari submit
                } else {
                    const errorMessage = document.getElementById('password-error-message2');
                    errorMessage.textContent = '';
                    document.getElementById('inputPassword2').classList.remove('is-invalid');
                    alert('Login berhasil!');
                    return true; // Izinkan form untuk submit
                }
            }
        </script>
          <!-- END POP UP LOGIN -->
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- END NAVIGASI BAR -->

@endguest


