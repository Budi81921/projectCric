<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pelamar - Edit Biodata</title>
    <link rel="stylesheet" href="/Layoutcss/sidebarprofilecandidate.css">
    <link rel="stylesheet" href="/css-bootstrap/bootstrap.css">
    <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>


<div class="profilpelamar">
    <div class="sidebarbiodata">
      <div class="biosingkat">
          <div class="profil">
            <ul>
              <li><i class="bi bi-person-circle"></i></li>
              <li class="nama">{{ Auth::user()->nama_lengkap }}</li>
            </ul>
          </div>
          <div class="kampus">
            <p>{{ Auth::user()->candidate->universitas }}</p>
          </div>
      </div>
    <!-- END BIODATA SINGKAT-->
 
    
    <!--SIDEBAR-->
      <div class="sidebar">
        <nav class="nav flex-column">
          <a class="nav-link active" aria-current="page"  href="../HTML/profilpelamar-previewbiodata.html"><i class="bi bi-person-fill-gear"></i>Biodata</a>
          <a class="nav-link" href="../HTML/profilpelamar-previewresume.html"><i class="bi bi-person-vcard-fill"></i>Resume</a>
          <a class="nav-link" href="../HTML/profilpelamar-joblist.html"><i class="bi bi-clipboard-fill"></i>Job List</a>
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="bi bi-box-arrow-right"></i>Log out</a>
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
                        <a href="{{ route('logout') }}" type="button" class="btn btn-danger" id="confirmLogout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        </nav>
      </div>
    </div> 
  