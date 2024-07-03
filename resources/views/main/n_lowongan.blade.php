<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCAREER</title>
  <link href="../css-bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="../css/n_lowongan.css" rel="stylesheet">
  <script src="../js-bootstrap/bootstrap.bundle.min.js"></script>
  <script src="../js-bootstrap/dropdown.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <!-- NAVIGASI BAR -->
    <nav class="navbar navbar-expand-lg" id="myNavbar">
        <div class="container-fluid">
        <a class="navbar-brand" href="../html/n_home.html">
            <img src="../img/logo.png" alt="logo" class="navbar-logo" width="60px">UCareer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../html/n_lowongan.html">Lowongan Kerja</a>
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

            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../html/register.html">Daftar</a>
            </li>
            <li class="login-button">
                <button class="btn btn-outline-warning" href="#">MASUK</button>
            </li>
            </ul>
            </form>
        </div>
        </div>
    </nav>
    <!-- END NAVIGASI BAR -->

    <div class="job-view">
        <!-- Searching -->
        <div class="searching-filter">
            <!-- Formulir Pencarian -->
            <div class="searching-box">
                <form>
                    <div class="form d-flex" role="search">
                    <input class="form-control" type="search" placeholder="Cari Pekerjaan..." aria-label="Cari Pekerjaan...">
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
            <div class="job-box">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Lowongan -->

</body>
</html>