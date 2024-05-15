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

        $successMessage = session()->get('message.success');

        foreach ($result as $serie) {
            $series[] = $serie;
        }

        return view('series.index', ['series' => $series, 'successMessage' => $successMessage]);
    }

    public function create()
    {
        return view('series.create', []);
    }

    public function store(Request $request)
    {
        Serie::create($request->all());
        return redirect()->route('series.index')->with('message.success', "Serie '{$request->name}' inserida com sucesso!");
    }

    public function delete(Request $request)
    {
        Serie::destroy($request->id);
        return redirect()->route('series.index')->with('message.success', "Serie deletada com sucesso!");
    }
}
