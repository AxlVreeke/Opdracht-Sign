<?php

namespace App\Http\Controllers;


use App\Models\Exercise;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home() {
        return view('pages/welcome');
    }

    public function opdrachten() {
        $exercises = Exercise::all();
        return view('pages/exercises/opdrachten')->with('exercises', $exercises);
    }

    public function uitleg() {
        return view('pages/uitleg');
    }



}
