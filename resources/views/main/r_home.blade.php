<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCAREER</title>
  <link href="/css-bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="/css-bootstrap/bootstrap.min.css">
  <link href="/css/n_home.css" rel="stylesheet">
  <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

  <!-- NAVIGASI BAR -->
  @include('layout.navbar')
  <!-- END NAVIGASI BAR -->

  <!-- Section1 -->
  <div id="section1" class="carousel1">
    <div class="carousel-item active">
      <img src="../img/carousel.png" class="d-block w-100" alt="Section" height="200px">

      <!-- Formulir Pencarian -->
      <form>
        <div class="form d-flex" role="search" id="myCarousel"
          style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; display: flex; align-items: center; justify-content: center;">
          <input class="form-control" id="form-control" type="search" placeholder="Cari Pekerjaan..." aria-label="Cari Pekerjaan...">
          <select class="form-select" id="form-select" aria-label="Default select example">
            <option selected>Kategori</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <select class="form-select" id="form-select" aria-label="Default select example">
            <option selected>Area/Kota</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>

          <button class="btn btn-outline-success" id="btn-search" type="submit" href="#">Cari</button>
        </div>
      </form>
      <!-- Akhir Formulir Pencarian -->
    </div>
  </div>
  <!-- End Section1 -->

  <!-- Section2 -->
  <div id="section2" class="carousel2">
    <div class="copywriting">
      <h1 class="text">Explore dan temukan pekerjaan yang cocok untukmu!</h1>
    </div>

    <div class="container-sm">
      <div class="category d-flex justify-content-center flex-wrap">
        @foreach ($lowongan as $lowongan )
        <button type="button" class="category-btn" href="#">{{$lowongan->title_lowongan}}</button>
        @endforeach

      </div>

      <div class="more-info d-flex justify-content-center">
        <button type="button" class="btn btn-link" href="#">tampilkan lebih banyak</button>
      </div>
    </div>
  </div>
  <!-- End Section2 -->

  <!-- Section 3 -->
  <div id="section3" class="carousel3">
    <div class="box-company">
      <div class="copywriting">
        <h1 class="text1">Top Perusahaan yang merekrut</h1>
      </div>

      <div class="container-sm">
        <div class="company d-flex justify-content-center flex-wrap">
          @foreach ($perusahaan->take(10) as $company)
            <button type="button" class="company-btn" href="{{ url('/listPerusahaanNonLogin/' . encrypt($company->id)) }}">
              @if($company->foto_profil_company === null)
                  <img src="" alt=""></div>
              @else
                  <img src="{{ asset('storage/userCompany/' . $company->id . '/fotoProfileCompany/' . $company->foto_profil_company) }}" alt="">
              @endif
            </button>
          @endforeach
        </div>
        <div class="company d-flex justify-content-center flex-wrap">
            <button type="button" class="company-btn" href="#">
                <img src=".." alt="Company 6">
            </button>
            <button type="button" class="company-btn" href="#">
                <img src=".." alt="Company 7">
            </button>
            <button type="button" class="company-btn" href="#">
                <img src=".." alt="Company 8">
            </button>
            <button type="button" class="company-btn" href="#">
                <img src=".." alt="Company 9">
            </button>
            <button type="button" class="company-btn" href="#">
                <img src=".." alt="Company 10">
            </button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Section 3 -->

  <!-- Section 4 -->
  <div id="section4" class="carousel4">
    <div class="copywriting">
      <h1 class="text2">Tentukan dan Rencanakan karier suksesmu bersama UCareer!</h1>
    </div>
  </div>
  <!-- End Section 4 -->

  @include('layout.footer')


</body>

</html>
