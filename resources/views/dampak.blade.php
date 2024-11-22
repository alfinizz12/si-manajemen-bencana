<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite('resources/css/style.css')
    <title>Dampak Gempa Bumi</title>
</head>

<body>
    <x-navbar></x-navbar>

    <section>


        <div class="aboutContainer container">
            <div class="d-flex flex-row mt-3">
                <button style="background: none; border:none; color:#3D5300; transform:scale(2);" onclick="window.location.href='tentangGempa.php'"><i class="bi bi-arrow-left-circle-fill"></i></button>
                <h3 class="ms-4 mt-4" style="color: #3D5300;">Dampak Gempa Bumi</h3>
            </div>
            <div class="row">
                <div class="mt-3">
                    <h4>Apa Saja Akibat yang Ditimbulkan oleh Gempa Bumi?</h4><br>
                    <img src="assets/image 7.svg" alt="Dampak Gempa Bumi" class="img-fluid" style="width: 500px;">
                    <p class="w-100 mt-3" style="text-align: justify;">
                        <br>1. Gempa bumi dapat merusak bangunan, jembatan, dan infrastruktur, bahkan menyebabkannya runtuh.
                        <br>2. Gempa bumi sering kali mengakibatkan hilangnya nyawa dan cedera serius.
                        <br>3. Gempa bumi dapat menyebabkan tsunami yang menghancurkan pantai dan daerah pesisir.
                        <br>4. Pergerakan tanah yang disebabkan oleh gempa bumi dapat menyebabkan tanah longsor dan runtuhnya tanah.
                        <br>5. Gempa bumi juga dapat merusak ekosistem dan mengganggu pasokan air bersih.
                    </p><br>
                    
                </div>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>