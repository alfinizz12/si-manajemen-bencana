<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite('resources/css/style.css')
    <title>Apa Itu Gempa?</title>
</head>

<body>
    <x-navbar></x-navbar>

    <section>
        
        
        <div class="aboutContainer container">
            <div class="d-flex flex-row mt-3">
                <h3 class="ms-4 mt-4" style="color: #3D5300;">Berita Gempa Bumi</h3>
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
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>