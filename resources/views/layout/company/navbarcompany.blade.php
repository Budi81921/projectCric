<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pelamar - Edit Biodata</title>
    <link rel="stylesheet" href="/Layoutcss/navbarcompany.css">
    <link rel="stylesheet" href="/css-bootstrap/bootstrap.css">
    <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>


<div class="background">
  <img src="/img/background.jpg" alt="background">
  <div class="content-background">
    <div class="jargon">
        <h4>Find the Right Candidates for your Business</h4>
        <p>Your success comes from Recruitment!</p>
    </div>
    <div class="company-akun">
        <div class="icon-company">
            <i class="bi bi-buildings-fill"></i>
        </div>
        <div class="name-of-company">
            <p>{{ Auth::user()->nama_lengkap }}</p>
        </div>
    </div>
  </div>
</div>