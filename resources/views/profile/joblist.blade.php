<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pelamar - Job List</title>
    <link rel="stylesheet" href="/cssBiodataKandidat/profilpelamar-joblist.css">
    <link rel="stylesheet" href="/css-bootstrap/bootstrap.css">
    <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/js-bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  
  <!-- NAVIGASI BAR -->
  @include('layout.navbar')
  <!-- END NAVIGASI BAR -->
 
  <!--SIDEBAR-->
  @include('layout.sidebarprofilecandidate')
  <!--END SIDEBAR-->

    <!-- JOBLIST -->
      <div class="joblist">
        <div class="judul">
          <h3>List Lamaran Pekerjaan</h3>
        </div>
        <div class="judultabel">
            <div class="namajob">
                <h6>Judul Job</h6>
            </div>
            <div class="tanggal">
                <h6>Tanggal Melamar</h6>
            </div>
            <div class="status">
                <h6>Status</h6>
            </div>
        </div>

        @foreach ($jobs as $job)
        <div class="job1">

          <div class="perusahaan">
            <div class="logocompany"> <img src="/img/logo_circ-removebg-preview.png" alt="logo perusahaan"></div>
            <div class="detail">
              <ul>
                <li class="posisi">{{ $job->lowongan->title_lowongan }}</li>
                <li class="namaperusahaan">{{ $job->lowongan->company->user->nama_lengkap }}</li>
                <li class="alamat">{{ $job->lowongan->company->detailalamat->kota_kabupaten }}</li>
              </ul>
            </div>
          </div>

          <div class="tanggal-lamar">
            <p>{{ $job->created_at }}</p>
          </div>

         
          @if($job->status === 'diterima')
            <div class="diterima">
              <p>{{ $job->status }}</p>
            </div>
            
            <div class="info">
              <i class="bi bi-exclamation-circle" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
            </div>

            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Pemberitahuan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Selamat, Anda diterima untuk bekerja di Perusahaan CRIC DSFE UAI pada posisi UI/UX Design. <br> Untuk informasi lebih lanjut Anda akan dihubungi melalui Email untuk melakukan sesi wawancara, Terimakasih!
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Mengerti</button>
                  </div>
                </div>
              </div>
            </div>

          @elseif($job->status === 'proses')
            <div class="pending">
              <p>{{ $job->status }}</p>
            </div>

          @elseif($job->status === 'ditolak')
            <div class="ditolak">
              <p>{{ $job->status }}</p>
            </div>
          @endif
          
        </div>
        @endforeach
      </div>
        
    </div>    
  <!-- END EDIT JOBLIST-->
  
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