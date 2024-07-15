<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan - Profil</title>
    <link rel="stylesheet" href="/companycss/company-profil.css">
    <link rel="stylesheet" href="/css-bootstrap/bootstrap.css">
    <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  
  <!--PEMISAH SIDEBAR DAN NAVBAR-->
  <div class="profil-view">
      <div class="sidebar">
        <div class="logo-brand">
          <img src="/img/logo_circ-removebg-preview.png" alt="logo" width="45px">
          <span class="text-ucareer">UCareer</span>
        </div>
        <div class="option-sidebar">
          <nav class="nav flex-column">
            <a class="nav-link active" id="opsi" aria-current="page"  href="../HTML/company-profil.html"><i class="bi bi-person-circle"></i>Profil</a>
            <a class="nav-link" id="opsi" href="#"><i class="bi bi-bag-fill"></i>Lowongan</a>
            <a class="nav-link" id="opsi" href="../HTML/company-pelamar.html"><i class="bi bi-clipboard2-check-fill"></i>Pelamar</a>
            <a class="nav-link" id="opsi" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="bi bi-box-arrow-right"></i>Log out</a>
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
                        <a href="{{ route('company.logout') }}"  class="btn btn-danger" id="confirmLogout">Logout</a>
                    </div>
                </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    
    <div class="right-view">
      <div class="background">
          <img src="/img/background-company.jpg" alt="background">
          <div class="content-background">
            <div class="jargon">
                <h4>Find the Right Candidates for your Business</h4>
                <p>Your success comes from Recruitment!</p>
            </div>
            <div class="company-akun">
                <div class="icon-company">
                    <i class="bi bi-buildings-fill"></i>
                </div>
                <div class="name-of-company">
                    <p>CRIC DSFE</p>
                </div>
            </div>
          </div>
      </div>
      <div class="biodata-company">
        <h5>Profil</h5>
        <div class="biodata">
          <div class="container mt-5" id="foto-perusahaan">
            <div class="cover-container">
                <!-- Gambar Cover -->
                <img id="cover-image" src="cover-placeholder.jpg" alt="Background">
                <input type="file" id="cover-input" accept="image/*" onchange="loadCoverImage(event)">
                <button class="btn btn-sm btn-outline-primary edit-cover-btn" id="button-edit" onclick="document.getElementById('cover-input').click()">Edit Cover</button>
                <!-- Gambar Profil -->
                <div class="profile-pic-container">
                    <img id="profile-image" src="profile-placeholder.jpg" alt="Foto Profil" class="foto-profil">
                    <input type="file" id="profile-input" accept="image/*" onchange="loadProfileImage(event)">
                    <button class="btn btn-sm btn-outline-primary edit-photo-btn" id="button-edit"
                     onclick="document.getElementById('profile-input').click()">Edit Foto</button>
                </div>
              </div>
          </div>
          <div class="isi-biodata">
            <form>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control" id="validationDefault01" required>
              </div>
              <div class="mb-3">
                <label for="validationTextarea" class="form-label">Deskripsi Perusahaan</label>
                <textarea class="form-control" id="validationTextarea" required></textarea>
                <div class="invalid-feedback">
                  Masukkan Deskripsi Perusahaan.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="validationDefault01" aria-describedby="emailHelp"required>
              </div>
              <div class="mb-3">
                <label for="phoneNumber" class="form-label">Nomor Handphone</label>
                <input type="tel" class="form-control" id="phoneNumber" pattern="[0-9]{10,15}" required>
              </div>
              <div class="mb-3">
                <label for="tahunInput" class="form-label">Tahun Berdiri</label>
                <input type="number" class="form-control" id="tahunInput" name="tahun" min="1900" max="2100" required>
              </div>
              <div class="mb-3">
                <label for="linkInput" class="form-label">URL Perusahaan</label>
                <input type="url" class="form-control" id="linkInput" name="link" required>
              </div>
              <div class="mb-3">
                <label for="validationTextarea" class="form-label">Alamat Detail</label>
                <textarea class="form-control" id="validationTextarea" required></textarea>
                <div class="invalid-feedback">
                  Masukkan Alamat Perusahaan.
                </div>
              </div>
              <div class="mb-3">
                <label for="validationTextarea" class="form-label">Provinsi</label>
                <select class="form-select" required aria-label="select example">
                  <option value="">Pilih Provinsi</option>
                  <option value="1">Aceh</option>
                  <option value="2">DKI Jakarta</option>
                  <option value="3">Sumatera Barat</option>
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
              </div>
              <div class="mb-3">
                <label for="validationTextarea" class="form-label">Kabupaten/Kota</label>
                <select class="form-select" required aria-label="select example">
                  <option value="">Pilih Kabupaten/Kota</option>
                  <option value="1">Aceh</option>
                  <option value="2">DKI Jakarta</option>
                  <option value="3">Sumatera Barat</option>
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
              </div>
              <div class="mb-3">
                <label for="validationTextarea" class="form-label">Kecamatan</label>
                <select class="form-select" required aria-label="select example">
                  <option value="">Pilih Kecamatan</option>
                  <option value="1">Aceh</option>
                  <option value="2">DKI Jakarta</option>
                  <option value="3">Sumatera Barat</option>
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
              </div>
              <div class="mb-3">
                <label for="validationTextarea" class="form-label">Kelurahan</label>
                <select class="form-select" required aria-label="select example">
                  <option value="">Pilih Provinsi</option>
                  <option value="1">Aceh</option>
                  <option value="2">DKI Jakarta</option>
                  <option value="3">Sumatera Barat</option>
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
              </div>
              <div class="mb-3">
                <label for="phoneNumber" class="form-label">Kode Pos</label>
                <input type="tel" class="form-control" id="phoneNumber" pattern="[0-9]{5}" required>
              </div>
              <div class="simpan">
                <button type="submit" class="btn btn-primary" id="button">SIMPAN</button> <!--INI BUTTON SIMPAN YAA-->
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
  </div>
  
  <!-- start Footer -->
  @include('layout.footer')
  <!-- End Footer -->

  <script>
    function loadCoverImage(event) {
        const coverImage = document.getElementById('cover-image');
        coverImage.src = URL.createObjectURL(event.target.files[0]);
        coverImage.onload = function() {
            URL.revokeObjectURL(coverImage.src); // release memory
        }
    }

    function loadProfileImage(event) {
        const profileImage = document.getElementById('profile-image');
        profileImage.src = URL.createObjectURL(event.target.files[0]);
        profileImage.onload = function() {
            URL.revokeObjectURL(profileImage.src); // release memory
        }
    }
</script>
</body>
</html>