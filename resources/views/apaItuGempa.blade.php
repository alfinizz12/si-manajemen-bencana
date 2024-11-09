<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Apa Itu Gempa?</title>
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
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/about-earthquake" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link" href="/berita">Berita</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section>
        
        
        <div class="aboutContainer container">
            <div class="d-flex flex-row mt-3">
                <button style="background: none; border:none; color:#3D5300; transform:scale(2);" onclick="window.location.href='/about-earthquake'"><i class="bi bi-arrow-left-circle-fill"></i></button>
                <h3 class="ms-4 mt-4" style="color: #3D5300;">Apa Itu Gempa Bumi?</h3>
            </div>
            <div class="row">
                <p class="w-100 mt-3" style="text-align: justify;">
                    Gempa bumi adalah getaran bumi yang terjadi akibat pelepasan energi di dalam bumi secara tiba-tiba sehingga efeknya dapat dirasakan sampai ke permukaan bumi. Penyebab gempa bumi dapat berupa dinamika bumi (tektonik), aktivitas gunung api, akibat meteor jatuh, longsoran (di bawah muka air laut), atau ledakan bom di bawah permukaan. <br>
                    <br>
                    Ingin tahu lebih lanjut tentang gempa bumi? Tonton video di bawah ini untuk penjelasan selengkapnya!
                </p>

                <iframe width="300" height="320" src="https://www.youtube.com/embed/M_LMj9FJAGs?si=OPMVGbGNfvXc8moy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="mb-5"></iframe>

            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>