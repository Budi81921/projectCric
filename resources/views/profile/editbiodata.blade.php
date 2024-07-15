<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pelamar - Edit Biodata</title>
    <link rel="stylesheet" href="/cssBiodataKandidat/profilpelamar-editbiodata.css">
    <link rel="stylesheet" href="/css-bootstrap/bootstrap.css">
    <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

  <!-- Success Modal -->
  
  <!-- END SUCCESS DAN ERROR -->
  <!-- NAVIGASI BAR -->
  @include("layout.navbar")
  <!-- END NAVIGASI BAR -->


  <!--SIDEBAR-->
  @include('layout.sidebarprofilecandidate')
  <!--END SIDEBAR-->

  <div class="biodata">
    <div class="judul">
      <h3>Biodata</h3>
    </div>
    
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @elseif(session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif

    
      
    <form id="resumeForm" method="POST" action="/profile/update" enctype="multipart/form-data">
      @csrf
      <!-- EDIT PROFIL -->
      {{-- <div class="foto-profil">
        <div class="profile-pic-container">
          <img id="profile-image" src="data:image/png;base64,{{ chunk_split(base64_encode($candidateProfile->fotoProfilCandidate)) }}"  class="foto-profil">
          <input name="fotoProfileCandidate" type="file" id="profile-input">
          <label for="formFileMultiple" class="form-label">Foto Profil</label>
          <input type="file" class="form-control" id="fileInput" aria-label="file example" required>
        </div>
        <div class="button-editprofil">
          <button class="btn btn-sm btn-outline-primary edit-photo-btn" id="button-edit" onclick="document.getElementById('profile-input').click()">Edit Foto</button>
       </div>
      </div> --}}
      <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Foto Profil</label>
        <input name="fotoProfileCandidate" type="file" class="form-control @error('fotoProfileCandidate') is-invalid @enderror" id="fileInput" aria-label="file example" >
        @error('fotoProfileCandidate')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
  
    <!-- END EDIT PROFIL -->
      <!-- END EDIT PROFIL -->


      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="validationDefault01" name="nama_lengkap" value="{{ $id->nama_lengkap }}" required>
        @error('nama_lengkap')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="tanggalInput" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="validationDefault01" name="tanggal_lahir" value="{{  $candidateProfile->tanggal_lahir }}" required>
        @error('tanggal_lahir')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror </div>

      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Alamat</label>
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="validationDefault01" name="alamat" value="{{  $candidateProfile->alamat }}" required>
        @error('alamat')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror   </div>

      <div class="mb-3">
        <label for="phoneNumber" class="form-label">Nomor Handphone</label>
        <input type="tel" class="form-control @error('nomor_handphone') is-invalid @enderror" id="phoneNumber" pattern="[0-9]{10,15}" name="nomor_handphone" value="{{ $candidateProfile->nomor_handphone}}" required>
        @error('nomor_handphone')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror   </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="validationDefault01" aria-describedby="emailHelp" name="email" value="{{  $id->email }}" required>
        @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror  
      </div>

      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
        <div class="jeniskelamin">
          <div class="form-check">
            <input type="radio" class="form-check-input" value="Pria" {{ $candidateProfile->gender == 'pria' ? 'checked' : '' }} id="validationFormCheck2" name="checkbox" required>
            <label class="form-check-label" for="validationFormCheck2">Pria</label>
          </div>
          <div class="form-check mb-3">
            <input type="radio" class="form-check-input" value="Wanita" {{ $candidateProfile->gender == 'wanita' ? 'checked' : '' }} id="validationFormCheck3" name="checkbox" required>
            <label class="form-check-label" for="validationFormCheck3">Wanita</label>
            <div class="invalid-feedback">Pilih Jenis Kelamin Anda</div>
          </div>
        </div>
      </div>

    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Universitas</label>
      <input type="text" class="form-control @error('universitas') is-invalid @enderror" id="validationDefault01" name="universitas" value="{{ $candidateProfile->universitas }}" required>
      @error('universitas')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror  
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Gelar</label>
      <input type="text" class="form-control @error('') is-invalid @enderror" id="validationDefault01" name="gelar" value="{{ $candidateProfile->gelar }}" required>
      @error('gelar')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror  
    </div>

    <div class="simpan">
      <button type="submit" class="btn btn-primary" id="button" onclick="handleButtonClick()" >SIMPAN</button>
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
