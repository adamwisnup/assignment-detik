<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital</title>
    <!-- Link Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .jumbotron {
            background-color: #007bff;
            color: #fff;
            padding: 100px 20px;
        }

        .features {
            padding: 50px 0;
        }

        .feature-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Perpustakaan Digital</a>

        </div>
    </nav>


    <div class="jumbotron text-center">
        <h1 class="display-4">Selamat Datang di Perpustakaan Digital</h1>
        <p class="lead">Temukan dan baca berbagai koleksi buku digital kami secara gratis.</p>
        <a class="btn btn-primary btn-lg" href="/login" role="button">Masuk Perpustakaan</a>
    </div>


    <div id="features" class="container features">
        <div class="row">
            <div class="col-md-4">
                <i class="bi bi-book feature-icon"></i>
                <h3>Koleksi Buku Digital</h3>
                <p>Temukan berbagai jenis buku digital dari berbagai genre.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-search feature-icon"></i>
                <h3>Pencarian Cepat</h3>
                <p>Gunakan fitur pencarian untuk menemukan buku dengan mudah.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-cloud-download feature-icon"></i>
                <h3>Download Gratis</h3>
                <p>Download buku digital favorit Anda secara gratis.</p>
            </div>
        </div>
    </div>

    <footer class="footer text-center">
        <p>&copy; 2024 Perpustakaan Digital. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
