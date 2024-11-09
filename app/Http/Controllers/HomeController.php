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
                'data' => [10, 57, 31, 44, 50, 62, 70, 30, 90, 100, 110, 60] // contoh data
            ]
        ])
        ->setGrid();

        return view('home', compact('news', 'chart'));

    }
}
