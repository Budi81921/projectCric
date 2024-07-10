@if($wishlistItems->isEmpty())
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCAREER</title>
  <link href="../css-bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="../css-bootstrap/bootstrap.min.css">
  <link href="../css/r_wishlist.css" rel="stylesheet">
  <script src="../js-bootstrap/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <!-- NAVIGASI BAR -->
    @include('layout.navbar')
    <!-- END NAVIGASI BAR -->


    <div class="wishlist-box">
        <div class="wishlist-content">
            <div class="wl-icon">
              <i class="bi bi-sim-slash-fill"></i>
            </div>
            <div class="heading-text">
              <h2>Tidak ada lowongan yang disimpan..</h2>
            </div>
            <div class="body-text">
              <p>Temukan pekerjaan yang sesuai dengan keinginanmu!</p>
              <p>Simpanlah ke dalam wishlist untuk akses yang lebih mudah di kemudian hari.</p>
            </div>
            <div class="searching-job">
              <a href="/lowongan" type="button" class="btn btn-outline-primary" id="searching-job-wl">Cari Lowongan</a>
            </div>
        </div>
    </div>
@else
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCAREER</title>
  <link href="../css-bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="../css-bootstrap/bootstrap.min.css">
  <link href="../css/r_wishlist-isi.css" rel="stylesheet">
  <script src="../js-bootstrap/bootstrap.bundle.min.js"></script>
  <script src="../js-bootstrap/bookmark-wl.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <!-- NAVIGASI BAR -->
    @include('layout.navbar')
    <!-- END NAVIGASI BAR -->
    <!-- JOB WISHLIST -->
    <div class="wl-container">
        <div class="job-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Lowongan yang kamu simpan</li>
                </ol>
            </nav>
        </div>
        <div class="wl-job">
            <div class="job-box" data-job-id="1">
                @foreach ($wishlistItems as $lowongan)
                <div class="btn-job">
                    <div class="card-body">
                        <div class="company-img">
                            <img src="../img/logo.png" id="img-company" alt="C" width="60px">
                        </div>
                        <div class="job-info">
                            <h5 class="job-title">{{$lowongan->title_lowongan}}</h5>
                            <h5 class="company-name" style="color: #1259a0">{{$lowongan->fkuserCompany}}</h5>
                            <p class="company-loc">{{$lowongan->lokasi}}</p>
                            <hr>
                            <div class="info1">
                                <i class="bi bi-hourglass-split"></i>
                                <h6 class="job-type">{{$lowongan->tipePekerjaan}}</h6>
                            </div>
                            <div class="info2">
                                <i class="bi bi-buildings-fill"></i>
                                <h6 class="job-loc">Kerja di Kantor</h6>
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
                                                            function displayFileName(inputId, labelId) {
                                                                var fileInput = document.getElementById(inputId);
                                                                var fileName = fileInput.files[0].name;
                                                                var uploadLabel = document.getElementById(labelId);

                                                                uploadLabel.innerHTML = fileName;
                                                                uploadLabel.style.display = 'flex';
                                                                uploadLabel.style.alignItems = 'center';
                                                                uploadLabel.style.justifyContent = 'center';
                                                            }
                                                        </script>
                                                    </form>
                                                    <button type="button" class="btn btn-primary" id="lamar-btn">LAMAR PEKERJAAN</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END POP UP APPLY-->
                                </div>
                                <div class="bookmark" id="bookmarkIcon" data-job-id="1">
                                    <form action="{{ route('wishlist.toggleBookmark', $lowongan->id) }}" method="POST" class="bookmark-form" id="bookmarkForm-{{ $lowongan->id }}">
                                        @csrf
                                        <button type="submit" class="bookmark-button">
                                            <i class="bi bi-bookmark-fill bookmarked" id="bookmarkIcon-{{ $lowongan->id }}"></i>
                                        </button>
                                    </form>
                                </div>

                                <script>
                                    document.querySelectorAll('.bookmark-form').forEach(function(form) {
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
                @endforeach
            </div>
        </div>
    </div>
@endif
    <!-- Footer -->
    @include('layout.footer')
    <!-- End Footer -->
</body>
</html>

<!-- teest -->