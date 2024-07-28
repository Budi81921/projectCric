<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan - Pelamar</title>
    <link rel="stylesheet" href="/companycss/company-detailpelamar.css">
    <link rel="stylesheet" href="/css-bootstrap/bootstrap.css">
    <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<!--ISI KONTEN-->
@include('layout.company.sidebarprofilecompany')

  <!--RIGHT-VIEW-->
  <div class="right-view">
    <!--NAVBAR-->
    @include('layout.company.navbarcompany')
      <!--END NAVBAR-->

      <!--ISI DETAIL PELAMAR-->
      <div class="detailpelamar">
          <div class="pelamar">
              <div class="back"> <a href="/company/profile/lowongan/changestatus">
                  <i class="bi bi-arrow-left"></i>
                  </a>
              </div>
              <div class="isi-detail">
                  <div class="detail">
                      <div class="profil-detail">
                          <div class="foto">
                              <img src="{{ asset('storage/userCandidate/' . $detailLowongan->userCandidate->id . '/fotoProfileCandidate/' . $detailLowongan->userCandidate->fotoProfilCandidate) }}" alt="foto profil">
                          </div>
                          <div class="info">
                              <h6>{{ $detailLowongan->userCandidate->users->nama_lengkap }}</h6>
                              <p>{{ $detailLowongan->userCandidate->universitas }}</p>
                          </div>
                      </div>
                      <div class="cv-portfol">
                          <div class="CV">
                              <a href="{{ url('storage/userCandidate/' . $detailLowongan->userCandidate->users->id . '/cv/' . $detailLowongan->userCandidate->cv) }}" download><i class="bi bi-download"></i>CV</a>
                          </div>
                          <div class="portfolio">
                              <a href="{{ url('storage/userCandidate/' . $detailLowongan->userCandidate->users->id . '/cv/' . $detailLowongan->userCandidate->portofolio) }}" download><i class="bi bi-download"></i>Portofolio</a>
                          </div>
                      </div>
                  </div>
                  <div class="detail2">
                          <div class="desc">
                              <h6>Deskripsi Diri</h6>
                          </div>
                          <div class="isi-desc">
                              <p>{{ $detailLowongan->userCandidate->deskripsi }}</p>
                          </div>
                  </div>
              </div>
          </div>
      </div>
      <!--END ISI DETAIL PELAMAR--> 
  </div>
  <!--END RIGHT-VIEW-->
</div>
<!--END ISI KONTEN-->

<!-- Footer -->
@include('layout.footer')
<!-- End Footer -->

  <script>
    function loadCoverImage(event) {
        const coverImage = document.getElementById('cover-image');
        coverImage.src = URL.createObjectURL(event.target.files[0]);
        coverImage.onload = function() {
            URL.revokeObjectURL(coverImage.src); // release memory
        }
    }

    function loadProfileImage(event) {
        const profileImage = document.getElementById('profile-image');
        profileImage.src = URL.createObjectURL(event.target.files[0]);
        profileImage.onload = function() {
            URL.revokeObjectURL(profileImage.src); // release memory
        }
    }
</script>
</body>
</html>