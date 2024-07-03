<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan</title>
    <link rel="stylesheet" href="../CSS/perusahaandetail-regis.css">
    <link rel="stylesheet" href="../CSS BOOTSTRAP/bootstrap.css">
    <script src="../JS/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  
  <!-- NAVIGASI BAR -->
  <nav class="navbar navbar-expand-lg" id="myNavbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="/img/logo.png" alt="logo" class="navbar-logo">UCareer</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Lowongan Kerja</a>
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
              <a href="#"><i class="bi bi-bookmark-fill"></i></a>
            </div>
            <div class="akun">
              <li class="nav-item">
                <i class="bi bi-person-fill"></i>
                <a class="nav-link" href="../HTML/profilpelamar-previewbiodata.html">Alexandra</a>
              </li>
            </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- END NAVIGASI BAR -->

  <div class="detail-view">
  <!--PROFIL PERUSAHAAN  -->
    <div class="profil-company">
      <div class="background-company">
        <img src="../IMAGE/background.jpg" alt="background">
      </div>
      <div class="logo-profil">
        <div class="logo">
          <img src="../IMAGE/logo_circ-removebg-preview.png" alt="logo">
        </div>
        <div class="profil">
            <div class="nama">
              <h3>CRIC DSFE UAI</h3>
            </div>
            <div class="kota">
              <h4><i class="bi bi-geo-alt"></i>Jakarta Selatan</h4>
          </div>
        </div>
      </div>
      <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-primary btn-hover-slide active" id="button1" type="button">Tentang</button>
        <button class="btn btn-primary btn-hover-slide" id="button2" type="button">Lowongan</button>
      </div>
    </div>
    <div id="content" class="mt-3">
      <div class="card1">
        <div class="card">
            <div class="card-header" id="subjudul">
                Deskripsi
            </div>
            <div class="card-body" id="body">
                <p class="card-text">Data Science and Future Economy merupakan perusahaan yang bergerak di bidang Data.</p>
            </div>
        </div>
        <div class="card">
          <div class="card-header" id="subjudul">
              Alamat
          </div>
          <div class="card-body" id="body">
              <p class="card-text">Jl. Sisingamangaraja VI Kel.  Selong, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12110</p>
          </div>
        </div>
      </div>
      <div class="card2">
        <div class="card">
          <div class="card-header" id="subjudul">
              Informasi
          </div>
          <div class="card-body" id="body">
            <ul class="informasi-perusahaan">
              <li class="subinfo">
                <div class="isi1">Tahun Berdiri : </div>
                <div class="isi2"> 2022</div>
              </li>
              <li class="subinfo">
                <div class="isi1">Nomor Telpon : </div>
                <div class="isi2">021345212</div>
              </li>
              <li class="subinfo">
                <div class="isi1">Email : </div>
                <div class="isi2">cric-dsfe@uai.ac.id</div>
              </li>
              <div class="link-perusahaan"><a href="#">Website Perusahaan</a></div>
            </ul>  
          </div>
        </div>
      </div>
    </div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">25 Lowongan Kerja di CRIC DSFE UAI</li>
      </ol>
    </nav>
    <div class="job-box">
      <div class="btn-job">
          <div class="card-body">
              <div class="company-img">
                  <img src="../IMAGE/logo_circ-removebg-preview.png" id="img-company" alt="C" width="60px">
              </div>
              <div class="job-info">
                  <h5 class="job-title">Full Stack Developer</h5>
                  <h5 class="company-name" style="color: #1259a0">CRIC DSFE UAI</h5>
                  <p class="company-loc">Jakarta Selatan</p>
                  <hr>
                  <div class="info1">
                      <i class="bi bi-hourglass-split"></i>
                      <h6 class="job-type">Full Time</h6>
                  </div>
                  <div class="info2">
                      <i class="bi bi-buildings-fill"></i>
                      <h6 class="job-loc">Kerja di Kantor</h6>
                  </div>
                  <div class="apply-save">
                      <div class="btn-apply">
                          <a href="#" class="btn btn-primary-blue" id="apply">LAMAR</a>
                      </div>
                      <div class="bookmark" id="bookmarkIcon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="bi bi-bookmark"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
  </div>

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
            <img src="../IMAGE/logo_circ-removebg-preview.png" alt="logo">
            <span class="ucareer-text">UCareer</span>
        </div>
        <div class="watermark">
            <p>&copy; 2024 CRIC DSFE UAI. All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer -->
  <script>
    document.getElementById('button1').addEventListener('click', function() {
        document.getElementById('content').innerHTML = `
        <div class="card1">
          <div class="card">
              <div class="card-header" id="subjudul">
                  Deskripsi
              </div>
              <div class="card-body" id="body">
                  <p class="card-text">Data Science and Future Economy merupakan perusahaan yang bergerak di bidang Data.</p>
              </div>
          </div>
          <div class="card">
            <div class="card-header" id="subjudul">
                Alamat
            </div>
            <div class="card-body" id="body">
                <p class="card-text">Jl. Sisingamangaraja VI Kel.  Selong, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12110</p>
            </div>
          </div>
        </div>
        <div class="card2">
          <div class="card">
            <div class="card-header" id="subjudul">
                Informasi
            </div>
            <div class="card-body" id="body">
              <ul class="informasi-perusahaan">
                <li class="subinfo">
                  <div class="isi1">Tahun Berdiri : </div>
                  <div class="isi2"> 2022</div>
                </li>
                <li class="subinfo">
                  <div class="isi1">Nomor Telpon : </div>
                  <div class="isi2">021345212</div>
                </li>
                <li class="subinfo">
                  <div class="isi1">Email : </div>
                  <div class="isi2">cric-dsfe@uai.ac.id</div>
                </li>
                <div class="link-perusahaan"><a href="#">Website Perusahaan</a></div>
              </ul>  
            </div>
          </div>
        </div>
        `;
        setActiveButton('button1');
    });

    document.getElementById('button2').addEventListener('click', function() {
        document.getElementById('content').innerHTML = `
            <div class="card3">
                <div class="card">
                    <div class="card-header" id="subjudul">
                        Konten Baru
                    </div>
                    <div class="card-body">
                        <p class="card-text">Ini adalah konten baru yang muncul saat tombol kedua diklik.</p>
                    </div>
                </div>
            </div>
        `;
        setActiveButton('button2');
    });

    function setActiveButton(activeButtonId) {
      document.getElementById('button1').classList.remove('active');
      document.getElementById('button2').classList.remove('active');
      document.getElementById(activeButtonId).classList.add('active');
  }
  </script>
</body>
</html>