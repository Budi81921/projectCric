<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pelamar - Edit Biodata</title>
    <link rel="stylesheet" href="/Layoutcss/sidebarProfileCompany.css">
    <link rel="stylesheet" href="/css-bootstrap/bootstrap.css">
    <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>


<div class="profil-view">
  <div class="sidebar">
    <div class="logo-brand">
      <img src="/img/logo_circ-removebg-preview.png" alt="logo" width="45px">
      <span class="text-ucareer">UCareer</span>
    </div>
    <div class="option-sidebar">
      <nav class="nav flex-column">
        <a class="nav-link active" id="opsi" aria-current="page"  href="/company/profile"><i class="bi bi-person-circle"></i>Profil</a>
        <a class="nav-link" id="opsi" href="/company/profile/lowongan"><i class="bi bi-bag-fill"></i>Lowongan</a>
        <a class="nav-link" id="opsi" href="/company/profile/pelamar"><i class="bi bi-clipboard2-check-fill"></i>Pelamar</a>
        <a class="nav-link" id="opsi" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="bi bi-box-arrow-right"></i>Log out</a>
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah kamu yakin ingin keluar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="{{ route('company.logout') }}"  class="btn btn-danger" id="confirmLogout">Logout</a>
                </div>
            </div>
        </div>
      </div>
    </nav>
  </div>
</div>