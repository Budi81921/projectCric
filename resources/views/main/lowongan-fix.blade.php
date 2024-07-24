@auth()
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCAREER</title>
  <link href="/css-bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="/css/r_lowongan.css" rel="stylesheet">
  <link href="/css/r_lowongan_view.css" rel="stylesheet">
  <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
  <script src="/js-bootstrap/dropdown.js"></script>
  <script src="/js-bootstrap/pagination.js"></script>
  <script src="/js-bootstrap/popper.min.js"></script>
  <script src="/js-bootstrap/job-details.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/js-bootstrap/bookmark.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg" id="myNavbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home">
            <img src="../img/logo.png" alt="logo" class="navbar-logo">UCareer</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/lowongan">Lowongan Kerja</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Perusahaan</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tentang Kami
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">UAI</a></li>
                  <li><a class="dropdown-item" href="#">CRIC DSFE UAI</a></li>
                </ul>
              </li>
            </ul>
                <div class="navbar-nav">
                    <div class="wishlist">
                        <a href="/wishlist"><i class="bi bi-bookmark-fill"></i></a>
                    </div>
                    <div class="akun">
                        <a href="/profile">
                            <i class="bi bi-person-fill"></i>
                            <h6>{{ Auth::user()->nama_lengkap }}</h6>
                        </a>
                    </div>
                </div>
          </div>
        </div>
      </nav>
      <!-- END NAVIGASI BAR -->
          <!-- LOWONGAN SECTION -->
    <div class="job-view">
        <!-- Searching -->
        <div class="searching-filter">
            <!-- Formulir Pencarian -->
            <div class="searching-box">
                <form>
                    <div class="form d-flex" role="search">
                    <input class="form-control" id="form-control" type="search" placeholder="Cari Pekerjaan..." aria-label="Cari Pekerjaan...">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Kategori</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Area/Kota</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <button class="btn btn-outline-success" type="submit" href="#">Cari</button>
                    </div>
                </form>
            </div>
            <!-- Akhir Formulir Pencarian -->

            <!-- Filter Search -->
            <div class="filter-box">
                <div class="filtering">
                    <div class="dropdown" id="dropdown-type">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Tipe Pekerjaan
                        </button>
                        <ul class="dropdown-menu dropdown-menu1" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Full Time" id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                        Full Time
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Part Time" id="checkbox2">
                                    <label class="form-check-label" for="checkbox2">
                                        Part Time
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Freelance" id="checkbox3">
                                    <label class="form-check-label" for="checkbox3">
                                        Freelance
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Internship" id="checkbox4">
                                    <label class="form-check-label" for="checkbox4">
                                        Internship
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown" id="dropdown-location">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            Lokasi Kerja
                        </button>
                        <ul class="dropdown-menu dropdown-menu2" aria-labelledby="dropdownMenuButton2">
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="di Kantor" id="checkbox5">
                                    <label class="form-check-label" for="checkbox5">
                                        di Kantor
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="di Rumah" id="checkbox6">
                                    <label class="form-check-label" for="checkbox6">
                                        di Rumah
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Hybrid" id="checkbox7">
                                    <label class="form-check-label" for="checkbox7">
                                        Hybrid
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown" id="dropdown-salary">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                            Range Gaji
                        </button>
                        <ul class="dropdown-menu dropdown-menu3" aria-labelledby="dropdownMenuButton3">
                            <li><a class="dropdown-item" href="#">&lt; Rp500.000</a></li>
                            <li><a class="dropdown-item" href="#">Rp500.000 - Rp2.000.000</a></li>
                            <li><a class="dropdown-item" href="#">Rp2.000.000 - Rp5.000.000</a></li>
                            <li><a class="dropdown-item" href="#">Rp5.000.000 - Rp10.000.000</a></li>
                            <li><a class="dropdown-item" href="#">> Rp10.000.000</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Akhir Filter Search -->
            </div>
        </div>
        <!-- End Searching -->

        <!-- Lowongan -->
        <div class="job-container">
            <div class="job-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Lowongan Kerja di Indonesia</li>
                    </ol>
                </nav>
            </div>
            <div class="split-page">
                <div class="job-listing">
                    <!-- Daftar Pekerjaan -->
                    <div class="job-list">
                        <div class="left-job" id="jobListContainer">
                            @foreach ($lowongan as $lowongan)
                            <div class="job-box">
                                <div class="btn-job">
                                    <a href="{{ route('lowongan', ['id' => $lowongan->id]) }}" style="text-decoration: none; color: inherit;">
                                    <div class="card-body">
                                        <div class="company-img">
                                            <img src="../img/logo.png" id="img-company" alt="C" width="60px">
                                        </div>
                                        <div class="job-info">
                                            <h5 class="job-title">{{$lowongan->title_lowongan}}</h5>
                                            <h5 class="company-name" style="color: #1259a0"></h5>
                                            <p class="company-loc">{{$lowongan->fkusercompany}}</p>
                                            <hr>
                                            <div class="info1">
                                                <i class="bi bi-hourglass-split"></i>
                                                <h6 class="job-type">{{$lowongan->tipePekerjaan}}</h6>
                                            </div>
                                            <div class="info2">
                                                <i class="bi bi-buildings-fill"></i>
                                                <h6 class="job-loc">{{$lowongan->lokasi}}</h6>
                                            </div>


                                            <div class="apply-save">
                                                <div class="btn-apply">
                                                    <div class="btn btn-primary-blue" id="apply" data-bs-toggle="modal" data-bs-target="#exampleModal-apply">LAMAR</div>
                                            <!-- POP UP APPLY-->
                                                    <div class="modal fade" id="exampleModal-apply" tabindex="-1" aria-labelledby="exampleModalLabel-apply" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content" id="modal-content-apply">
                                                                <div class="modal-header" id="modal-head-apply">
                                                                    <button type="button" class="btn-close" id="btn-close-apply" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel-apply">LAMAR PEKERJAAN INI</h1>
                                                                </div>
                                                                <div class="modal-body" id="modal-body-apply">
                                                                    <form>
                                                                        <div class="mb-3">
                                                                            <label for="cv-title" class="col-form-label">Masukkan CV</label>
                                                                            <input class="form-control" type="file" id="cvFile" hidden onchange="displayFileName('cvFile', 'uploadLabel')">
                                                                            <label for="cvFile" class="form-upload" id="uploadLabel">
                                                                                <i class="fa-solid fa-upload"></i>
                                                                                <span id="up-form">Upload File</span>
                                                                            </label>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="portfolio-title" class="col-form-label">Masukkan Portofolio (Opsional)</label>
                                                                            <input class="form-control" type="file" id="portfolioFile" hidden onchange="displayFileName('portfolioFile', 'uploadLabel1')">
                                                                            <label for="portfolioFile" class="form-upload" id="uploadLabel1">
                                                                                <i class="fa-solid fa-upload"></i>
                                                                                <span id="up-form1">Upload File</span>
                                                                            </label>
                                                                        </div>
                                                                        <script>
                                                                            document.addEventListener('DOMContentLoaded', function() {
                                                                                // Mencegah default behavior saat tombol "LAMAR" diklik
                                                                                const applyButtons = document.querySelectorAll('.btn-apply .btn');

                                                                                applyButtons.forEach(button => {
                                                                                    button.addEventListener('click', function(event) {
                                                                                        event.preventDefault();
                                                                                        $('#exampleModal-apply').modal('show');
                                                                                    });
                                                                                });
                                                                            function displayFileName(inputId, labelId) {
                                                                                var fileInput = document.getElementById(inputId);
                                                                                var fileName = fileInput.files[0].name;
                                                                                var uploadLabel = document.getElementById(labelId);

                                                                                uploadLabel.innerHTML = fileName;
                                                                                uploadLabel.style.display = 'flex';
                                                                                uploadLabel.style.alignItems = 'center';
                                                                                uploadLabel.style.justifyContent = 'center';
                                                                            };
                                                                        });
                                                                        </script>
                                                                    </form>
                                                                    <button type="button" class="btn btn-primary" id="lamar-btn">LAMAR PEKERJAAN</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END POP UP APPLY-->
                                                </div>
                                                {{-- <div class="bookmark" id="bookmarkIcon">
                                                    <i class="bi bi-bookmark"></i>
                                                </div> --}}
                                            @php
                                                $bookmarked = session()->get('bookmarked', []);
                                            @endphp
                                                <div class="bookmark" id="bookmarkIcon">
                                                    <form action="{{ route('wishlist.toggleBookmark', $lowongan->id) }}" method="POST" class="bookmark" id="bookmarkForm-{{ $lowongan->id }}">
                                                        @csrf
                                                        <button type="submit" class="bookmark-button" id="bookmarkButton-{{ $lowongan->id }}">
                                                            @if(in_array($lowongan->id, $bookmarked))
                                                                <i class="bi bi-bookmark-fill bookmarked" id="bookmarkIcon-{{ $lowongan->id }}"></i>
                                                            @else
                                                                <i class="bi bi-bookmark" id="bookmarkIcon-{{ $lowongan->id }}"></i>
                                                            @endif
                                                        </button>
                                                    </form>
                                                </div>
                                                <script>
                                                    document.querySelectorAll('.bookmark').forEach(function(form) {
                                                        form.addEventListener('submit', function(event) {
                                                            event.preventDefault(); // Mencegah submit form default

                                                            var lowonganId = this.id.split('-')[1];
                                                            var icon = document.getElementById('bookmarkIcon-' + lowonganId);

                                                            // Periksa apakah ikon sudah ditandai atau belum
                                                            if (icon.classList.contains('bi-bookmark')) {
                                                                icon.classList.remove('bi-bookmark');
                                                                icon.classList.add('bi-bookmark-fill', 'bookmarked');
                                                            } else {
                                                                icon.classList.remove('bi-bookmark-fill', 'bookmarked');
                                                                icon.classList.add('bi-bookmark');
                                                            }

                                                            // Lanjutkan submit form setelah mengubah ikon
                                                            this.submit();
                                                        });
                                                    });
                                                </script>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="right-job" id="jobDetail">
                            <!-- DETAIL LOWONGAN -->
                            @if($selectedLowongan)
                            <div class="detail-lowongan">
                                <div class="content-lowongan">
                                    <div class="judul-lowongan">
                                        <div class="logo">
                                            <img src="/img/logo.png" alt="logo">
                                        </div>
                                        <div class="judul">
                                            <h5>{{ $selectedLowongan->title_lowongan }}</h5>
                                            <h5 style="color: #004080;"></h5>
                                            <p>{{ $selectedLowongan->fkusercompany }}</p>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="informasi-lowongan">
                                        <div class="info">
                                            <h6>Informasi Lowongan</h6>
                                            <ul class="isi-informasi">
                                              <li class="sub-isi">
                                                <div class="isi1">Range Gaji</div>
                                                <div class="isi2" style="color: red;">gaji</div>
                                              </li>
                                              <li class="sub-isi">
                                                <div class="isi1">Tipe Pekerjaan</div>
                                                <div class="isi2">{{ $selectedLowongan->tipePekerjaan }}</div>
                                              </li>
                                              <li class="sub-isi">
                                                <div class="isi1">Pendidikan</div>
                                                <div class="isi2">{{ $selectedLowongan->pendidikan }}</div>
                                              </li>
                                              <li class="sub-isi">
                                                <div class="isi1">Minimal Pengalaman</div>
                                                <div class="isi2">{{ $selectedLowongan->pengalaman}}</div>
                                              </li>
                                            </ul> 
                                        </div>
                                        <div class="button">
                                            <div class="lamar">
                                                <a href="javascript:void(0)" class="btn btn-primary-blue" id="apply1" data-bs-toggle="modal" data-bs-target="#exampleModal-apply">LAMAR</a>
                                            </div>
                                            <div class="bookmark1" id="rightBookmarkIcon">
                                                <div class="simpan">
                                                    <i class="bi bi-bookmark"></i>
                                                    <p>SIMPAN</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="deskripsi-pekerjaan">
                                        <h6>Deskripsi Pekerjaan</h6>
                                        <ol>
                                            <li>{{ $selectedLowongan->deskripsiPekerjaan }}</li>
                                        </ol>
                                    </div>
                                    <div class="kualifikasi">
                                        <h6>Kualifikasi</h6>
                                        <ol>
                                            <li>{{ $selectedLowongan->kualifikasi }}</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="content-lowongan">
                                <div class="content-view">
                                    <div class="viewdetails-before">
                                        <i class="bi bi-arrow-left-circle-fill"></i>
                                        <h4>Pilih Pekerjaan</h4>
                                        <p>Detail pekerjaan akan ditampilkan disini</p>
                                        <img src="/img/view-job.png">
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!-- END DETAIL LOWONGAN -->
                    </div>
                </div>
            </div>
            <div class="pagination">
                <button class="page-btn">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">></button>
            </div>
        </div>
    </div>
  <!-- END LOWONGAN SECTION -->
