<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [];
        $result = Serie::all();

       foreach ($result as $serie){
        $series[] = $serie->name;
       }

        return view('series.index', ['series' => $series]);
    }

    public function create()
    {
        return view('series.create', []);
    }

    public function store(Request $request)
    {
        $serie = new Serie();
        $serie->name = $request->input('name');
        $serie->save();

        return redirect('/series');
    }
}
