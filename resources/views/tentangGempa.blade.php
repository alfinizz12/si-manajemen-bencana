<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/style.css')
    <title>Tentang Gempa</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color:#ABBA7C;">
        <div class="container-fluid " style="color:#3D5300; font-weight:bold">
            <a class="navbar-brand" href="/" style="color:#3D5300;">SIGEMBI</a>
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

    <section class="p-4">
        <div class="container align-items-center">
            <h3 class="text-center text-bold mb-2">Tentang Gempa Bumi</h3>
            <div class="row gap-4">
                <div class="col wrapper" onclick="window.location.href='/earthquake-explained'">
                    <div class="image-box">
                        <img src="assets/pengertian.svg" alt="" width="100" height="100" />
                    </div>
                    <h6 class="text-center mt-2">Apa Itu Gempa?</h6>
                </div>
                <div class="col wrapper" onclick="window.location.href='penyebab.php'">
                    <div class="image-box">
                        <img src="assets/penyebab.svg" alt="" width="200" height="150" />
                    </div>
                    <h6 class="text-center mt-2">Apa Penyebab Gempa?</h6>
                </div>
                <div class="col wrapper" onclick="window.location.href='mitigasi.php'">
                    <div class="image-box">
                        <img src="assets/mitigasi.svg" alt="" width="200" height="150" />
                    </div>
                    <h6 class="text-center mt-2">Bagaimana Mitigasi Gempa?</h6>
                </div>
            </div>


            <div class="row mt-5 gap-4">
            <div class="col wrapper" onclick="window.location.href='dampak.php'">
                    <div class="image-box">
                        <img src="assets/dampak.svg" alt="" width="200" height="150" />
                    </div>
                    <h6 class="text-center mt-2">Apa Saja Dampak Gempa?</h6>
                </div>
                <div class="col wrapper" onclick="window.location.href='penanggulangan.php'">
                    <div class="image-box">
                        <img src="assets/penanggulangan.svg" alt="Unsplashed Random" width="200" height="150" />
                    </div>
                    <h6 class="text-center mt-2">Bagaimana Penanggulangan Gempa?</h6>
                </div>
                <div class="col wrapper" onclick="window.location.href='/earthquake-simulation'">
                    <div class="image-box">
                        <img src="assets/penanggulangan.svg" alt="" width="200" height="150" />
                    </div>
                    <h6 class="text-center mt-2">Bagaimana Proses Terjadi Gempa?</h6>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>