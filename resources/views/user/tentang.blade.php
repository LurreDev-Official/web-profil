<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tentang UNHASY</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="index.html">UNHASY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="{{ url('/beranda') }}">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/tentang') }}">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/fakultas') }}">Fakultas</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/kontak') }}">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<section class="bg-light text-center py-5">
  <div class="container">
    <h1 class="fw-bold">Tentang Universitas Hasyim Asy'ari</h1>
    <p class="lead">Mengenal lebih dekat UNHASY</p>
  </div>
</section>

<!-- Sejarah -->
<section class="py-5">
  <div class="container">
    <h2 class="mb-4">Sejarah Singkat</h2>
    <p>
      Universitas Hasyim Asy'ari (UNHASY) merupakan perguruan tinggi yang berdiri 
      dengan tujuan mencetak generasi unggul yang berlandaskan nilai-nilai keislaman 
      dan keilmuan. Berlokasi di Jombang, UNHASY terus berkembang menjadi salah satu 
      pusat pendidikan yang berkontribusi dalam pembangunan bangsa.
    </p>
  </div>
</section>

<!-- Visi Misi -->
<section class="bg-light py-5">
  <div class="container">
    <div class="row">
      
      <div class="col-md-6">
        <h3>Visi</h3>
        <p>
          Menjadi universitas unggul dalam pengembangan ilmu pengetahuan, 
          teknologi, dan seni berbasis nilai-nilai Islam.
        </p>
      </div>

      <div class="col-md-6">
        <h3>Misi</h3>
        <ul>
          <li>Menyelenggarakan pendidikan berkualitas</li>
          <li>Mengembangkan penelitian inovatif</li>
          <li>Melaksanakan pengabdian kepada masyarakat</li>
          <li>Menanamkan nilai-nilai keislaman</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- Keunggulan -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Keunggulan UNHASY</h2>
    <div class="row text-center">

      <div class="col-md-4">
        <div class="p-3 border rounded">
          <h5>Pendidikan Berkualitas</h5>
          <p>Kurikulum modern dan relevan dengan kebutuhan industri.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-3 border rounded">
          <h5>Lingkungan Islami</h5>
          <p>Membentuk karakter mahasiswa yang berakhlak mulia.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-3 border rounded">
          <h5>Dosen Profesional</h5>
          <p>Dibimbing oleh tenaga pengajar yang kompeten di bidangnya.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-success text-white text-center py-3">
  <p class="mb-0">&copy; 2026 UNHASY</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>