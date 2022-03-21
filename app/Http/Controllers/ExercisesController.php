<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

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
        return view('dashboard/exercises/index')->with('exercises', $exercises);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/exercises/create');
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
            'customer' => 'required',
            'student' => 'required',
            'working_method' => 'required',
            'job' => 'required',
            'formit' => 'numeric',
            'number' => 'numeric',
            'file' => 'required'
        ]);

        $exercise = new Exercise();
        $exercise->name = $request->name;
        $exercise->description = $request->description;
        $exercise->customer = $request->customer;
        $exercise->student = $request->student;
        $exercise->working_method = $request->working_method;
        $exercise->job = $request->job;
        $exercise->formaat = $request->formaat;
        $exercise->number = $request->number;
        $exercise->file = $request->file;
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
        return view('dashboard/exercises/show')->with('exercise', $exercise);
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
        return view('dashboard/exercises/edit')
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
            'customer' => 'required',
            'student' => 'required',
            'working_method' => 'required',
            'job' => 'required',
            'formit' => 'numeric',
            'number' => 'numeric',
            'file' => 'required'
        ]);

        $exercise = Exercise::findOrFail($id);
        $exercise->name = $request->name;
        $exercise->description = $request->description;
        $exercise->customer = $request->customer;
        $exercise->student = $request->student;
        $exercise->working_method = $request->working_method;
        $exercise->job = $request->job;
        $exercise->formaat = $request->formaat;
        $exercise->number = $request->number;
        $exercise->file = $request->file;
        $exercise->save();

        return back();
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

