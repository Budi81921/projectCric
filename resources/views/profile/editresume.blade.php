<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pelamar - Edit Resume</title>
    <link rel="stylesheet" href="/cssBiodataKandidat/profilpelamar-editresume.css">
    <link rel="stylesheet" href="../css-bootstrap/bootstrap.css">
    <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  
 <!-- NAVIGASI BAR -->
  @include('layout.navbar')

  @include('layout.sidebarprofilecandidate')

    <!-- EDIT RESUME-->
      <div class="resume">
        <div class="judul">
          <h3>Resume</h3>
        </div>
        <form id="resumeForm" method="POST" action="/profile/resume/update" enctype="multipart/form-data"> <!--INI FORM BUAT ISI DATA-->
          @csrf
          <div class="mb-3">
            <label for="validationTextarea" class="form-label">Deskripsi Diri</label>
            <textarea  name="deskripsi" class="form-control" id="validationTextarea" required>{{ $candidateProfile->deskripsi }}</textarea>
            <div class="invalid-feedback">
              Masukkan Deskripsi Diri Anda.
            </div>
          </div>
          <div class="mb-3">
            <label for="formFileMultiple" class="form-label">CV : {{ $candidateProfile->cv }}</label>
            <input value="{{ $candidateProfile->cv }}"name="cv" type="file" class="form-control" id="fileInput" aria-label="file example" required>
            <div class="invalid-feedback">Mohon masukan file yang sesuai.</div>
          </div>
          <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Portfolio : {{ $candidateProfile->portofolio }}</label>
            <input value="{{ $candidateProfile->portofolio }}" name="portofolio" type="file" class="form-control" id="fileInput" aaria-label="file example" required>
            <div class="invalid-feedback">Mohon masukan file yang sesuai.</div>
          </div>
          <div class="simpan">
            <button type="submit" class="btn btn-primary" id="button">SIMPAN</button> <!--INI BUTTON SIMPAN YAA-->
          </div>
        </form>
      </div>
    </div>
  <!-- END EDIT RESUME-->
  
  <!-- FOOTER -->
  @include('layout.footer')
  <!-- END FOOTER -->

  <!--SCRIPT LOGOUT-->
  <script>
    document.getElementById('confirmLogout').addEventListener('click', function() {
        window.location.href = "#";
    });
  </script>
  <!-- END SCRIPT LOGOUT-->

</body>
</html>