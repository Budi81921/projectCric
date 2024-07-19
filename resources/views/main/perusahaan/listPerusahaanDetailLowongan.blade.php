<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan</title>
    <link rel="stylesheet" href="/css/perusahaandetail-lowongan-regis.css">
    <link rel="stylesheet" href="/css-bootstrap/bootstrap.css">
    <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  @include('layout.navbar')
  <div class="detail-view">
  <!--PROFIL PERUSAHAAN  -->
    <div class="profil-company">
      <div class="background-company">
        <img src="/img/background.jpg" alt="background">
      </div>
      <div class="logo-profil">
        <div class="logo">
          <img src="img/img/logo_circ-removebg-preview.png" alt="logo">
        </div>
        <div class="profil">
            <div class="nama">
              <h3>{{ $perusahaan->user->nama_lengkap }}</h3>
            </div>
            <div class="kota">
              <h4><i class="bi bi-geo-alt"></i>{{ $perusahaan->detailalamat->kota_kabupaten }}</h4>
          </div>
        </div>
      </div>
      <div class="d-grid gap-2 d-md-block">
        <a href="{{ url('/listPerusahaan/' . encrypt($perusahaan->id)) }}"><button class="btn btn-primary btn-hover-slide" id="button" type="button">Tentang</button></a>
        <a href="{{ url('/listPerusahaan/detail/lowongan/' . encrypt($perusahaan->id)) }}l"><button class="btn btn-primary btn-hover-slide active" id="button" type="button">Lowongan</button></a>
      </div>
    </div>
     <!-- END PROFIL PERUSAHAAN  -->

    <!--CONTENT LOWONGAN  -->
    <div class="content-lowongan">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Showing {{ $lowongan->firstItem() }} - {{ $lowongan->lastItem() }} of {{ $lowongan->total() }} results</li>
          </ol>
        </nav>
        <!--SECTION 1 -->
        <div class="subcontent-lowongan1">
          @foreach ($lowongan as $lowongan1 )
          <div class="job-box">
            <div class="content-job">
              <div class="job-info"> <a href="../HTML/detail-lowongan.html">
                <h5 class="job-title">{{ $lowongan1->title_lowongan }}</h5>
                <hr>
                  <div class="info">
                    <i class="bi bi-hourglass-split"></i>
                    <h6 class="job-type">{{ $lowongan1->tipePekerjaan }}</h6>
                  </div>
                  <div class="info">
                    <i class="bi bi-buildings-fill"></i>
                    <h6 class="job-loc">{{ $lowongan1->lokasi }}r</h6>
                  </div>
                </a>
              </div>
              <div class="apply-save">
                  <div class="btn-apply">
                    <a href="#" class="btn btn-primary-blue" id="apply">LAMAR</a>
                  </div>
                  <div class="bookmark" id="bookmarkIcon">
                    <a href="#"><i class="bi bi-bookmark"></i></a>
                  </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        
     <!--BUTTON SEBELUM DAN SESUDAH PAGE-->
     <nav aria-label="Page navigation example">
        <ul class="pagination">
          {{ $lowongan->links() }}
          {{-- <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li> --}}
        </ul>
      </nav>
<!--END BUTTON SEBELUM DAN SESUDAH PAGE--> 
  </div>

  <!-- Footer -->
  @include('layout.footer')
  <!-- End Footer -->

</body>
</html>
