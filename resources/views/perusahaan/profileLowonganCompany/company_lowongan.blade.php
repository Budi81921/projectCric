<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCAREER For Employers</title>
    <link rel="stylesheet" href="/companycss/c_lowongan.css">
    <link href="/css-bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/css-bootstrap/bootstrap.min.css">
    <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  <!--PEMISAH SIDEBAR DAN NAVBAR-->
  <div class="lowongan-view">
    
    @include('layout.company.sidebarprofilecompany')

    <div class="right-view">
      
      @include('layout.company.navbarcompany')
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @elseif(session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
      @endif

      <div class="lowongan-company">
        <h5>Lowongan</h5>
        <div class="lowongan-box">
          <div class="job-view">
            <a href="/company/profile/lowongan/create" class="post-job">
                <div class="title-postjob">
                    <i class="bi bi-clipboard-plus"></i>
                    <span class="text-post">POST JOB</span>
                </div>
            </a>

            <!-- TABLE JOB AVAILABLE -->
            <div class="job-table-avail">
              <table class="table table-hover" id="job-table">
                <thead>
                  <tr class="atribute-name">
                    <th style="width: 150px;">Lowongan</th>
                    <th style="width: 100px;">Jumlah Pelamar</th>
                    <th style="width: 170px;">Kelola</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ( $jobs as $companyJobs )
                  <tr class="job-avail" id="job-avail-2">
                    <td class="job-name-loc">
                      <h5 class="job-name">{{ $companyJobs->title_lowongan }}</h5>
                      <p class="c-location">{{ $companyJobs->company->detailalamat->kota_kabupaten }}</p>
                    </td>
                    <td class="numb-of-applicant">
                      <h5 class="applicant" style="font-size: 18px;">{{ $companyJobs->detailLowongan->count() }} Pelamar</h5>
                    </td>

                    <td class="manage-job">

                      <a href="{{ url('/company/profile/lowongan/edit/'.encrypt($companyJobs->id)) }}}" button type="button" class="edit-job">
                        <i class="bi bi-pencil-square"></i>
                        <span class="text-edit">Edit</span>
                      </a>

                      <button type="button" class="delete-job" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                        <i class="bi bi-trash3-fill"></i>
                        <span class="text-delete">Hapus</span>
                      </button>

                      <!-- POP UP DELETE-->
                      <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered" style="max-width: 600px;">
                          <div class="modal-content" style="background-color:#D9D9D9">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <h5>Apakah anda yakin ingin menghapus lowongan ini?</h5>
                              <p>Lowongan tidak akan ditampilkan di laman user lagi.</p>
                            </div>

                            <div class="modal-footer-del">
                              <form id="delete-form" action="{{ url('/company/profile/lowongan/delete/'.encrypt($companyJobs->id)) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-primary" id="btn-delete" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Ya, Hapus</button>
                              </form>
                                <button type="button" class="btn btn-secondary" id="btn-batal" data-bs-dismiss="modal">Tidak, Batal</button>
                            </div>

                          </div>
                        </div>
                      </div>
                      
                      @if(session('successDeleteJob'))
                      <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered" style="max-width: 600px;">
                          <div class="modal-content" style="background-color:#D9D9D9">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <i class="bi bi-patch-check-fill custom-icon"></i>
                              <h5 style="color: #00264B;">Lowongan berhasil dihapus.</h5>
                              <p>Lowongan tidak akan ditampilkan di laman user lagi.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endif
                      
                      <!-- END POP UP DELETE -->

                    </td>
                  </tr>
                  @endforeach
                  
                  
                </tbody>
              </table>
            </div> 
            <!-- END TABLE JOB AVAILABLE -->
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