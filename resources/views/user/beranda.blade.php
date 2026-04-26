<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil UNHASY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="#">UNHASY</a>
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



<!-- Hero -->
<section class="bg-light text-center p-5">
  <div class="container">
    <h1 class="display-5 fw-bold">Universitas Hasyim Asy'ari</h1>
    <p class="lead">Membangun Generasi Unggul Berbasis Nilai-Nilai Islam</p>
    <a href="#tentang" class="btn btn-success">Pelajari Lebih Lanjut</a>
  </div>
</section>

<!-- Tentang -->
<section id="tentang" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Tentang UNHASY</h2>
    <p class="text-center">
      Universitas Hasyim Asy'ari (UNHASY) adalah perguruan tinggi yang berkomitmen 
      mencetak lulusan berkualitas dengan integritas tinggi, berbasis nilai-nilai keislaman.
    </p>
  </div>
</section>

<!-- Fakultas -->
<section id="fakultas" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-4">Fakultas</h2>
    <div class="row">
      
      <div class="col-md-4">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Fakultas Teknik</h5>
            <p class="card-text">Program studi teknik yang berorientasi pada teknologi modern.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Fakultas Ekonomi</h5>
            <p class="card-text">Mencetak lulusan yang unggul dalam bidang bisnis dan manajemen.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Fakultas Agama Islam</h5>
            <p class="card-text">Mengembangkan ilmu keislaman yang moderat dan berkualitas.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Kontak -->
<section id="kontak" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Kontak</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Nama">
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Email">
          </div>
          <div class="mb-3">
            <textarea class="form-control" rows="3" placeholder="Pesan"></textarea>
          </div>
          <button class="btn btn-success w-100">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-success text-white text-center p-3">
  <p class="mb-0">&copy; 2026 UNHASY. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>