
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCAREER</title>
  <link href="/css-bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/Layoutcss/navbar.css" rel="stylesheet">
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
                    <i class="bi bi-person-fill"></i>
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
          <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header align-items-center">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          <h3 class="modal-title" id="exampleModalToggleLabel">MASUK</h3>
                          <p><button>PELAMAR</button> |
                            <button class="text-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" style="padding-left: 5px;">PERUSAHAAN</button>
                          </p>
                      </div>
                      <div class="modal-body">
                          <form method="POST" action="/loginCandidate">
                              @csrf
                              <!-- Email input -->
                              <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Email</label>
                                  <input name="email" type="email" class="form-control" id="exampleFormControlInput1">
                              </div>
                              <!-- password input -->
                              <div class="mb-3">
                                  <label for="inputPassword" class="form-label">Password</label>
                                  <input name ="password" type="password" id="inputPassword" class="form-control">
                                  <div class="error-message" id="password-error-message"></div>
                              </div>
                              <button type="submit" class="btn btn-primary">MASUK</button>

                              <script>
                                 function validatePassword() {
                                      // Ambil nilai password dari input
                                      const passwordInput = document.getElementById('inputPassword').value;

                                      // Simpan password yang benar (contoh)
                                      const correctPassword = 'password123'; // Seharusnya disimpan di backend atau tempat penyimpanan yang aman

                                      // Periksa apakah password yang dimasukkan sesuai atau tidak
                                      if (passwordInput !== correctPassword) {
                                          const errorMessage = document.getElementById('password-error-message');
                                          errorMessage.textContent = 'Password yang dimasukkan salah. Silakan coba lagi.';
                                          document.getElementById('inputPassword').classList.add('is-invalid');
                                      } else {
                                          // Bersihkan pesan kesalahan dan hapus kelas is-invalid jika password benar
                                          const errorMessage = document.getElementById('password-error-message');
                                          errorMessage.textContent = '';
                                          document.getElementById('inputPassword').classList.remove('is-invalid');

                                          // Lakukan aksi login jika password benar
                                          alert('Login berhasil!');
                                          // Di sini Anda bisa redirect ke halaman selanjutnya atau melakukan aksi yang sesuai
                                      }
                                  }
                              </script>
                          </form>
                          <p>Apakah anda belum mempunyai akun?<a href="../html/register.html" class="text-primary">Daftar di sini</a></p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header align-items-center">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          <h3 class="modal-title" id="exampleModalToggleLabel2">MASUK</h3>
                          <p><button class="text-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">PELAMAR</button> |
                            <button style="padding-left: 5px;">PERUSAHAAN</button>
                          </p>
                      </div>
                      <div class="modal-body">
                          <form method="POST" action="/loginCompany">
                              @csrf
                              <!-- Email input -->
                              <div class="mb-3">
                                  <label for="exampleFormControlInput2" class="form-label">Email</label>
                                  <input name="email" type="email" class="form-control" id="exampleFormControlInput2">
                              </div>
                              <!-- password input -->
                              <div class="mb-3">
                                  <label for="inputPassword2" class="form-label">Password</label>
                                  <input name ="password" type="password" id="inputPassword2" class="form-control">
                                  <div class="error-message" id="password-error-message2"></div>
                              </div>
                              <button type="submit" class="btn btn-primary">MASUK</button>

                              <script>
                                 function validatePassword2() {
                                      // Ambil nilai password dari input
                                      const passwordInput = document.getElementById('inputPassword2').value;

                                      // Simpan password yang benar (contoh)
                                      const correctPassword = 'password123'; // Seharusnya disimpan di backend atau tempat penyimpanan yang aman

                                      // Periksa apakah password yang dimasukkan sesuai atau tidak
                                      if (passwordInput !== correctPassword) {
                                          const errorMessage = document.getElementById('password-error-message2');
                                          errorMessage.textContent = 'Password yang dimasukkan salah. Silakan coba lagi.';
                                          document.getElementById('inputPassword2').classList.add('is-invalid');
                                      } else {
                                          // Bersihkan pesan kesalahan dan hapus kelas is-invalid jika password benar
                                          const errorMessage = document.getElementById('password-error-message2');
                                          errorMessage.textContent = '';
                                          document.getElementById('inputPassword2').classList.remove('is-invalid');

                                          // Lakukan aksi login jika password benar
                                          alert('Login berhasil!');
                                          // Di sini Anda bisa redirect ke halaman selanjutnya atau melakukan aksi yang sesuai
                                      }
                                  }
                              </script>
                              <!-- JavaScript untuk memastikan modal berpindah dengan benar -->
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


