<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExercisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercises = Exercise::all();
        return view('pages/exercises/opdrachten')->with('exercises', $exercises);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/exercises/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'job_id' => 'required|not_in:0',
            'number' => 'numeric',
            'end_date' => 'required',
            'file' => 'required'
        ]);
        $file = $request->file('file')->store('public/user-img');


        $exercise = new Exercise();
        $exercise->name = $request->name;
        $exercise->description = $request->description;
        $exercise->job_id = $request->job_id;
        $exercise->number = $request->number;
        $exercise->end_date = $request->end_date;
        $exercise->file = str_replace('public/user-img/', '', $file);
        $exercise->save();

        return redirect()->route('exercises.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exercise = Exercise::findOrFail($id);
        return view('pages/exercises/show')->with('exercise', $exercise);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function participate($id)
    {
        $exercise = Exercise::findOrFail($id);
        return view('pages/exercises/participate')
            ->with(['exercise' => $exercise]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exercise = Exercise::findOrFail($id);
        return view('pages/exercises/edit')
            ->with(['exercise' => $exercise]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'job_id' => 'required',
            'number' => 'numeric',
            'end_date' => 'required',
            'file' => 'required'
        ]);
        $file = $request->file('file')->store('public/user-img');

        $exercise = Exercise::findOrFail($id);
        $exercise->name = $request->name;
        $exercise->description = $request->description;
        $exercise->job_id = $request->job_id;
        $exercise->number = $request->number;
        $exercise->end_date = $request->end_date;
        $exercise->file = str_replace('public/user-img/', '', $file);
        $exercise->save();

        return redirect()->route('exercises.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Exercise::destroy($id);
        return redirect()->route('exercises.index');
    }
}