@endauth
@guest()
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCAREER</title>
  <link href="/css-bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="/css/n_lowongan.css" rel="stylesheet">
  <link href="/css/n_lowongan_view.css" rel="stylesheet">
  <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
  <script src="/js-bootstrap/dropdown.js"></script>
  <script src="/js-bootstrap/pagination.js"></script>
  <script src="/js-bootstrap/split-page.js"></script>
  <script src="/js-bootstrap/n_job.details.js"></script>
  <script src="/js-bootstrap/popper.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <!-- NAVIGASI BAR -->
    <!-- END NAVIGASI BAR -->

    <!-- LOWONGAN SECTION -->
    <div class="job-view">
        <!-- Searching -->
        <div class="searching-filter">
            <!-- Formulir Pencarian -->
            <div class="searching-box">
                <form>
                    <div class="form d-flex" role="search">
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
            </div>
            <!-- Akhir Formulir Pencarian -->

            <!-- Filter Search -->
            <div class="filter-box">
                <div class="filtering">
                    <div class="dropdown" id="dropdown-type">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Tipe Pekerjaan
                        </button>
                        <ul class="dropdown-menu dropdown-menu1" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Full Time" id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                        Full Time
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Part Time" id="checkbox2">
                                    <label class="form-check-label" for="checkbox2">
                                        Part Time
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Freelance" id="checkbox3">
                                    <label class="form-check-label" for="checkbox3">
                                        Freelance
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Internship" id="checkbox4">
                                    <label class="form-check-label" for="checkbox4">
                                        Internship
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown" id="dropdown-location">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            Lokasi Kerja
                        </button>
                        <ul class="dropdown-menu dropdown-menu2" aria-labelledby="dropdownMenuButton2">
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="di Kantor" id="checkbox5">
                                    <label class="form-check-label" for="checkbox5">
                                        di Kantor
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="di Rumah" id="checkbox6">
                                    <label class="form-check-label" for="checkbox6">
                                        di Rumah
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Hybrid" id="checkbox7">
                                    <label class="form-check-label" for="checkbox7">
                                        Hybrid
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown" id="dropdown-salary">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                            Range Gaji
                        </button>
                        <ul class="dropdown-menu dropdown-menu3" aria-labelledby="dropdownMenuButton3">
                            <li><a class="dropdown-item" href="#">&lt; Rp500.000</a></li>
                            <li><a class="dropdown-item" href="#">Rp500.000 - Rp2.000.000</a></li>
                            <li><a class="dropdown-item" href="#">Rp2.000.000 - Rp5.000.000</a></li>
                            <li><a class="dropdown-item" href="#">Rp5.000.000 - Rp10.000.000</a></li>
                            <li><a class="dropdown-item" href="#">> Rp10.000.000</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Akhir Filter Search -->
            </div>
        </div>
        <!-- End Searching -->

        <!-- Lowongan -->
        <div class="job-container">
            <div class="job-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Lowongan Kerja di Indonesia</li>
                    </ol>
                </nav>
            </div>
            <div class="split-page">
                <div class="job-listing">
                    <!-- Daftar Pekerjaan -->
                    <div class="job-list">
                        <div class="left-job" id="jobListContainer">
                            @foreach ($lowongan as $lowongan)
                            <a href="{{ route('lowongan', ['id' => $lowongan->id]) }}" style="text-decoration: none; color: inherit;">
                            <div class="job-box">
                                <div class="btn-job">
                                    <div class="card-body">
                                        <div class="company-img">
                                            <img src="../img/logo.png" id="img-company" alt="C" width="60px">
                                        </div>
                                        <div class="job-info">
                                            <h5 class="job-title">{{$lowongan->title_lowongan}}</h5>
                                            <h5 class="company-name" style="color: #1259a0">{{$lowongan->company}}</h5>
                                            <p class="company-loc">{{$lowongan->fkusercompany}}</p>
                                            <hr>
                                            <div class="info1">
                                                <i class="bi bi-hourglass-split"></i>
                                                <h6 class="job-type">{{$lowongan->tipePekerjaan}}</h6>
                                            </div>
                                            <div class="info2">
                                                <i class="bi bi-buildings-fill"></i>
                                                <h6 class="job-loc">{{$lowongan->lokasi}}</h6>
                                            </div>

                                            <div class="apply-save">
                                                <div class="btn-apply">
                                                    <div class="btn btn-primary-blue" id="apply" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">LAMAR</div>
                                                </div>
                                                {{-- <div class="bookmark" id="leftBookmarkIcon" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                    <i class="bi bi-bookmark"></i>
                                                </div> --}}
                                                <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    // Mencegah default behavior saat tombol "LAMAR" diklik
                                                    const applyButtons = document.querySelectorAll('.btn-apply .btn');

                                                    applyButtons.forEach(button => {
                                                        button.addEventListener('click', function(event) {
                                                            event.preventDefault();
                                                            $('#exampleModal').modal('show');
                                                        });
                                                    });
                                                });
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="right-job" id="jobDetail">
                            <!-- DETAIL LOWONGAN -->
                            @if($selectedLowongan)
                            <div class="detail-lowongan">
                                <div class="content-lowongan">
                                    <div class="judul-lowongan">
                                        <div class="logo">
                                            <img src="../img/logo.png" alt="logo">
                                        </div>
                                        <div class="judul">
                                            <h5>{{ $selectedLowongan->title_lowongan }}</h5>
                                            <h5 style="color: #004080;">{{ $selectedLowongan->company }}</h5>
                                            <p>{{ $selectedLowongan->fkusercompany }}</p>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="informasi-lowongan">
                                        <div class="info">
                                            <h6>Informasi Lowongan</h6>
                                            <ul class="isi-informasi">
                                              <li class="sub-isi">
                                                <div class="isi1">Range Gaji</div>
                                                <div class="isi2" style="color: red;">gaji</div>
                                              </li>
                                              <li class="sub-isi">
                                                <div class="isi1">Tipe Pekerjaan</div>
                                                <div class="isi2">{{ $selectedLowongan->tipePekerjaan }}</div>
                                              </li>
                                              <li class="sub-isi">
                                                <div class="isi1">Pendidikan</div>
                                                <div class="isi2">{{ $selectedLowongan->pendidikan }}</div>
                                              </li>
                                              <li class="sub-isi">
                                                <div class="isi1">Minimal Pengalaman</div>
                                                <div class="isi2">{{ $selectedLowongan->pengalaman}}</div>
                                              </li>
                                            </ul> 
                                        </div>
                                        <div class="button">
                                            <div class="lamar">
                                                <a href="javascript:void(0)" class="btn btn-primary-blue" id="apply1" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">LAMAR</a>
                                            </div>
                                            <div class="bookmark1" id="rightBookmarkIcon">
                                                <div class="simpan">
                                                    <i class="bi bi-bookmark"></i>
                                                    <p>SIMPAN</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="deskripsi-pekerjaan">
                                        <h6>Deskripsi Pekerjaan</h6>
                                        <ol>
                                            <li>{{ $selectedLowongan->deskripsiPekerjaan }}</li>
                                        </ol>
                                    </div>
                                    <div class="kualifikasi">
                                        <h6>Kualifikasi</h6>
                                        <ol>
                                            <li>{{ $selectedLowongan->kualifikasi }}</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="content-lowongan">
                                <div class="content-view">
                                    <div class="viewdetails-before">
                                        <i class="bi bi-arrow-left-circle-fill"></i>
                                        <h4>Pilih Pekerjaan</h4>
                                        <p>Detail pekerjaan akan ditampilkan disini</p>
                                        <img src="/img/view-job.png">
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <!-- END DETAIL LOWONGAN -->
                    </div>
                </div>
            </div>
            <div class="pagination">
                <button class="page-btn">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">></button>
            </div>
        </div>
    </div>
  <!-- END LOWONGAN SECTION -->


