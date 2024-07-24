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
            <a href="../html/c_lowongan.html" class="back-link">
                <i class="bi bi-arrow-left"></i>
            </a>
            <h5> Buat Lowongan</h5>
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
            <form method="POST" action="">
              @csrf
              <div class="general-form">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nama Pekerjaan</label>
                    <input name="title_lowongan"type="text" class="form-control" id="validationDefault01" required>
                </div>
                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Deskripsi Pekerjaan</label>
                    <textarea name="deskripsiPekerjaan" class="form-control" id="validationTextarea" required></textarea>
                    <div class="invalid-feedback">
                      Masukkan Deskripsi Perusahaan.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Kualifikasi</label>
                    <textarea name="kualifikasi" class="form-control" id="validationTextarea" required></textarea>
                    <div class="invalid-feedback">
                      Masukkan Kualifikasi.
                    </div>
                </div>
              </div>

              <div class="general-form">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Kategori Pekerjaan</label>
                    <input name="kategoriPekerjaan" type="text" class="form-control" id="validationDefault01" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tipe Pekerjaan</label>
                    <select name="tipePekerjaan" class="form-select" aria-label="Default select example" required>
                        <option selected></option>
                        <option value="1">Full Time</option>
                        <option value="2">Part Time</option>
                        <option value="3">Freelance</option>
                        <option value="3">Internship</option>
                        <div class="invalid-feedback">
                            Masukkan Tipe Pekerjaan.
                        </div>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Lokasi Kerja</label>
                    <select name="lokasiKerja" class="form-select" aria-label="Default select example" required>
                        <option selected></option>
                        <option value="1">di Kantor</option>
                        <option value="2">di Rumah</option>
                        <option value="3">Hybrid</option>
                        <div class="invalid-feedback">
                            Masukkan Tipe Pekerjaan.
                        </div>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Minimal Gaji</label>
                    <input name="minimal_gaji" type="text" class="form-control" id="validationDefault01" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Maksimal Gaji</label>
                    <input name="maksimal_gaji" type="text" class="form-control" id="validationDefault01" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Pendidikan</label>
                    <input name="pendidikan" type="text" class="form-control" id="validationDefault01" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Pengalaman</label>
                    <input name="pengalaman"type="text" class="form-control" id="validationDefault01" required>
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