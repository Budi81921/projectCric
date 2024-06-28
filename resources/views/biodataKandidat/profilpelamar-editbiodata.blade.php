<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pelamar - Edit Biodata</title>
    <link rel="stylesheet" href="/cssBiodataKandidat/profilpelamar-editbiodata.css">
    <link rel="stylesheet" href="/css-bootstrap/bootstrap.css">
    <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  
  <!-- NAVIGASI BAR -->
  <nav class="navbar navbar-expand-lg" id="myNavbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="../IMAGE/logo_circ-removebg-preview.png" alt="logo" class="navbar-logo">UCareer</a>
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


  <!-- BIODATA SINGKAT-->
  <div class="profilpelamar">
    <div class="sidebarbiodata">
      <div class="biosingkat">
          <div class="profil">
            <ul>
              <li><i class="bi bi-person-circle"></i></li>
              <li class="nama">Alexandra</li>
            </ul>
          </div>
          <div class="kampus">
            <p>Universitas Al-Azhar Indonesia</p>
          </div>
      </div>
    <!-- END BIODATA SINGKAT-->
 
    <!--SIDEBAR-->
      <div class="sidebar">
        <nav class="nav flex-column">
          <a class="nav-link active" aria-current="page"  href="../HTML/profilpelamar-previewbiodata.html"><i class="bi bi-person-fill-gear"></i>Biodata</a>
          <a class="nav-link" href="../HTML/profilpelamar-previewresume.html"><i class="bi bi-person-vcard-fill"></i>Resume</a>
          <a class="nav-link" href="../HTML/profilpelamar-joblist.html"><i class="bi bi-clipboard-fill"></i>Job List</a>
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="bi bi-box-arrow-right"></i>Log out</a>
          <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah kamu yakin ingin keluar?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        
                        <a type="submit" class="btn btn-danger" href="{{ route('logout') }}" id="confirmLogout" >Logout</a>
                        
                    </div>
                </div>
            </div>
        </div>
        </nav>
      </div>
    </div> 
    <!--END SIDEBAR-->

  <!-- EDIT BIODATA-->
  <div class="biodata">
    <div class="judul">
      <h3>Biodata</h3>
    </div>
    <form id="resumeForm" method="POST" action="">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="validationDefault01" required>
      </div>
      <div class="mb-3">
        <label for="tanggalInput" class="form-label">Tanggal Lahir</label>
        <input name='tanggal_lahir' type="date" class="form-control" id="validationDefault01" name="tanggal"  required>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Alamat</label>
        <input name='alamat' type="text" class="form-control" id="validationDefault01" required>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nomor Handphone</label>
        <input name='nomor_handphone'type="text" class="form-control" id="validationDefault01" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="validationDefault01" aria-describedby="emailHelp"required>
      </div>
      <div class="mb-3">
        <label name="gender"for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
      <div class="jeniskelamin">
        <div class="form-check">
          <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
          <label class="form-check-label" for="validationFormCheck2">Pria</label>
        </div>
        <div class="form-check mb-3">
          <input  type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
          <label class="form-check-label" for="validationFormCheck3">Wanita</label>
          <div class="invalid-feedback">Pilih Jenis Kelamin Anda</div>
        </div>
     </div>
    </div>
      <div class="simpan">
        <button type="submit" class="btn btn-primary">SIMPAN</button>
      </div>
    </form>
  </div>
</div>
  <!-- EDIT BIODATA-->

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

  <!--SCRIPT LOGOUT-->
  <script>
    document.getElementById('confirmLogout').addEventListener('click', function() {
        window.location.href = "#"; 
    });
  </script>
  <!--END SCRIPT LOGOUT-->

</body>
</html>