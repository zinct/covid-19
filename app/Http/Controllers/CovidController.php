<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Charts\CovidChart;
use Illuminate\Support\Collection;

class CovidController extends Controller
{
    public function index()
    {
   	    $data = collect(Http::get('https://api.kawalcorona.com/indonesia')->json());
   	    $data = $data[0];

   	    $total_positif = $data['positif'];
   	    $total_sembuh = $data['sembuh'];
   	    $total_meninggal = $data['meninggal'];

   	    // Color
   	    $meninggal = '#d9534f';
   	    $positif = '#5bc0de';
   	    $sembuh = '#5cb85c';

   	    $chart = new CovidChart;
   	    $chart->labels(['Kasus Positif','Sembuh','Meninggal']);
   	    $chart->dataset('Data Kasus Covid 19 Di Indonesia', 'doughnut', [$total_positif, $total_sembuh, $total_meninggal])->backgroundColor([
   	    	$positif,$sembuh,$meninggal
   	    ])->color('000000');

   	    return view('covid.index', compact('chart', 'total_positif', 'total_sembuh', 'total_meninggal'));

    }
}
