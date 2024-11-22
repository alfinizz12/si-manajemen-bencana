<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/style.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <title>Home</title>
</head>

<body>
    <x-navbar></x-navbar>
    <section>
        <div class="upper container mt-2">
            <div class="row align-items-center">
                <div class="upperTitle">
                    <div class="d-flex flex-row">
                        <div>
                            <h2 style="color: #3D5300; font-weight:bold;">Sistem Informasi <br> Gempa Bumi</h2>
                        </div>
                        <div class="d-flex flex-row ms-5 mb-3">
                            <img src="assets/image 9.svg" alt="" width="50">
                            <img src="assets/image 10.svg" alt="" width="75">
                        </div>

                    </div>
                    <h4 class="">Sistem informasi untuk memahami <br> tentang pengetahuan gempa bumi</h4>
                </div>
                <div class="">

                    <div class=" card mt-5" style="background-color: #ABBA7C; width:80%">
                        <div class="card-body">
                            <h3 class="card-title" style="color: #3D5300; font-weight:bold; z-index: 2">Search</h3>
                            <div class="d-flex">
                                <input type="text" class="form-control me-2" style="width: 50%;">
                                <button class="btn btn-warning">Search</button>
                            </div>

                        </div>
                    </div>
                    <!-- <img src="assets/image 11 (1).svg" class="mt-4 img-fluid top-50 position-absolute translate-middle" alt="gempa" width="500px" style="z-index: 10; left:1000px; bottom:150px"> -->
                </div>
            </div>
        </div>
    </section>


    <section style="background-color: #ABBA7C">
        <div class="tentangGempa container mb-5">
            <div class="row">
                <div class="d-flex mt-4">
                    <img src="assets/Vector.svg" alt="" height="28">
                    <h3 class="ms-2 mb-2" style="color: #3D5300;">Tentang Gempa Bumi</h3>
                </div>
                <h5 style="color: white;" class="mt-3">Apa Itu Gempa Bumi?</h5>
                <p class="w-100">
                    Gempa bumi adalah getaran bumi yang terjadi akibat pelepasan energi di dalam bumi secara tiba-tiba sehingga efeknya dapat dirasakan sampai ke permukaan bumi. Penyebab gempa bumi dapat berupa dinamika bumi (tektonik), aktivitas gunung api, akibat meteor jatuh, longsoran (di bawah muka air laut), atau ledakan bom di bawah permukaan. <br>
                    <br>
                    Ingin tahu lebih lanjut tentang gempa bumi? Tonton video di bawah ini untuk penjelasan selengkapnya!
                </p>

                <iframe width="" height="320" src="https://www.youtube.com/embed/M_LMj9FJAGs?si=OPMVGbGNfvXc8moy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


                <button class="btn btn-warning rounded-5 mt-3 mb-4 mx-auto justify-content-center" style="width: min-content;" onclick="window.location.href='/about-earthquake'">Selengkapnya</button>
            </div>
        </div>

    </section>

    <section class="layanan">
        <div class="container mb-5 mt-5">
            <div class="d-flex ">
                <img src="assets/Vector-1.svg" alt="" height="28">
                <h3 class="ms-2 mb-2" style="color: #3D5300;">Layanan</h3>
            </div>
            <h5 class="mt-3">Frequently Asked Questions (FAQ)</h5>
            <div class="containerFaq mt-3">
                <div class="accordion flex-col gap-3">
                    <div class="accordion-item">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">Apakah gempa bisa diprediksi atau diramalkan akan terjadi kapan, dimana, dan besaran kekuatannya? Bila bisa diprediksi atau diramalkan, apakah tanda-tanda alam yang mendahuluinya?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Sampai saat ini, BMKG sebagai instansi pemerintah yang memonitoring kejadian gempa bumi di indonesia selalu menginfokan kepada masyarakat bahwa gempa bumi tektonik tidak dapat diprediksi waktu kejadiannya, baik hari, tanggal, jam , menit hingga detik.
                            </p>
                        </div>
                    </div><br>

                    <div class="accordion-item">
                        <button id="accordion-button-2" aria-expanded="false">
                            <span class="accordion-title">Sebagai masyarakat umum yang tinggal di daerah rawan gempa bumi, apa yang bisa dipersiapkan sebelumnya untuk menghadapi ancaman bencana gempa bumi?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                1. Mengenali lingkungan tempat tinggal, maupun tempat anda bekerja untuk mengetahui tempat paling aman untuk berlindung dan mengevakuasi diri. <br>

                                2. Mengevaluasi dan merenovasi struktur bangunan agar terhindar dari bahaya gempa bumi <br>

                                3. Atur benda atau material berat agar bisa berada di bagian bawah sehingga tidak menimpa kita saat gempa bumi terjadi. <br>

                                4. Menyiapkan tas siaga bencana yang berisi: makanan ringan (yang tidak mudah basi), air minum 2 liter, surat penting, uang tunai secukupnya, peluit, senter, perlengkapan mandi, pakaian (untuk 2-3 hari), alat komunikasi (ponsel/radio), obat-obatan P3K. <br>
                            </p>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <button id="accordion-button-3" aria-expanded="false">
                            <span class="accordion-title">Bila terjadi gempa bumi, apakah yang harus saya lakukan ?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Langkah-langkah yang harus dilakukan saat terjadi gempa antara lain: <br>
                                1. Melindungi kepala dengan menggunakan bantal atau helm, atau berdirilah di bawah pintu. <br>
                                2. Berlindung di bawah meja untuk menghindari dari benda-benda yang dimungkinkan akan jatuh seperti atap atau benda berbahaya lainnya. <br>
                                3. Bila keluar rumah, perhatikan kemungkinan pecahan kaca, genteng atau material lain. Tetap lindungi kepala anda dan segera menuju ke lapangan terbuka. <br>
                                4. Jangan berdiri di dekat tiang, pohon atau sumber listrik atau gedung yang mungkin roboh. <br>
                                5. Kenali bagian bangunan gedung atau rumah yang memiliki struktur kuat, seperti pada sudut bangunan untuk berlindung. <br>
                                6. Ikuti instruksi evakuasi dari pengelola, penjaga, atau petugas yang berwenang. <br>
                                7. Pilihlah menggunakan tangga darurat untuk melakukan evakuasi keluar bangunan. Apabila sedang berada di dalam elevator, tekan semua tombol atau gunakan interphone untuk melakukan panggilan kepada pengelola gedung.
                            </p>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <button id="accordion-button-4" aria-expanded="false">
                            <span class="accordion-title">Bagaimana saya mendapatkan info lebih rinci tentang ancaman bencana gempa bumi, terutama di wilayah saya tinggal?
                            </span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Untuk mendapatkan informasi lebih rinci, anda dapat mengunduh aplikasi Inarisk Personal pada ponsel atau gadget anda melalui tautan berikut: <a href="https://inarisk.bnpb.go.id/inariskapps">https://inarisk.bnpb.go.id/inariskapps</a>.
                            </p>
                        </div>
                    </div><br>

                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                            <span class="accordion-title">Di wilayah saya tinggal, daerah manakah yang aman terhadap ancaman bencana gempa bumi? Bisakah saya mengungsi di tempat aman itu bila terjadi gempa bumi?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Untuk mendapatkan informasi lebih rinci, anda dapat mengunduh aplikasi Inarisk Personal pada ponsel atau gadget anda melalui tautan berikut: <a href="https://inarisk.bnpb.go.id/inariskapps">https://inarisk.bnpb.go.id/inariskapps</a> . Anda bisa mengungsi di daerah aman sesuai dengan informasi yang tersaji dalam Inarisk Personal dengan menghubungi pihak-pihak yang berwenang (BPBD lokasi setempat).
                            </p>
                        </div>
                    </div><br>

                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                            <span class="accordion-title">Berapa lamakah saya harus mengungsi bila terjadi gempa bumi? Berapa hari saya bisa kembali ke rumah tempat saya tinggal? Bagaimana saya mengetahui bahwa rumah saya aman untuk ditempati setelah kejadian bencana gempa bumi?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Untuk status tanggap darurat awal ditetapkan maksimal 7 hari, dan akan diperbaharui sesuai dengan situasi dan kondisi di lokasi bencana. Anda dapat mengungsi sesuai dengan ketetapan status tanggap darurat yang ditetapkan, dan kembali kerumah setelah kondisi dinyatakan aman oleh pemerintah setempat. Untuk informasi lebih detail, bisa menghubungi posko pengungsian atau tim BPBD yang ada di lokasi.
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
                                Rumah tahan gempa adalah rumah yang dirancang dengan prinsip keamanan agar mampu bertahan saat terjadi gempa. Tujuan utamanya bukan untuk menolak efek gempa, melainkan untuk mengurangi resiko kerusakan dan mempermudah evakuasi. Prinsip dasar bangunan tahan gempa meliputi denah yang sederhana dan simetris, tinggi bangunan tidak lebih dari empat kali lebar, bobot yang ringan, konstruksi monolit, serta pondasi kuat. Standar keamanannya adalah: tidak rusak akibat gempa lemah, rusak hanya pada elemen non-struktural akibat gempa sedang, dan tidak runtuh serta mudah diperbaiki setelah gempa kuat.
                            </p>
                        </div>
                    </div><br>

                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                            <span class="accordion-title">Apakah ada latihan untuk menghadapi bencana gempa bumi yang diselenggarakan oleh pemerintah dan yang bisa saya ikuti?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Ada, kegiatan latihan untuk menghadapi bencana gempa dan/atau tsunami dilaksanakan oleh BPBD berupa simulasi bencana gempa/tsunami yang melibatkan warga masyarakat di kawasan rawan bencana. Jika anda tinggal di kawasan rawan bencana, maka anda mengikuti kegiatan simulasi, uji coba SOP tanggap darurat, rencana kontinjensi, dan rencana evakuasi yang diadakan oleh BPBD setempat. Untuk lokasi yang sudah mempunyai program Desa Tangguh Bencana (Destana), kegiatan simulasi, uji coba SOP tanggap darurat, uji coba rencana kontinjensi, dan rencana evakuasi dilaksanakan di level Desa. Untuk mengetahui informasi lebih detail tentang program Destana, silakan mengakses website katalog kesiapsiagaan BNPB melalui tautan berikut: <a href="https://katalogkesiapsiagaan.bnpb.go.id/">https://katalogkesiapsiagaan.bnpb.go.id/</a>
                            </p>
                        </div>
                    </div><br>

                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                            <span class="accordion-title"> Bila terjadi gempa bumi, siapakah yang bisa saya hubungi dan berapa nomer teleponnya?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Silahkan anda menghubungi info BMKG melalui aplikasi selular @infobmkg atau <a href="https://www.bmkg.go.id">https://www.bmkg.go.id</a> serta kantor Pusdalops dan BPBD setempat.
                            </p>
                        </div>
                    </div><br>
                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                            <span class="accordion-title">Bagaimana saya bisa mengakses bantuan bila terjadi gempa bumi?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Anda bisa menghubungi koordinator pengungsi atau langsung ke Pos Komando di lokasi pengungsian untuk mendapatkan informasi tentang mekanisme penyaluran bantuan saat terjadi bencana.
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
                <h4 class="ms-2 mb-2" style="color: #3D5300;">Berita</h4>
            </div>
            <div class="row">

                @foreach($news as $n)
                <div class="col p-2">
                    <div class="card cardNews" style="width: 21rem; height:21rem; cursor:pointer; border:none" onclick="window.location.href='news1.php'">
                        <img src="assets/image.svg" class="card-img-top zoomIn" alt="...">
                        <div class="mt-3">
                            <h5>{{$n->title}}</h5>
                            <p>{{$n->date}} </p>
                            <p class="newsDesc" style="text-align: justify;">{{$n->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>

            <button class="btn btn-warning rounded-5 mt-3 d-flex justify-content-center" style="width: max-content;" onclick="window.location.href='./berita'">Berita Lainnya..</button>
        </div>
    </section>

    <section class="riwayatGempa">
        <div class="container">
            <div class="d-flex">
                <img src="assets/openmoji_earthquake.svg" alt="" height="28">
                <h4 class="ms-2 mb-2" style="color: #3D5300;">Riwayat Gempa Bumi di Indonesia</h4>
            </div>
            {!! $chart->container() !!}
        </div>
    </section>

    <section class="statistik">
        <div class="container">
            <div class="d-flex">
                <img src="assets/wpf_statistics.svg" alt="" height="28">
                <h4 class="ms-2 mb-2" style="color: #3D5300;">Statistik Jumlah Korban 5 Tahun Terakhir</h4>
            </div>
            {!! $chartVictims->container() !!}
            <div id="chart"></div>

        </div>
    </section>

    <footer class="">
        <div class="footerCont container-fluid p-5">
            <hr>
            <div class="row">
                <div class="col-3">
                    footer
                </div>
                <div class="col-3">
                    footer
                </div>
                <div class="col-3">
                    footer
                </div>
                <div class="col-3">
                    footer
                </div>
            </div>
            <hr>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
    </script>
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
    <script src="{{ $chartVictims->cdn() }}"></script>
    {{ $chartVictims->script() }}
</body>

</html>