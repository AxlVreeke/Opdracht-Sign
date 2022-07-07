<?php

namespace App\Http\Controllers;

use App\Models\Giveexercises;
use Illuminate\Http\Request;

class GiveexercisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/exercises/participate');
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
            'description' => 'required',
            'file' => 'required'
        ]);
        $file = $request->file('file')->store('public/user-img');

        $giveexercise = new Giveexercises();
        $giveexercise->description = $request->description;
        $giveexercise->file = str_replace('public/user-img/', '', $file);
        $giveexercise->exercise_id = $request->exercise_id;
        $giveexercise->save();

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
        // get the current card
        $giveexercise = Giveexercises::find($id);
        $collection = Giveexercises::where('exercise_id', '=', $giveexercise->exercise_id)->get();
        // which is 1 above $id???

        foreach($collection as $exercise) {
            if ($exercise['id'] == $id) {
                $next = $collection->where('id', '>', $id)->first();
                $previous = $collection->where('id', '<', $id)->reverse()->first();
            }
        }

        // return viewS
        return view('pages/exercises/jobs/show')->with('giveexercise', $giveexercise)->with('previous', $previous)->with('next', $next);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Giveexercises::destroy($id);
        return redirect()->route('exercises.index');

    }
}
