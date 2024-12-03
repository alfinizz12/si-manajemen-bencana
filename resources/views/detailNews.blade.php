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

        .berita {
            margin: 100px 200px;
        }

        .newsCard {
            box-shadow: 2px 4px 7px rgba(0, 0, 0, 0.3);
            height: 300px;
            width: 270px;
            overflow: hidden;
            background-color: white;
        }

        .page-link {
            color: black;
        }

        .page-link:hover {
            color: #515151;
        }

        .pagination .page-item.active .page-link {
            background-color: #515151;
            border-color: #515151;
        }
    </style>
</head>

<body>
    <x-navbar></x-navbar>

    <section class="berita">
        <div class="newsContent row mb-5">
            <div class="col">
                @foreach ($news->take(1) as $n)
                <h2 class="">{{ $n->title }}</h2>
                <img src="assets/image.svg" class="" alt="...">
                <p class="newsDesc mt-3" style="text-align: justify; font-size:18px;">
                    {{ $n->description }}
                </p>
                @endforeach
            </div>
        </div>

        <div>
            <h4>Berita Lainnya</h4>
            <div class="row">
                @foreach ($news->take(3) as $n)
                    <div class="col-md-4 mb-4">
                        <div class="newsCard" style="cursor:pointer; border:none"
                            onclick="window.location.href='/detailNews'">
                            <img src="assets/image.svg" class="card-img-top zoomIn" alt="...">
                            <div class="p-3">
                                <p style="font-size: 12px;">{{ $n->date }} </p>
                                <h5 class="newsTitle">{{ $n->title }}</h5>
                                <p class="newsDesc" style="text-align: justify; font-size:13px;">
                                    <a href="news1.php" style="text-decoration: none; color: #878787;">Read More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        


        </div>

    </section>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
