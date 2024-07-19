<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan</title>
    <link rel="stylesheet" href="/css/perusahaandetail-tentang-regis.css">
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
          <img src="/img/logo_circ-removebg-preview.png" alt="logo">
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
        <a href="{{ url('/listPerusahaan/' . encrypt($perusahaan->id)) }}"><button class="btn btn-primary btn-hover-slide active" id="button" type="button">Tentang</button></a>
        <a href="{{ url('/listPerusahaan/detail/lowongan/' . encrypt($perusahaan->id)) }}"><button class="btn btn-primary btn-hover-slide" id="button" type="button">Lowongan</button></a>
      </div>
    </div>
  <!--END PROFIL PERUSAHAAN  -->

  <!--KONTEN TENTANG PERUSAHAAN  -->
    <div id="content" class="mt-3">
      <div class="content-tentang">
        <div class="card1">
          <!-- DESKRIPSI PERUSAHAAN  -->
          <div class="card">
              <div class="card-header" id="subjudul">
                  Deskripsi
              </div>
              <div class="card-body" id="body">
                  <p class="card-text">{{ $perusahaan->deskripsi_perusahaan }}</p>
              </div>
          </div>
          <!-- ALAMAT PERUSAHAAN  -->
          <div class="card">
            <div class="card-header" id="subjudul">
                Alamat
            </div>
            <div class="card-body" id="body">
                <p class="card-text">{{ $perusahaan->Alamat_detail }}</p>
            </div>
          </div>
        </div>
        <!-- INFORMASI PERUSAHAAN  -->
        <div class="card2">
          <div class="card">
            <div class="card-header" id="subjudul">
                Informasi
            </div>
            <div class="card-body" id="body">
              <ul class="informasi-perusahaan">
                <li class="subinfo">
                  <div class="isi1">Tahun Berdiri  </div>
                  <div class="isi2"> {{ $perusahaan->tahun_berdiri }}</div>
                </li>
                <li class="subinfo">
                  <div class="isi1">Nomor Telpon  </div>
                  <div class="isi2">{{ $perusahaan->nomor_telepon }}</div>
                </li>
                <li class="subinfo">
                  <div class="isi1">Email  </div>
                  <div class="isi2">{{ $perusahaan->user->email }}</div>
                </li>
                <div class="link-perusahaan"><a href="{{ $perusahaan->url }}">Website Perusahaan</a></div>
              </ul>  
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END KONTEN TENTANG PERUSAHAAN  -->

  </div>
  </div>

  <!-- Footer -->
  @include('layout.navbar')

</body>
</html>