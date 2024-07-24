<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan</title>
    <link rel="stylesheet" href="/css/perusahaan-regis.css">
    <link rel="stylesheet" href="/css-bootstrap/bootstrap.css">
    <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  
  <!-- NAVIGASI BAR REGISTER-->
  @include('layout.navbar')

  <div class="company-view">
  <!-- SEARCHING -->
        <div class="searching-box">
            <form method="GET" action="/listPerusahaanNonLogin/search" class="d-flex" role="search">
                @csrf
                <input name="search" class="form-control me-2" type="search" placeholder="Cari Pekerjaan..." aria-label="Caripekerjaan...">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Area/Kota</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <button class="btn btn-outline-success" type="submit">Cari</button>
              </form>
        </div>
  <!--END SEARCHING-->

  <!--SHOWING PAGE-->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Showing {{ $perusahaan->firstItem() }} - {{ $perusahaan->lastItem() }} of {{ $perusahaan->total() }} results</li>
          </ol>
        </nav>
  <!--END SHOWING PAGE-->

  <!--CARD-PERUSAHAAN-->
    <!--SECTION 1-->
          <div class="cardperusahaan">
            @foreach ($perusahaan as $company)
            <div class="card w-100">
              <div class="card-body">
                <a class="perusahaan" href="{{ url('/listPerusahaanNonLogin/' . encrypt($company->id)) }}">
                  <div class="logo-perusahaan"><img src="/img/logo_circ-removebg-preview.png" alt=""></div>
                  <div class="info-perusahaan">
                    <h5 class="card-title">{{ $company->user->nama_lengkap }}</h5>
                    <p class="card-text"><i class="bi bi-geo-alt"></i>{{ $company->detailalamat->kota_kabupaten }}</p>
                  </div>
                </a>
                <a href="{{ url('/listPerusahaanNonLogin/detail/lowongan/' . encrypt($company->id)) }}" class="btn btn-primary" id="button">{{ $company->lowongan->count() }} Lowongan</a>
              </div>
            </div>
            @endforeach
              
                    
          </div>
        
    

  <!--BUTTON SEBELUM DAN SESUDAH PAGE-->
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              {{ $perusahaan->links() }}
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
    </div>
  <!--END BUTTON SEBELUM DAN SESUDAH PAGE-->

  <!-- Footer -->
  @include('layout.footer')
  <!-- End Footer -->

</body>
</html>