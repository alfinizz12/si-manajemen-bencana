<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="1">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Date</th>
        </tr>
        @foreach ($news as $n)
        <tr>
            <td>{{$n->title}}</td>
            <td>{{$n->description}}</td>
            <td>{{$n->date}}</td>
        </tr>
        @endforeach

        <div>
            {!! $chart->container() !!}
        </div>

        <!-- Memuat skrip yang dibutuhkan Larapex -->
        <script src="{{ $chart->cdn() }}"></script>
        {{ $chart->script() }}
    </table>
</body>

</html>