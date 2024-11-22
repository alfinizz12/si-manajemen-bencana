<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\NewsController;
use ArielMejiaDev\LarapexCharts\LarapexChart;


class HomeController extends Controller
{
    public function home(NewsController $news){
        $news = $news->headNews();
        

        $chart = (new LarapexChart)->lineChart()
        ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'])
        ->setColors(['#ffc63b', '#ff6384'])
        ->setDataset([
            [
                'name' => 'Gempa',
                'data' => [45, 57, 31, 44, 50, 62, 70, 30, 90, 100, 110, 60] // contoh data
            ]
        ])
        ->setGrid();

        $chartVictims = (new LarapexChart)->barChart()
        ->setXAxis(['2019', '2020', '2021', '2022', '2023', '2024'])
        ->setDataset([
            [
                'name' => 'Jumlah Korban',
                'data' => [2000, 5020, 1582, 2307, 3517, 261],
                'colors' => ['#FF0000', '#FF6384', '#0057FF', '#12FF85', '#FF6F12', '#C212FF']
            ]
        ])
        ->setColors(['#FF0000', '#FF6384', '#0057FF', '#12FF85', '#FF6F12', '#C212FF'])
        ->setGrid();

        return view('home', compact('news', 'chart', 'chartVictims'));

    }
}
