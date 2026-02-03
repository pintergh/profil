<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Karyaku - Ghazi</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- NAVBAR (SELALU IKUT) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Ghazi</a>

            <!-- Tombol hamburger (HP) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Navbar -->
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.php">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.php">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="karyaku.php">Karyaku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hubungi.php">Hubungi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sosmed.php">Sosmed</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- JARAK KARENA NAVBAR FIXED -->
    <div style="margin-top: 90px;"></div>

    <!-- HALAMAN KARYAKU -->
    <section class="container">
        <h3 class="text-center mb-4">Karyaku</h3>
        <p class="text-center text-muted mb-5">
            Beberapa karya dan project website yang pernah saya buat
        </p>

        <div class="row g-4">
            <!-- KARYA 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="https://picsum.photos/400/250?random=11" class="card-img-top" alt="Karya 1">
                    <div class="card-body">
                        <h5 class="card-title">Website Profil Pribadi</h5>
                        <p class="card-text">
                            Website sederhana menggunakan HTML, CSS, dan Bootstrap
                            untuk menampilkan profil diri.
                        </p>
                    </div>
                    <div class="card-footer text-center bg-white">
                        <span class="badge bg-primary">HTML</span>
                        <span class="badge bg-success">CSS</span>
                        <span class="badge bg-info text-dark">Bootstrap</span>
                    </div>
                </div>
            </div>

            <!-- KARYA 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="https://picsum.photos/400/250?random=12" class="card-img-top" alt="Karya 2">
                    <div class="card-body">
                        <h5 class="card-title">Halaman Galeri</h5>
                        <p class="card-text">
                            Halaman galeri dengan layout grid responsif
                            menggunakan Bootstrap.
                        </p>
                    </div>
                    <div class="card-footer text-center bg-white">
                        <span class="badge bg-primary">HTML</span>
                        <span class="badge bg-info text-dark">Bootstrap</span>
                    </div>
                </div>
            </div>

            <!-- KARYA 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="https://picsum.photos/400/250?random=13" class="card-img-top" alt="Karya 3">
                    <div class="card-body">
                        <h5 class="card-title">Navbar Responsif</h5>
                        <p class="card-text">
                            Navbar yang responsif dan selalu ikut (fixed-top)
                            untuk website multipage.
                        </p>
                    </div>
                    <div class="card-footer text-center bg-white">
                        <span class="badge bg-primary">HTML</span>
                        <span class="badge bg-info text-dark">Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="text-center py-3 mt-5 text-muted">
        © 2026 Ghazi | Coding Website
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
