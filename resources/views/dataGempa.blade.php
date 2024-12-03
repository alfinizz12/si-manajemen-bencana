<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite('resources/css/style.css')
    <style>
        body {
            background-color: #faf7f0;
        }

        .statistik {
            margin: 40px 100px;
        }

        .sidebar {
            position: sticky;
            top: 25px;
            height: 22vh;
            width: 200px;
            padding: 10px;
            left: 5px;
            background-color: #494949;
            color: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .side {
            color: white;
        }

        .sidebar button {
            cursor: pointer;
            width: 180px;
            height: 40px;
            border: none;
            background-color: transparent;
            transition: background-color 0.3s, color 0.3s;
        }

        .sidebar button:hover {
            background-color: #fff;
            color: #494949;
        }

        .stat {
            height: auto;
            padding: 20px 25px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <x-navbar></x-navbar>

    <section class="statistik">
        <section class="riwayatGempa2 m-5">
            <div class="container row">

                <div class="sidebar col-4 text-center">
                    <button class="side" onclick="scrollToElement('stat1')">Peta Persebaran</button>
                    <button class="side" onclick="scrollToElement('stat2')">Riwayat Gempa</button>
                    <button class="side" onclick="scrollToElement('stat3')">Statistik Korban</button>
                </div>

                <div class="col row">
                    <div class="stat row" id="stat1">
                        <div>
                            <h4 class="mb-2" style="color: #494949;">Peta Persebaran dan Riwayat Gempa Bumi di
                                Indonesia
                            </h4>

                        </div>
                        <hr>
                    </div>
                    <div class="stat row" id="stat2">
                        <div class="col">
                            <img class="" src="assets/openmoji_earthquake.svg" alt="" height="28">
                            <h4 class="mb-2" style="color: #494949;">Riwayat Gempa Bumi di Indonesia</h4>
                        </div>
                        <div>

                        </div>
                        <hr>
                    </div>
                    <div class="stat row" id="stat3">
                        <div>
                            <img src="assets/wpf_statistics.svg" alt="" height="28">
                            <h4 class="ms-2 mb-2" style="color: #494949;">Statistik Korban dan Kerusakan Akibat Gempa Bumi </h4>

                            <hr>
                        </div>
                    </div>



                   
                </div>
            </div>
        </section>
    </section>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        function scrollToElement(id) {
            var element = document.getElementById(id);
            element.scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>
