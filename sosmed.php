<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sosial Media - Ghazi</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- NAVBAR (tetap sama) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Ghazi</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

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
                        <a class="nav-link" href="karyaku.php">Karyaku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hubungi.php">Hubungi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="sosmed.php">Sosmed</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- SOSIAL MEDIA -->
    <section id="sosmed" class="container mt-5">
        <h2 class="text-center mb-4">Sosial Media Saya</h2>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow text-center">
                    <div class="card-body">
                        <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png"
                             width="80"
                             class="mb-3"
                             alt="Facebook">

                        <h5 class="card-title">Facebook</h5>
                        <p class="card-text">Gsaa HI</p>

                        <a href="https://www.facebook.com/"
                           target="_blank"
                           class="btn btn-primary">
                           Kunjungi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="text-center py-3 mt-5 bg-light text-muted">
        © 2026 Ghazi | Coding Website
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