@endguest
      <!-- END NAVIGASI BAR -->

 <!-- Footer -->
    <div class="footer">
        <div class="box1">

        <!-- Information -->
        <div class="information">
            <div class="part1">
            <h4>CRIC DSFE UAI</h4>
            <p><a href="#">Lowongan Kerja</a></p>
            <p><a href="#">Perusahaan</a></p>
            <p><a href="#">Tentang Kami</a></p>
            <p><a href="#">Profil</a></p>
            </div>

            <div class="part2">
            <h4>REACH US!</h4>
            <div class="contact-info">
                <i class="bi bi-geo-alt-fill"></i>
                <p>Ruang CRIC, lantai 2 Universitas Al-Azhar Indonesia </p>
            </div>
            <div class="contact-info">
                <i class="bi bi-envelope-fill"></i>
                <p>cric-dsfe@uai.ac.id</p>
            </div>
            <div class="contact-info">
                <i class="bi bi-telephone-fill"></i>
                <p>+62 8788731 6662</p>
            </div>
            </div>

            <div class="part3">
            <a href="https://www.linkedin.com/company/cric-dsfe/" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-linkedin"></i>
            </a>
            <a href="https://www.instagram.com/cric.dsfe.uai/" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-instagram"></i>
            </a>
            </div>
        </div>
        <div class="box2"></div>

        <!-- Horizontal Line -->
        <div class="horizontal-line"></div>

        <!-- Image and Watermark -->
        <div class="footer-bottom">
            <div class="footer-image">
                <img src="../img/logo.png" alt="logo">
                <span class="ucareer-text">UCareer</span>
            </div>
            <div class="watermark">
                <p>&copy; 2024 CRIC DSFE UAI. All rights reserved.</p>
            </div>
        </div>
        </div>
    </div>
  <!-- End Footer -->

</body>
</html>
