<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home() {
        return view('pages/welcome');
    }

    public function opdrachten() {
        return view('pages/opdrachten');
    }

    public function uitleg() {
        return view('pages/uitleg');
    }

    public function opdrachten_create() {
        return view('pages/opdrachten_create');
    }


}
