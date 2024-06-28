<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCAREER</title>
  <link href="/css-bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="/css-bootstrap/bootstrap.min.css">
  <link href="/css/n_home.css" rel="stylesheet">
  <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
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
                            <p>PELAMAR |<a href="#" class="text-primary" style="padding-left: 5px;">PERUSAHAAN</a></p>
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
            <!-- END POP UP LOGIN -->
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END NAVIGASI BAR -->

  <!-- Section1 -->
  <div id="section1" class="carousel1">
    <div class="carousel-item active">
      <img src="../img/carousel.png" class="d-block w-100" alt="Section" height="200px">

      <!-- Formulir Pencarian -->
      <form>
        <div class="form d-flex" role="search" id="myCarousel"
          style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; display: flex; align-items: center; justify-content: center;">
          <input class="form-control" type="search" placeholder="Cari Pekerjaan..." aria-label="Cari Pekerjaan...">
          <select class="form-select" aria-label="Default select example">
            <option selected>Kategori</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <select class="form-select" aria-label="Default select example">
            <option selected>Area/Kota</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>

          <button class="btn btn-outline-success" type="submit" href="#">Cari</button>
        </div>
      </form>
      <!-- Akhir Formulir Pencarian -->
    </div>
  </div>
  <!-- End Section1 -->

  <!-- Section2 -->
  <div id="section2" class="carousel2">
    <div class="copywriting">
      <h1 class="text">Explore dan temukan pekerjaan yang cocok untukmu!</h1>
    </div>

    <div class="container-sm">
      <div class="category d-flex justify-content-center flex-wrap">
        <button type="button" class="btn" href="#">Kategori 1</button>
        <button type="button" class="btn" href="#">Kategori 2</button>
        <button type="button" class="btn" href="#">Kategori 3</button>
        <button type="button" class="btn" href="#">Kategori 4</button>
        <button type="button" class="btn" href="#">Kategori 5</button>
      </div>
      <div class="category d-flex justify-content-center flex-wrap">
        <button type="button" class="btn" href="#">Kategori 6</button>
        <button type="button" class="btn" href="#">Kategori 7</button>
        <button type="button" class="btn" href="#">Kategori 8</button>
        <button type="button" class="btn" href="#">Kategori 9</button>
        <button type="button" class="btn" href="#">Kategori 10</button>
      </div>
      <div class="more-info d-flex justify-content-center">
        <button type="button" class="btn btn-link" href="#">tampilkan lebih banyak</button>
      </div>
    </div>
  </div>
  <!-- End Section2 -->

  <!-- Section 3 -->
  <div id="section3" class="carousel3">
    <div class="box-company">
      <div class="copywriting">
        <h1 class="text1">Top Perusahaan yang merekrut</h1>
      </div>

      <div class="container-sm">
        <div class="company d-flex justify-content-center flex-wrap">
          <button type="button" class="btn" href="#">1</button>
          <button type="button" class="btn" href="#">2</button>
          <button type="button" class="btn" href="#">3</button>
          <button type="button" class="btn" href="#">4</button>
          <button type="button" class="btn" href="#">5</button>
        </div>
        <div class="company d-flex justify-content-center flex-wrap">
          <button type="button" class="btn" href="#">6</button>
          <button type="button" class="btn" href="#">7</button>
          <button type="button" class="btn" href="#">8</button>
          <button type="button" class="btn" href="#">9</button>
          <button type="button" class="btn" href="#">10</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Section 3 -->

  <!-- Section 4 -->
  <div id="section4" class="carousel4">
    <div class="copywriting">
      <h1 class="text2">Tentukan dan Rencanakan karier suksesmu bersama UCareer!</h1>
    </div>
    <div class="container-sm">
      <div class="start d-flex justify-content-center flex-wrap">
        <button type="button" class="btn" href="#">Start</button>
      </div>
    </div>
  </div>
  <!-- End Section 4 -->

  <!-- Footer -->
  <div class="footer">
    <div class="box1">

      <!-- Information -->
      <div class="information">
        <div class="part1">
          <h4>CRIC DSFE UAI</h4>
          <p><a href="#">Lowongan Kerja</a></p>
          <p><a href="#">Perusahaan</a></p>
          <p><a href="#">Tentang Kami</a></p>
          <p><a href="#">Profil</a></p>
        </div>

        <div class="part2">
          <h4>REACH US!</h4>
          <div class="contact-info">
            <i class="bi bi-geo-alt-fill"></i>
            <p>Ruang CRIC, lantai 2 Universitas Al-Azhar Indonesia </p>
          </div>
          <div class="contact-info">
            <i class="bi bi-envelope-fill"></i>
            <p>cric-dsfe@uai.ac.id</p>
          </div>
          <div class="contact-info">
            <i class="bi bi-telephone-fill"></i>
            <p>+62 8788731 6662</p>
          </div>
        </div>

        <div class="part3">
          <a href="https://www.linkedin.com/company/cric-dsfe/" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="https://www.instagram.com/cric.dsfe.uai/" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-instagram"></i>
          </a>
        </div>
      </div>
      <div class="box2"></div>

      <!-- Horizontal Line -->
      <div class="horizontal-line"></div>
          
      <!-- Image and Watermark -->
      <div class="footer-bottom">
        <div class="footer-image">
            <img src="../img/logo.png" alt="logo">
            <span class="ucareer-text">UCareer</span>
        </div>
        <div class="watermark">
            <p>&copy; 2024 CRIC DSFE UAI. All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer -->

</body>

</html>