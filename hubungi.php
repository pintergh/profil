<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Saya - Ghazi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Ghazi</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="karyaku.php">Karyaku</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link active" href="hubungi.php">Hubungi</a></li>
                    <li class="nav-item"><a class="nav-link" href="sosmed.php">Sosmed</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hubungi" class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0 mb-4">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-4">Hubungi Saya</h2>
                        <p class="text-center text-muted mb-4">Silakan kirim pesan melalui formulir di bawah ini.</p>
                        
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Nama Anda">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Email Anda">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pesan</label>
                                <textarea class="form-control" rows="4" placeholder="Tulis pesan..."></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="row mt-4 text-center">
                    <div class="col-md-4 mb-3">
                        <div class="card border-0 shadow-sm p-3">
                            <i class="bi bi-geo-alt-fill text-primary fs-3"></i>
                            <h6 class="mt-2">Lokasi</h6>
                            <p class="small text-muted">Banjarnegara, Jateng</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card border-0 shadow-sm p-3">
                            <i class="bi bi-whatsapp text-success fs-3"></i>
                            <h6 class="mt-2">WhatsApp</h6>
                            <p class="small text-muted">+62-7013-1918</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card border-0 shadow-sm p-3">
                            <i class="bi bi-envelope-fill text-danger fs-3"></i>
                            <h6 class="mt-2">Email</h6>
                            <p class="small text-muted">hindiag234@gmail.com</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="text-center py-4 bg-white text-muted border-top">
        © 2026 Ghazi | Siswa MTsN 1 Banjarnegara
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>