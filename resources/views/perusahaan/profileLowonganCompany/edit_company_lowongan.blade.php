<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCAREER For Employers</title>
    <link rel="stylesheet" href="/companycss/c_create_job_general.css">
    <link href="/css-bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/css-bootstrap/bootstrap.min.css">
    <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/js-bootstrap/create-lowongan.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  <!--PEMISAH SIDEBAR DAN NAVBAR-->
  <div class="lowongan-view">


    @include('layout.company.sidebarprofilecompany')

    <div class="right-view">
      @include('layout.company.navbarcompany')
      <div class="c-lowongan-company">
        <div class="judul-c">
            <a href="/company/profile/lowongan" class="back-link">
                <i class="bi bi-arrow-left"></i>
            </a>
            <h5> Edit Lowongan</h5>
        </div>

        <div class="c-lowongan-box">
          <div class="c-job-view">
            <div class="c-button">
                <div class="general-info">
                    <a href="../html/c_create_job_general.html">
                        <h5>Umum</h5>
                    </a>
                </div>
                <div class="specific-info">
                    <a href="../html/c_create_job_spec.html">
                        <h5>Informasi</h5>
                    </a>
                </div>
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
    
            <form method="POST" action="/company/profile/lowongan/edit/proses">
              @csrf
              <input type="hidden" name="id" value="{{ Crypt::encrypt($jobs->id) }}">
              <div class="general-form">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nama Pekerjaan</label>
                    <input value="{{ $jobs->title_lowongan }}" name="title_lowongan"type="text" class="form-control @error('title_lowongan') is-invalid @enderror" id="validationDefault01" required>
                    @error('title_lowongan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror</div>
                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Deskripsi Pekerjaan</label>
                    <textarea name="deskripsiPekerjaan" class="form-control @error('deskripsiPekerjaan') is-invalid @enderror" id="validationTextarea" required>{{ $jobs->deskripsiPekerjaan }}</textarea>
                    @error('deskripsiPekerjaan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Kualifikasi</label>
                    <textarea name="kualifikasi" class="form-control @error('kualifikasi') is-invalid @enderror" id="validationTextarea" required>{{ $jobs->kualifikasi }}</textarea>
                    @error('kualifikasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
              </div>

              <div class="general-form">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Kategori Pekerjaan</label>
                    <select name="fkKategoriPekerjaan" class="form-select" id="kategoriPekerjaan" required>
                        @foreach($kategoriPekerjaan as $kategori)
                        <option value="{{ $kategori->id }}" {{ old('fkKategoriPekerjaan', $jobs->fkKategoriPekerjaan) == $kategori->id ? 'selected' : '' }}>
                            {{ $kategori->namaKategoriPekerjaan }}
                        </option>
                        @endforeach
                        @error('fkKategoriPekerjaan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tipe Pekerjaan</label>
                    <select name="tipePekerjaan" class="form-select" aria-label="Default select example" required>
                        <option value="Full_Time" {{ old('tipePekerjaan', $jobs->tipePekerjaan) == 'Full_Time' ? 'selected' : '' }}>Full Time</option>
                        <option value="Part_Time" {{ old('tipePekerjaan', $jobs->tipePekerjaan) == 'Part_Time' ? 'selected' : '' }}>Part Time</option>
                        <option value="Freelance" {{ old('tipePekerjaan', $jobs->tipePekerjaan) == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                        <option value="Internship" {{ old('tipePekerjaan', $jobs->tipePekerjaan) == 'Internship' ? 'selected' : '' }}>Internship</option>
                        @error('tipePekerjaan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Lokasi Kerja</label>
                    <select name="lokasi" class="form-select" aria-label="Default select example" required>
                        <option value="WFO" {{ old('lokasi', $jobs->lokasi) == 'WFO' ? 'selected' : '' }}>di Kantor</option>
                        <option value="WFH" {{ old('lokasi', $jobs->lokasi) == 'WFH' ? 'selected' : '' }}>di Rumah</option>
                        <option value="Hybrid" {{ old('lokasi', $jobs->lokasi) == 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                        @error('lokasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Minimal Gaji</label>
                    <input value="{{$jobs->gaji_minimal}}" name="gaji_minimal" type="text" class="form-control @error('gaji_minimal') is-invalid @enderror" id="validationDefault01" required>
                    @error('gaji_minimal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Maksimal Gaji</label>
                    <input value="{{$jobs->gaji_maximal}}" name="gaji_maximal" type="text" class="form-control @error('gaji_maximal') is-invalid @enderror" id="validationDefault01" required>
                    @error('gaji_maximal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Pendidikan</label>
                    <input value="{{$jobs->pendidikan}}" name="pendidikan" type="text" class="form-control @error('pendidikan') is-invalid @enderror" id="validationDefault01" required>
                    @error('pendidikan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Pengalaman</label>
                    <input value="{{$jobs->pengalaman}}"name="pengalaman"type="text" class="form-control @error('pengalaman') is-invalid @enderror" id="validationDefault01" required>
                    @error('pengalaman')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
              </div>

              <div class="general-save">
                  <button class="btn btn-primary" id="general-save-btn" type="submit">Simpan</button>
                  <div id="success-message" style="display: none; color: green; margin-top: 10px">Data berhasil disimpan!</div>
              </div>
            </form>
            
         </div>
       </div>

     </div>
    </div>
  </div>

  <!-- Footer -->
  @include('layout.footer')
  <!-- End Footer -->

</body>
</html>