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
  @include('layout.navbar')

  <!-- sidebar -->
  @include('layout.sidebarprofilecandidate')

  <!-- EDIT BIODATA-->
  <div class="biodata">
    <div class="judul">
      <h3>Biodata</h3>
    </div>
    <form id="resumeForm">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="validationDefault01" value="{{ $id->nama_lengkap}}" required>
      </div>
      <div class="mb-3">
        <label for="tanggalInput" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="validationDefault01" name="tanggal"value="{{ $candidateProfile->tangal_lahir}}" required>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="validationDefault01" value="{{ $candidateProfile->alamat}}" required>
      </div>
      <div class="mb-3">
        <label for="phoneNumber" class="form-label">Nomor Handphone</label>
        <input type="tel" class="form-control" id="phoneNumber" pattern="[0-9]{10,15}" value="{{ $candidateProfile->nomor_handphone }}" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="validationDefault01" value="{{ $id->email }}" aria-describedby="emailHelp"required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
      <div class="jeniskelamin">
        <div class="form-check">
          <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" value="Pria" {{ $candidateProfile->gender == 'pria' ? 'checked' : '' }} required>
          <label class="form-check-label" for="validationFormCheck2">Pria</label>
        </div>
        <div class="form-check mb-3">
          <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" value="Wanita" {{ $candidateProfile->gender == 'wanita' ? 'checked' : '' }} required>
          <label class="form-check-label" for="validationFormCheck3">Wanita</label>
          <div class="invalid-feedback">Pilih Jenis Kelamin Anda</div>
        </div>
     </div>
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Universitas</label>
      <input type="text" class="form-control" id="validationDefault01" value="{{ $candidateProfile->universitas }}" required>
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Gelar</label>
      <input type="text" class="form-control" id="validationDefault01" value="{{ $candidateProfile->gelar }}" required>
    </div>
    <div class="simpan">
      <button type="submit" class="btn btn-primary" id="button">SIMPAN</button>
    </div>
    </form>
  </div>
</div>
  <!-- EDIT BIODATA-->

 @include('layout.footer')

</body>
</html>