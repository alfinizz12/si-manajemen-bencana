<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Dampak Gempa Bumi</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color:#ABBA7C;">

        <div class="container-fluid " style="color:#3D5300; font-weight:bold">
            <a class="navbar-brand" href="home.php" style="color:#3D5300;">SIGEMBI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="tentangGempa.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Gempa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="apaItuGempa.php">Apa Itu Gempa?</a></li>
                            <li><a class="dropdown-item" href="penyebab.php">Penyebab Gempa</a></li>
                            <li><a class="dropdown-item" href="mitigasi.php">Mitigasi</a></li>
                            <li><a class="dropdown-item" href="dampak.php">Dampak</a></li>
                            <li><a class="dropdown-item" href="penanggulangan.php">Penanggulangan</a></li>
                            <li><a class="dropdown-item" href="simulasi.php">Simulasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="berita.php">Berita</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section>


        <div class="aboutContainer container">
            <div class="d-flex flex-row mt-3">
                <button style="background: none; border:none; color:#3D5300; transform:scale(2);" onclick="window.location.href='/about-earthquake'"><i class="bi bi-arrow-left-circle-fill"></i></button>
                <h3 class="ms-4 mt-4" style="color: #3D5300;">Simulasi Gempa Bumi</h3>
            </div>
            <div class="row">
                <div class="mt-3">
                    <h4>Bagaimana Proses Terjadinya Gempa Bumi?</h4><br>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cVgIy_HpA3k?si=IFLCIJkIrP0jt9B3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="mb-5"></iframe>
                    
                </div>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>