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
    @include('layout.company.sidebarprofilecompany')
    
    <div class="right-view">
      
      @include('layout.company.navbarcompany')

      <div class="biodata-company">
        <h5>Profil</h5>
        <div class="biodata">
          <div class="container mt-5" id="foto-perusahaan">
            <div class="cover-container">
                
              <!-- Gambar Cover -->
                <img id="cover-image" src="cover-placeholder.jpg" alt="Background">
                <input name="background_profil_company" type="file" id="cover-input" accept="image/*" onchange="loadCoverImage(event)">
                <button class="btn btn-sm btn-outline-primary edit-cover-btn" id="button-edit" onclick="document.getElementById('cover-input').click()">Edit Cover</button>
                
                <!-- Gambar Profil -->
                <div class="profile-pic-container">
                    <img id="profile-image" src="{{ asset('storage/userCandidate/' . Auth::user()->company->id . '/fotoProfileCompany/' . Auth::user()->company->foto_profil_company) }}" alt="Foto Profil" class="foto-profil">
                    <input name="foto_profil_company" type="file" id="profile-input" accept="image/*" onchange="loadProfileImage(event)">
                    <button class="btn btn-sm btn-outline-primary edit-photo-btn" id="button-edit"
                     onclick="document.getElementById('profile-input').click()">Edit Foto</button>
                </div>

              </div>
          </div>

          <div class="isi-biodata">
            <form method="POST" action="/company/profile/update">
              @csrf
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nama Perusahaan</label>
                <input  value ="{{ $id->nama_lengkap }}" name="nama_perusahaan" type="text" class="form-control" id="validationDefault01" required>
              </div>
              <div class="mb-3">
                <label for="validationTextarea" class="form-label">Deskripsi Perusahaan</label>
                <textarea  name="deskripsi_perusahaan" class="form-control" id="validationTextarea" required>{{ $companyProfile->deskripsi_perusahaan }}</textarea>
                <div class="invalid-feedback">
                  Masukkan Deskripsi Perusahaan.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input value="{{ $id->email }}"name="email" type="email" class="form-control" id="validationDefault01" aria-describedby="emailHelp"required>
              </div>
              <div class="mb-3">
                <label for="phoneNumber" class="form-label">Nomor Handphone</label>
                <input value="{{ $companyProfile->nomor_telepon }}" name="nomor_telepon" type="tel" class="form-control" id="phoneNumber" pattern="[0-9]{10,15}" required>
              </div>
              <div class="mb-3">
                <label for="tahunInput" class="form-label">Tahun Berdiri</label>
                <input value="{{ $companyProfile->tahun_berdiri}}" name="tahun_berdiri" type="number" class="form-control" id="tahunInput" name="tahun" min="1900" max="2100" required>
              </div>
              <div class="mb-3">
                <label for="linkInput" class="form-label">URL Perusahaan</label>
                <input value="{{ $companyProfile->url }}" name ="url_perusahaan" type="url" class="form-control" id="linkInput" name="link" required>
              </div>
              <div class="mb-3">
                <label for="validationTextarea" class="form-label">Alamat Detail</label>
                <textarea name="Alamat_detail" class="form-control" id="validationTextarea">{{ $detailAlamat->Alamat_detail }}</textarea>
                <div class="invalid-feedback">
                  Masukkan Alamat Perusahaan.
                </div>
              </div>

              {{-- untuk provinsi, kota, kecamatan kelurahan --}}
              <div class="mb-3">
                <label for="validationTextarea" class="form-label">Provinsi</label>
                <select class="form-select" required aria-label="select example" id="provinsi" name="provinsi">
                  @if($detailAlamat->provinsi === null)
                    <option>Pilih Provinsi</option>
                  @else
                    <option>{{ $detailAlamat->provinsi }}</option>
                  @endif

                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
              </div>
              <div class="mb-3">
                <label for="validationTextarea" class="form-label">Kabupaten/Kota</label>
                <select class="form-select" required aria-label="select example" id="kabupaten_kota" name="kabupaten_kota">
                  @if($detailAlamat->kota_kabupaten === null)
                    <option>Pilih Kabupaten/Kota</option>
                  @else
                    <option>{{ $detailAlamat->kota_kabupaten }}</option>
                  @endif
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
              </div>
              <div class="mb-3">
                <label for="validationTextarea" class="form-label">Kecamatan</label>
                <select class="form-select" required aria-label="select example" id="kecamatan" name="kecamatan">
                  @if($detailAlamat->kecamatan === null)
                    <option>Pilih Kecamatan</option>
                  @else
                    <option>{{ $detailAlamat->kecamatan }}</option>
                  @endif
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
              </div>
              <div class="mb-3">
                <label for="validationTextarea" class="form-label">Kelurahan</label>
                <select class="form-select" required aria-label="select example" id="kelurahan" name="kelurahan">
                  @if($detailAlamat->kelurahan === null)
                    <option>Pilih Kelurahan</option>
                  @else
                    <option>{{ $detailAlamat->kelurahan }}</option>
                  @endif
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
              </div>

              

              {{-- end untuk provinsi, kota, kecamatan kelurahan --}}

              <div class="mb-3">
                <label for="phoneNumber" class="form-label">Kode Pos</label>
                <input value="{{ $detailAlamat->kode_pos }}" name="kode_pos" type="tel" class="form-control" id="phoneNumber" pattern="[0-9]{5}">
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
    fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
        .then(response => response.json())
        .then(provinces => {
            var tampung = '<option>{{ $detailAlamat->provinsi }}</option>';
            
            provinces.forEach(element => {
                tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
            });

            document.getElementById('provinsi').innerHTML = tampung;
        });
  </script>

  <script>
    const selectProvinsi = document.getElementById('provinsi');

    selectProvinsi.addEventListener('change',(e)=>{
      var provinsi=e.target.options[e.target.selectedIndex].dataset.reg;
      fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
        .then(response => response.json())
        .then(regencies => {
            var tampung = '<option>{{ $detailAlamat->kota_kabupaten }}</option>';
            regencies.forEach(element => {
                tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
            });
            document.getElementById('kabupaten_kota').innerHTML = tampung;
        });

    });
  </script>

  <script>
    const selectKota = document.getElementById('kabupaten_kota');

    selectKota.addEventListener('change',(e)=>{
      var kabupaten_kota=e.target.options[e.target.selectedIndex].dataset.reg;
      fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/districts/${kabupaten_kota}.json`)
        .then(response => response.json())
        .then(districts => {
            var tampung = '<option>{{ $detailAlamat->kecamatan }}</option>';
            districts.forEach(element => {
                tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
            });
            document.getElementById('kecamatan').innerHTML = tampung;
        });

    });
  </script>

<script>
  const selectKecamatan = document.getElementById('kecamatan');

  selectKecamatan.addEventListener('change',(e)=>{
    var kelurahan=e.target.options[e.target.selectedIndex].dataset.reg;
    fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/villages/${kelurahan}.json`)
      .then(response => response.json())
      .then(villages => {
          var tampung = '<option>{{ $detailAlamat->kelurahan }}</option>';
          villages.forEach(element => {
              tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
          });
          document.getElementById('kelurahan').innerHTML = tampung;
      });

  });
