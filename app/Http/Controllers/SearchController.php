<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function filterOpdracht() {
        $id = request()->get('category');
        if ($id == 0){
            $exercises = Exercise::all();
            return view('pages.opdrachten')->with(['exercises' => $exercises]);
        }
        else{
            $exercises = Exercise::where('job_id', $id)->get();
            return view('pages.opdrachten')->with(['exercises' => $exercises]);
        }

    }
}
