<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pelamar - Edit Biodata</title>
    <link rel="stylesheet" href="../cssBiodataKandidat/profilpelamar-editbiodata.css">
    <link rel="stylesheet" href="../css-bootstrap/bootstrap.css">
    <script src="../js-bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  <!-- NAVIGASI BAR -->
  @include("layout.navbar")
  <!-- END NAVIGASI BAR -->


  <!-- BIODATA SINGKAT-->
  <div class="profilpelamar">
    <div class="sidebarbiodata">
      <div class="biosingkat">
          <div class="profil">
            <ul>
              <li><i class="bi bi-person-circle"></i></li>
              <li class="nama">{{auth()->user()->nama_lengkap}}</li>
            </ul>
          </div>
          <div class="kampus">
            <p>Universitas Al-Azhar Indonesia</p>
          </div>
      </div>
    <!-- END BIODATA SINGKAT-->

    <!--SIDEBAR-->
    @include('layout.sidebarprofilecandidate')
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
    @include('layout.footer')
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
