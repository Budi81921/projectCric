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
                      <a href="../html/c_edit_job_general.html" button type="button" class="edit-job">
                        <i class="bi bi-pencil-square"></i>
                        <span class="text-edit">Edit</span>
                      </a>
                      <button type="button" class="delete-job" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                        <i class="bi bi-trash3-fill"></i>
                        <span class="text-delete">Hapus</span>
                      </button>
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