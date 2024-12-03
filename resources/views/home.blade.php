<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/style.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">
    <title>Home</title>

    <style>
        body {
            background-color: #FAF7F0;

        }
    </style>
</head>

<body class="homeBody">
    <x-navbar></x-navbar>
    <section class="upperSection">
        <div class="upper container">
            <div class="row">

                <div class="col-7">
                    <div class="upperTitle">
                        <div>
                            <div id="DisplayClock" class="clock ms-2" onload="showTime()" style="font-size: 20px;">
                            </div>
                            <h1 class="" style="font-weight: bold; font-size: 65px;">
                                Sistem Informasi <br> Gempa Bumi
                            </h1>
                        </div>
                        <h5 class="">
                            Sistem informasi untuk memahami tentang <br> pengetahuan gempa bumi
                        </h5>
                    </div>

                    <div class="mt-3">
                        <button class="upperBtn" onclick="window.location.href='/about-earthquake'">Selengkapnya <i
                                class="bi bi-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col ms-5">
                    <h2 class="mt-2">Berita Terbaru</h2>
                    @foreach ($news as $n)
                        <div class="row mb-3" onclick="window.location.href='news1.blade.php'" style="cursor: pointer;">
                            <div class="col-4">
                                <img src="assets/image-2.svg" alt="" style="width: 130px;">
                            </div>
                            <div class="col">
                                <a class="miniLink">{{ $n->title }}</a>
                                <p>{{ $n->date }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>



    <section class="sectApaGempa">
        <div class="tentangGempa container mb-5">
            <div class="">
                <!-- <div class="d-flex mt-4">
                    <img src="assets/Vector.svg" alt="" height="28">
                    <h3 class="ms-2 mb-2" style="color: #3D5300;">Tentang Gempa Bumi</h3>
                </div> -->
                <h5 style="font-size: 30px;" class="mt-3 text-center">Apa Itu Gempa Bumi?</h5>
                <p class="text-center ms-5 me-5" style="font-size: 18px;">
                    Gempa bumi adalah getaran bumi yang terjadi akibat pelepasan energi di dalam bumi secara tiba-tiba
                    sehingga 3efeknya dapat dirasakan sampai ke permukaan bumi. Penyebab gempa bumi dapat berupa
                    dinamika bumi (tektonik), aktivitas gunung api, akibat meteor jatuh, longsoran (di bawah muka air
                    laut), atau ledakan bom di bawah permukaan. <br>
                    <br>
                    Pelajari lebih lanjut tentang gempa bumi!
                </p><br>

                <!-- <iframe width="500" height="320" src="https://www.youtube.com/embed/M_LMj9FJAGs?si=OPMVGbGNfvXc8moy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->

                <div class="bagianBtn">
                    <button class="btn btn-warning rounded-5 mt-1 mx-auto justify-content-center"
                        style="width: min-content;"
                        onclick="window.location.href='/about-earthquake'">Selengkapnya</button>
                </div>
            </div>
        </div>

    </section>

    <section class="layanan" style="margin: 70px 150px 10px 150px;">
        <div class="container mb-5 mt-5">
            <div class="d-flex ">
                <img src="assets/Vector-1.svg" alt="" height="28">
                <h3 class="ms-2 mb-2" style="color: #494949;">Layanan</h3>
            </div>
            <h5 class="mt-3">Frequently Asked Questions (FAQ)</h5>
            <div class="containerFaq mt-3">
                <div class="accordion flex-col gap-3">

                    <div class="accordion-item mt-5">
                        <button id="accordion-button-2" aria-expanded="false">
                            <span class="accordion-title">Apakah gempa bisa diprediksi atau diramalkan akan terjadi
                                kapan, dimana, dan besaran kekuatannya?
                                <br> Bila bisa diprediksi atau diramalkan, apakah tanda-tanda alam yang
                                mendahuluinya?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Sampai saat ini, BMKG sebagai instansi pemerintah yang memonitoring kejadian gempa bumi
                                di indonesia selalu menginfokan kepada masyarakat bahwa gempa bumi tektonik tidak dapat
                                diprediksi waktu kejadiannya, baik hari, tanggal, jam , menit hingga detik. <br>
                            </p>
                        </div>
                    </div><br>

                    <div class="accordion-item">
                        <button id="accordion-button-2" aria-expanded="false">
                            <span class="accordion-title">Sebagai masyarakat umum yang tinggal di daerah rawan gempa
                                bumi, apa yang bisa dipersiapkan sebelumnya untuk menghadapi ancaman bencana gempa
                                bumi?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <ol>
                                <li>Mengenali lingkungan sekitar: 
                                    Pelajari tempat tinggal atau tempat kerja untuk mengetahui lokasi paling aman untuk berlindung dan rute evakuasi.
                                </li>
                                <li>Mengevaluasi bangunan: 
                                    Evaluasi dan renovasi struktur bangunan agar lebih tahan terhadap gempa bumi.
                                </li>
                                <li>Mengatur barang berat: 
                                    Pastikan benda atau material berat ditempatkan di bagian bawah untuk mencegah risiko tertimpa saat gempa.
                                </li>
                                <li>Menyiapkan tas siaga bencana: 
                                    Siapkan tas yang berisi:
                                    <ul>
                                        <li>Makanan ringan (tidak mudah basi)</li>
                                        <li>Air minum (minimal 2 liter)</li>
                                        <li>Surat-surat penting</li>
                                        <li>Uang tunai secukupnya</li>
                                        <li>Peluit</li>
                                        <li>Senter</li>
                                        <li>Perlengkapan mandi</li>
                                        <li>Pakaian untuk 2–3 hari</li>
                                        <li>Alat komunikasi (ponsel atau radio)</li>
                                        <li>Obat-obatan P3K</li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                        
                    </div><br>
                    <div class="accordion-item">
                        <button id="accordion-button-3" aria-expanded="false">
                            <span class="accordion-title">Bila terjadi gempa bumi, apakah yang harus saya lakukan
                                ?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>Langkah-langkah yang harus dilakukan saat terjadi gempa antara lain:</p>
                            <ol>
                                <li>Melindungi kepala dengan menggunakan bantal atau helm, atau berdirilah di bawah pintu.</li>
                                <li>Berlindung di bawah meja untuk menghindari benda-benda yang mungkin jatuh, seperti atap atau benda berbahaya lainnya.</li>
                                <li>Jika keluar rumah, perhatikan kemungkinan pecahan kaca, genteng, atau material lain. Tetap lindungi kepala Anda dan segera menuju ke lapangan terbuka.</li>
                                <li>Jangan berdiri di dekat tiang, pohon, sumber listrik, atau gedung yang mungkin roboh.</li>
                                <li>Kemali bagian bangunan gedung atau rumah yang memiliki struktur kuat, seperti sudut bangunan, untuk berlindung.</li>
                                <li>Ikuti instruksi evakuasi dari pengelola, penjaga, atau petugas yang berwenang.</li>
                                <li>Gunakan tangga darurat untuk melakukan evakuasi keluar bangunan. Apabila sedang berada di dalam elevator, tekan semua tombol atau gunakan interphone untuk memanggil pengelola gedung.</li>
                            </ol>
                        </div>
                        
                    </div><br>
                    <div class="accordion-item">
                        <button id="accordion-button-4" aria-expanded="false">
                            <span class="accordion-title">Bagaimana saya mendapatkan info lebih rinci tentang ancaman
                                bencana gempa bumi, terutama di wilayah saya tinggal?
                            </span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Untuk mendapatkan informasi lebih rinci, anda dapat mengunduh aplikasi Inarisk Personal
                                pada ponsel atau gadget anda melalui tautan berikut: <a
                                    href="https://inarisk.bnpb.go.id/inariskapps">https://inarisk.bnpb.go.id/inariskapps</a>.
                            </p>
                        </div>
                    </div><br>

                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                            <span class="accordion-title">Di wilayah saya tinggal, daerah manakah yang aman terhadap
                                ancaman bencana gempa bumi? Bisakah saya mengungsi di tempat aman itu bila terjadi gempa
                                bumi?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Untuk mendapatkan informasi lebih rinci, anda dapat mengunduh aplikasi Inarisk Personal
                                pada ponsel atau gadget anda melalui tautan berikut: <a
                                    href="https://inarisk.bnpb.go.id/inariskapps">https://inarisk.bnpb.go.id/inariskapps</a>
                                . Anda bisa mengungsi di daerah aman sesuai dengan informasi yang tersaji dalam Inarisk
                                Personal dengan menghubungi pihak-pihak yang berwenang (BPBD lokasi setempat).
                            </p>
                        </div>
                    </div><br>

                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                            <span class="accordion-title">Berapa lamakah saya harus mengungsi bila terjadi gempa bumi?
                                Berapa hari saya bisa kembali ke rumah tempat
                                <br> saya tinggal? Bagaimana saya mengetahui bahwa rumah saya aman untuk ditempati
                                setelah kejadian bencana gempa bumi?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Untuk status tanggap darurat awal ditetapkan maksimal 7 hari, dan akan diperbaharui
                                sesuai dengan situasi dan kondisi di lokasi bencana. Anda dapat mengungsi sesuai dengan
                                ketetapan status tanggap darurat yang ditetapkan, dan kembali kerumah setelah kondisi
                                dinyatakan aman oleh pemerintah setempat. Untuk informasi lebih detail, bisa menghubungi
                                posko pengungsian atau tim BPBD yang ada di lokasi.
                            </p>
                        </div>
                    </div><br>

                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                            <span class="accordion-title"> Seperti apakah rumah yang aman gempabumi ?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Rumah tahan gempa adalah rumah yang dirancang dengan prinsip keamanan agar mampu
                                bertahan saat terjadi gempa. Tujuan utamanya bukan untuk menolak efek gempa, melainkan
                                untuk mengurangi resiko kerusakan dan mempermudah evakuasi. Prinsip dasar bangunan tahan
                                gempa meliputi denah yang sederhana dan simetris, tinggi bangunan tidak lebih dari empat
                                kali lebar, bobot yang ringan, konstruksi monolit, serta pondasi kuat. Standar
                                keamanannya adalah: tidak rusak akibat gempa lemah, rusak hanya pada elemen
                                non-struktural akibat gempa sedang, dan tidak runtuh serta mudah diperbaiki setelah
                                gempa kuat.
                            </p>
                        </div>
                    </div><br>

                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                            <span class="accordion-title">Apakah ada latihan untuk menghadapi bencana gempa bumi yang
                                diselenggarakan oleh pemerintah dan yang bisa saya ikuti?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Ada, kegiatan latihan untuk menghadapi bencana gempa dan/atau tsunami dilaksanakan oleh
                                BPBD berupa simulasi bencana gempa/tsunami yang melibatkan warga masyarakat di kawasan
                                rawan bencana. Jika anda tinggal di kawasan rawan bencana, maka anda mengikuti kegiatan
                                simulasi, uji coba SOP tanggap darurat, rencana kontinjensi, dan rencana evakuasi yang
                                diadakan oleh BPBD setempat. Untuk lokasi yang sudah mempunyai program Desa Tangguh
                                Bencana (Destana), kegiatan simulasi, uji coba SOP tanggap darurat, uji coba rencana
                                kontinjensi, dan rencana evakuasi dilaksanakan di level Desa. Untuk mengetahui informasi
                                lebih detail tentang program Destana, silakan mengakses website katalog kesiapsiagaan
                                BNPB melalui tautan berikut: <a
                                    href="https://katalogkesiapsiagaan.bnpb.go.id/">https://katalogkesiapsiagaan.bnpb.go.id/</a>
                            </p>
                        </div>
                    </div><br>

                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                            <span class="accordion-title"> Bila terjadi gempa bumi, siapakah yang bisa saya hubungi dan
                                berapa nomer teleponnya?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Silahkan anda menghubungi info BMKG melalui aplikasi selular @infobmkg atau <a
                                    href="https://www.bmkg.go.id">https://www.bmkg.go.id</a> serta kantor Pusdalops dan
                                BPBD setempat.
                            </p>
                        </div>
                    </div><br>
                    <div class="accordion-item mb-5">
                        <button id="accordion-button-5" aria-expanded="false">
                            <span class="accordion-title"> Bagaimana saya bisa mengakses bantuan bila terjadi gempa
                                bumi?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Anda bisa menghubungi koordinator pengungsi atau langsung ke Pos Komando di lokasi
                                pengungsian untuk mendapatkan informasi tentang mekanisme penyaluran bantuan saat
                                terjadi bencana.
                            </p>
                        </div>
                    </div><br>

                </div>
            </div>
        </div>
    </section>

    <section class="berita mb-5">
        <div class="container">
            <div class="d-flex">
                <img src="assets/emojione-monotone_newspaper.svg" alt="" height="28">
                <h4 class="ms-2 mb-2" style="color: #494949;">Berita</h4>
            </div>
            <div class="row">

                @foreach ($news as $n)
                    <div class="col p-2">
                        <div class="cardNews" style=" cursor:pointer; border:none"
                            onclick="window.location.href='news1.php'">
                            <img src="assets/image.svg" class="card-img-top zoomIn" alt="...">
                            <div class="mt-3 p-3">
                                <h5 class="newsTitle">{{ $n->title }}</h5>
                                <p>{{ $n->date }} </p>
                                <p class="newsDesc" style="text-align: justify;">{{ $n->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

            <button class="btn btn-warning rounded-5 mt-3 d-flex justify-content-center" style="width: max-content;"
                onclick="window.location.href='./berita'">Berita Lainnya..</button>
        </div>
    </section>

    <section class="riwayatGempa">
        <div class="container">
            <div class="d-flex">
                <img src="assets/openmoji_earthquake.svg" alt="" height="28">
                <h4 class="ms-2 mb-2" style="color: #494949;">Riwayat Gempa Bumi di Indonesia</h4>
            </div>
            {!! $chart->container() !!}
        </div>
    </section>

    <section class="statistik">
        <div class="container">
            <div class="d-flex">
                <img src="assets/wpf_statistics.svg" alt="" height="28">
                <h4 class="ms-2 mb-2" style="color: #494949;">Statistik Jumlah Korban 5 Tahun Terakhir</h4>
            </div>
            {!! $chartVictims->container() !!}
            <div id="chart"></div>

        </div>
    </section>

    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        const items = document.querySelectorAll('.accordion button');

        function toggleAccordion() {
            const itemToggle = this.getAttribute('aria-expanded');

            for (i = 0; i < items.length; i++) {
                items[i].setAttribute('aria-expanded', 'false');
            }

            if (itemToggle == 'false') {
                this.setAttribute('aria-expanded', 'true');
            }
        }

        items.forEach((item) => item.addEventListener('click', toggleAccordion));


        function showTime() {
            var date = new Date();
            // Set the time zone offset for WIB (UTC +7)
            var offset = 7 * 60; // 7 hours in minutes
            date.setMinutes(date.getMinutes() + date.getTimezoneOffset() + offset);

            var h = date.getHours();
            var m = date.getMinutes();
            var s = date.getSeconds();

            // Format jam, menit, dan detik agar dua digit
            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            // Format waktu 24 jam dengan WIB
            var time = h + ":" + m + ":" + s + " WIB";

            document.getElementById("DisplayClock").innerText = time;
            document.getElementById("DisplayClock").textContent = time;

            setTimeout(showTime, 1000);
        }
        showTime();
    </script>
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
    <script src="{{ $chartVictims->cdn() }}"></script>
    {{ $chartVictims->script() }}
    <script src="https://kit.fontawesome.com/da6c47344b.js" crossorigin="anonymous"></script>
</body>

</html>
