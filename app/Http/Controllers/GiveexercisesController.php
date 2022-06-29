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

        $opdrachtID = $giveexercise->exercise_id;

        // get previous card id
        if (empty($previous)) {
            $previous = Giveexercises::where('id', '<', $giveexercise->id)->max('id');
        }

        if ($previous == 0){
            $previous = Giveexercises::where('id', '>', $giveexercise->id == 0)->max('id');
        }

        // get next card id
        if ($opdrachtID == $giveexercise->exercise_id) {
            $next = Giveexercises::where('id', '>', $giveexercise->id)->min('id');
            echo "1";
        }

        if ($next == 0){
            $next = Giveexercises::where('id', '>', $giveexercise->id== 0)->min('id');
            echo "2";
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
