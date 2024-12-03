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
            height: 360px;
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
        <div class="newsPage mb-5">
            <div class="row" onclick="window.location.href='/detailNews'" style="cursor: pointer;">
                @foreach ($news->sortByDesc('id')->take(1) as $n)
                    <div class="col">
                        <img src="assets/image-2.svg" alt="" style="width: 500px;">
                    </div>
                    <div class="col">
                        <a class="miniLink">{{ $n->title }}</a>
                        <p>{{ $n->date }}</p>
                        <p class="newsDesc" style="text-align: justify; font-size:15px; overflow: hidden; ">
                            {{ $n->description }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <h4>Berita Lainnya</h4>
            <div class="row">
                @foreach ($news as $n)
                    <div class="col-md-4 mb-4">
                        <div class="newsCard" style="cursor:pointer; border:none"
                            onclick="window.location.href='/detailNews'">
                            <img src="assets/image.svg" class="card-img-top zoomIn" alt="...">
                            <div class="p-3">
                                <p style="font-size: 12px;">{{ $n->date }} </p>
                                <h5 class="newsTitle">{{ $n->title }}</h5>
                                <p class="newsDesc" style="text-align: justify; font-size:13px;">
                                    @php
                                        $words = explode(' ', $n->description);
                                        $desc =
                                            count($words) > 20
                                                ? implode(' ', array_slice($words, 0, 20)) .
                                                    '... <a href="/detailNews">Read More</a>'
                                                : $n->description;
                                    @endphp
                                    {!! $desc !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination links -->
            <div class="d-flex justify-content-center">
                <ul class="pagination">
                    @if ($page > 1)
                        <li class="page-item"><a class="page-link" href="?page={{ $page - 1 }}">Previous</a></li>
                    @endif

                    @for ($i = 1; $i <= $totalPages; $i++)
                        <li class="page-item {{ $i == $page ? 'active' : '' }}">
                            <a class="page-link" href="?page={{ $i }}">{{ $i }}</a>
                        </li>
                    @endfor

                    @if ($page < $totalPages)
                        <li class="page-item"><a class="page-link" href="?page={{ $page + 1 }}">Next</a></li>
                    @endif
                </ul>
            </div>

        </div>

    </section>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        public function news() {
            $perPage = 6; 
            $page = request() - > get('page', 1);
            $skip = ($page - 1) * $perPage;

            $news = News::skip($skip) - > take($perPage) - > get();

            $total = News::count();

            $totalPages = ceil($total / $perPage);

            return view('news.index', compact('news', 'totalPages', 'page'));
        }
    </script>
</body>

</html>