</script>

  {{-- <script>
    fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
            .then(response => response.json())
            .then(provinces => {
                let tampung = `<option value="{{ $detailAlamat->provinsi_id }}">{{ $detailAlamat->provinsi ? $detailAlamat->provinsi : 'Pilih Provinsi' }}</option>`;
                
                provinces.forEach(element => {
                    tampung += `<option value="${element.id}">${element.name}</option>`;
                });

                document.getElementById('provinsi').innerHTML = tampung;
            });

        document.getElementById('provinsi').addEventListener('change', (e) => {
            let provinsi = e.target.value;
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
                .then(response => response.json())
                .then(regencies => {
                    let tampung = `<option value="{{ $detailAlamat->kabupaten_kota_id }}">{{ $detailAlamat->kota_kabupaten ? $detailAlamat->kota_kabupaten : 'Pilih Kabupaten/Kota' }}</option>`;
                    
                    regencies.forEach(element => {
                        tampung += `<option value="${element.id}">${element.name}</option>`;
                    });

                    document.getElementById('kabupaten_kota').innerHTML = tampung;
                });
        });

        document.getElementById('kabupaten_kota').addEventListener('change', (e) => {
            let kabupaten_kota = e.target.value;
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/districts/${kabupaten_kota}.json`)
                .then(response => response.json())
                .then(districts => {
                    let tampung = `<option value="{{ $detailAlamat->kecamatan_id }}">{{ $detailAlamat->kecamatan ? $detailAlamat->kecamatan : 'Pilih Kecamatan' }}</option>`;
                    
                    districts.forEach(element => {
                        tampung += `<option value="${element.id}">${element.name}</option>`;
                    });

                    document.getElementById('kecamatan').innerHTML = tampung;
                });
        });

        document.getElementById('kecamatan').addEventListener('change', (e) => {
            let kecamatan = e.target.value;
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/villages/${kecamatan}.json`)
                .then(response => response.json())
                .then(villages => {
                    let tampung = `<option value="{{ $detailAlamat->kelurahan_id }}">{{ $detailAlamat->kelurahan ? $detailAlamat->kelurahan : 'Pilih Kelurahan' }}</option>`;
                    
                    villages.forEach(element => {
                        tampung += `<option value="${element.id}">${element.name}</option>`;
                    });

                    document.getElementById('kelurahan').innerHTML = tampung;
                });
        });
    </script> --}}

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