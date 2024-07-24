
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCAREER</title>
  <link href="/css-bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/Layoutcss/navbar.css" rel="stylesheet">
  <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
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
            <a class="nav-link" href="/listPerusahaan">Perusahaan</a>
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
                    <i class="bi bi-person-fill"></i>
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
          <a class="nav-link" href="/listPerusahaanNonLogin">Perusahaan</a>
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
          <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">MASUK</button>

          <!-- POP UP LOGIN-->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header align-items-center">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          <h3 class="modal-title" id="exampleModalLabel1">MASUK</h3>
                          <p>PELAMAR |<a data-bs-toggle="modal" data-bs-target="#exampleModal2" class="text-primary" style="padding-left: 5px;">PERUSAHAAN</a></p>
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

          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header align-items-center">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h3 class="modal-title" id="exampleModalLabel1">MASUK</h3>
                        <p>PELAMAR |<a href="#" class="text-primary" style="padding-left: 5px;">PERUSAHAAN</a></p>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/login/perusahaan" onsubmit="">
                            @csrf
                            <!-- Email input -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input name="email2" type="email" class="form-control @error('email2') is-invalid @enderror" id="exampleFormControlInput1" value="{{ old('email2') }}">
                                @error('email2')
                                  <div class="invalid-feedback">{{ $message }}</div>
                                @enderror 
                            </div>
                            <!-- password input -->
                            <div class="mb-3">
                                <label for="inputPassword1" class="form-label">Password</label>
                                <input name="password2" type="password" id="inputPassword1" class="form-control @error('password2') is-invalid @enderror">
                                @error('password2')
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
          <!-- END POP UP LOGIN -->




        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- END NAVIGASI BAR -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js-bootstrap/popper.min.js"></script>

@endguest


