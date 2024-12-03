<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    @vite('resources/css/style.css')
    <title>Tentang Gempa</title>
    <style>
        .titleTentang {
            color: white;
        }

        .isi {
            margin: 10px;
        }

        .contentGempa {
            height: auto;
            padding: 20px;
            margin-bottom: 20px;
        }

        .sidebar {
            position: sticky;
            top: 20px;
            height: 42vh;
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
    </style>
</head>

<body class="aboutBody">
    <x-navbar></x-navbar>

    <div class="titleTentang text-center">
        <h1 style="font-size: 80px;">Tentang Gempa</h1>
        <h6 style="font-size: 20px;">Apa saja yang perlu diketahui tentang gempa?</h6>
        <div class="arrow bounce">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
            </svg>
        </div>
    </div>

    <section class="contentOfTentang">
        <div class="container row isi">
            <!-- Sticky Sidebar -->
            <div class="sidebar col-4 text-center">
                <button class="side" onclick="scrollToElement('apagempa1')">Apa itu Gempa?</button>
                <button class="side" onclick="scrollToElement('apagempa2')">Penyebab Gempa</button>
                <button class="side" onclick="scrollToElement('apagempa3')">Mitigasi Gempa</button>
                <button class="side" onclick="scrollToElement('apagempa4')">Dampak Gempa</button>
                <button class="side" onclick="scrollToElement('apagempa5')">Penanggulangan</button>
                <button class="side" onclick="scrollToElement('apagempa6')">Simulasi Gempa</button>
            </div>

            <!-- Content -->
            <div class="col mb-5">
                <div class="contentGempa" id="apagempa1">
                    <h4>Apa Itu Gempa Bumi?</h4>
                    <p style="text-align: justify;">Gempa bumi adalah getaran bumi yang terjadi akibat pelepasan energi
                        di dalam bumi secara tiba-tiba sehingga efeknya dapat dirasakan sampai ke permukaan bumi.
                        Penyebab gempa bumi dapat berupa dinamika bumi (tektonik), aktivitas gunung api, akibat meteor
                        jatuh, longsoran (di bawah muka air laut), atau ledakan bom di bawah permukaan.
                        <br><br>
                        Ingin tahu lebih lanjut tentang gempa bumi? Tonton video di bawah ini untuk penjelasan
                        selengkapnya!

                    </p>
                    <iframe width="800" height="320"
                        src="https://www.youtube.com/embed/M_LMj9FJAGs?si=OPMVGbGNfvXc8moy" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="mb-5"></iframe>
                    <hr>
                </div>

                <div class="contentGempa" id="apagempa2">
                    <h4>Apa saja Penyebab Gempa Bumi?</h4>
                    <div class="mt-3">
                        <h5>1. Pergeseran Lempeng Bumi</h5>
                        <img src="assets/pergeseran lempeng.svg" alt="Pergeseran Lempeng Bumi" class="img-fluid"
                            style="width: 500px;">
                        <p class="w-100 mt-3" style="text-align: justify;">
                            Sebab utama yang dapat memicu terjadinya gempa bumi adalah adanya pelepasan energi,
                            disebabkan pergeseran Lempeng Bumi. Semakin lama energi itu akan membesar dan akan mencapai
                            keadaan maximun. Apabila pinggiran lempeng tidak bisa menahan energi tesebut maka akan
                            mengakibatkan terjadinya gempa bumi.
                        </p>
                    </div>
                    <div class="mt-3">
                        <h5>2. Letusan Gunung Berapi</h5>
                        <img src="assets/image 4.svg" alt="Letusan Gunung Berapi" class="img-fluid"
                            style="width: 500px;">
                        <p class="w-100 mt-3" style="text-align: justify;">
                            Salah satu pemicu terjadinya gempa bumi lainnya adalah adanya pergeseran magma di dalam
                            gunung berapi. Gempa ini diakibatkan adanya tekanan gas yang sangat besar pada bagian
                            sumbatan kawah.
                        </p>
                    </div>
                    <div class="mt-3">
                        <h5>3. Aktivitas Manusia</h5>
                        <img src="assets/aktivitas manusia.svg" alt="Aktivitas Manusia" class="img-fluid"
                            style="width: 500px;">
                        <p class="w-100 mt-3" style="text-align: justify;">
                            Gempa bumi yang disebabkan oleh aktivitas manusia disebut gempa bumi buatan. Aktivitas-
                            aktivitas manusia yang menimbulkan gempa bumi buatan ini berupa aktivitas yang besar dan
                            menimbulkan banyak getaran. Beberapa contoh aktivitas manusia yang menimbulkan gempa bumi
                            buatan antara lain peledakan dinamit, peluncuran nuklir, peruntuhan gedung dan lain
                            sebagainya.
                        </p>
                    </div>
                    <hr>
                </div>

                <div class="contentGempa" id="apagempa3">
                    <div>
                        <h4>Apa Saja Upaya Mitigasi Gempa Bumi yang Dapat Dilakukan?</h4>
                        <p class="w-100 mt-3" style="text-align: justify;">
                            Terdapat beberapa upaya mitigasi yang dapat dilakukan sebelum terjadinya gempa bumi, yaitu:
                        </p>
                        <ol style="text-align: justify;">
                            <li>Membangun konstruksi bangunan yang tahan getaran atau gempa. Hal ini bisa dilakukan
                                terutama di daerah-daerah yang rawan terjadi gempa bumi. Sebagai contoh adalah Jepang,
                                negara yang sangat rawan terjadi gempa. Bangunan-bangunan di Jepang dirancang agar tahan
                                terhadap gempa.</li>
                            <li>Memperkuat bangunan agar sesuai dengan standar kualitas bangunan.</li>
                            <li>Untuk fasilitas umum, harus dibangun dengan kualitas tinggi.</li>
                            <li>Memperkuat bangunan-bangunan vital yang sifatnya penting dan sering dikunjungi banyak
                                orang.</li>
                            <li>Merencanakan penempatan pemukiman untuk mengurangi tingkat kepadatan hunian di daerah
                                yang rawan gempa bumi.</li>
                            <li>Zonasi daerah-daerah yang rawan gempa bumi dan pengaturan lahan.</li>
                            <li>Membekali pendidikan kepada masyarakat tentang pentingnya mengetahui cara penyelamatan
                                ketika terjadi gempa bumi.</li>
                            <li>Melakukan penyuluhan kepada masyarakat dan praktek penyelamatan diri dari bencana gempa
                                bumi.</li>
                            <li>Turut serta dalam pelatihan berbagai program upaya penyelamatan, kewaspadaan masyarakat
                                terhadap gempa bumi, serta pelatihan pemadam kebakaran dan pertolongan pertama saat
                                menghadapi bahaya.</li>
                            <li>Selalu mempersiapkan alat-alat penting, seperti pemadam kebakaran, peralatan penggalian,
                                dan lainnya.</li>
                            <li>Melatih anggota keluarga untuk melakukan kegiatan tanggap darurat, termasuk pembentukan
                                kelompok penyelamat bencana alam.</li>
                        </ol>
                        <p>Untuk lebih jelasnya, simak video berikut ini!</p>


                        <iframe width="800" height="315"
                            src="https://www.youtube.com/embed/gnXosx0znS4?si=yy41iRm1Ut1GliOC"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="mb-5"></iframe>
                        <hr>
                    </div>
                </div>
                <div class="contentGempa" id="apagempa4">
                    <div class="row">
                        <div>
                            <h4>Apa Saja Akibat yang Ditimbulkan oleh Gempa Bumi?</h4><br>
                            <img src="assets/image 7.svg" alt="Dampak Gempa Bumi" class="img-fluid"
                                style="width: 500px;">
                            <p class="w-100 mt-3" style="text-align: justify;">
                                Berikut adalah beberapa dampak gempa bumi yang perlu diwaspadai:
                            </p>
                            <ol style="text-align: justify;">
                                <li>Gempa bumi dapat merusak bangunan, jembatan, dan infrastruktur, bahkan
                                    menyebabkannya runtuh.</li>
                                <li>Gempa bumi sering kali mengakibatkan hilangnya nyawa dan cedera serius.</li>
                                <li>Gempa bumi dapat menyebabkan tsunami yang menghancurkan pantai dan daerah pesisir.
                                </li>
                                <li>Pergerakan tanah yang disebabkan oleh gempa bumi dapat menyebabkan tanah longsor dan
                                    runtuhnya tanah.</li>
                                <li>Gempa bumi juga dapat merusak ekosistem dan mengganggu pasokan air bersih.</li>
                            </ol>
                            <hr>


                        </div>
                    </div>
                </div>
                <div class="contentGempa" id="apagempa5">
                    <h4>Bagaimana Cara Penanggulangan Gempa Bumi?</h4>
                    <p style="text-align: justify;">
                        Penanggulangan gempa bumi mencakup langkah-langkah yang diambil untuk merespons dan mengatasi
                        bencana saat dan setelah terjadi, dengan tujuan untuk mengurangi dampak langsung dan membantu
                        pemulihan.
                    </p>

                    <h5>1. Saat Terjadi Gempa Bumi</h5>
                    <p style="text-align: justify;">
                        <b>Jika berada di dalam bangunan:</b>
                    </p>
                    <ul style="text-align: justify;">
                        <li>Lindungi kepala dan badan dari reruntuhan bangunan, misalnya dengan berlindung di bawah
                            meja.</li>
                        <li>Cari tempat yang paling aman dari reruntuhan dan jauhkan diri dari jendela berkaca.</li>
                        <li>Berlari keluar dari bangunan jika masih memungkinkan.</li>
                    </ul>

                    <p style="text-align: justify;">
                        <b>Jika berada di luar bangunan atau area terbuka:</b>
                    </p>
                    <ul style="text-align: justify;">
                        <li>Jauhi bangunan seperti gedung, tiang listrik, atau pohon.</li>
                        <li>Perhatikan tanah tempat berpijak dan segera pindah jika terjadi rekahan tanah.</li>
                    </ul>

                    <p style="text-align: justify;">
                        <b>Jika berada dalam kendaraan:</b>
                    </p>
                    <ul style="text-align: justify;">
                        <li>Segera keluar dan menjauh dari kendaraan jika terjadi pergeseran atau kebakaran.</li>
                        <li>Perhatikan tanah tempat berpijak dan segera pindah jika terjadi rekahan tanah.</li>
                        <li>Jika berada di pantai, segera menjauh untuk menghindari kemungkinan tsunami.</li>
                        <li>Jika berada di pegunungan, hindari daerah yang rawan longsor.</li>
                    </ul>

                    <p>Untuk lebih jelasnya, simak video berikut ini!</p>
                    <iframe width="800" height="315"
                        src="https://www.youtube.com/embed/xPWgX7hf9Pk?si=mAuGPBUIGXMO-rTX"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="mb-5">
                    </iframe>

                    <h5>2. Setelah Terjadi Gempa Bumi</h5>
                    <ul style="text-align: justify;">
                        <li>Waspada terhadap gempa susulan.</li>
                        <li>Jika berada dalam ruangan, segera evakuasi diri setelah gempa berhenti.</li>
                        <li>Periksa potensi kebakaran, kebocoran gas, dan arus pendek listrik.</li>
                        <li>Hindari masuk ke dalam bangunan atau daerah sekitar lokasi gempa.</li>
                        <li>Dapatkan informasi terbaru mengenai gempa bumi dari sumber terpercaya, seperti radio.</li>
                    </ul>


                    <iframe width="800" height="315"
                        src="https://www.youtube.com/embed/HMUOu8MqvmU?si=o4wbtERxGL6vzM9q"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="mb-5"></iframe>
                    <hr>
                </div>

                <div class="contentGempa" id="apagempa6">
                    <h4>Bagaimana Proses Terjadinya Gempa Bumi?</h4><br>
                    <iframe width="800" height="315"
                        src="https://www.youtube.com/embed/cVgIy_HpA3k?si=IFLCIJkIrP0jt9B3"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="mb-5"></iframe>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
