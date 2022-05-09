<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $exercises = Exercise::where('user_id', $user->id)->orderBy('id', 'desc')->get();
        return view('pages/exercises/users/profiel', compact('user', 'exercises'));
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
        return view('pages/exercises/users/show')->with('exercise', $exercise);
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
        return view('pages/exercises/users/edit')
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
        $exercise->others = $request->others;
        $exercise->end_date = $request->end_date;
        $exercise->file = str_replace('public/user-img/', '', $file);
        $exercise->save();

        return redirect()->route('exercise.index');
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
        return redirect()->route('exercise.index');
    }
}

