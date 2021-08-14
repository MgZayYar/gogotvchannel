<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MovieDirection;
use App\Models\Movie;
use App\Models\Director;

class MovieDirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie_dir = MovieDirection::all();
        
        return view('backend.movie_direction.index',compact('movie_dir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movies = Movie::all();
        $directors = Director::all();

        return view('backend.movie_direction.create',compact('movies','directors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'directorid' => 'required',
            'movieid' => 'required'
        ]);

        $movie_direction = new MovieDirection;
        $movie_direction->director_id = $request->directorid;
        $movie_direction->movie_id =$request->movieid;
        $movie_direction->save();

        return redirect()->route('movie_direction.index')->with("successMsg", "New MovieDirection is ADDED in your data");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies = Movie::all();
        $directors = Director::all();
        $movie_direction = MovieDirection::find($id);

        return view('backend.movie_direction.edit', compact('movies', 'directors', 'movie_direction'));
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
        $request->validate([
            'directorid' => 'required',
            'movieid' => 'required'
        ]);

        $movie_direction = MovieDirection::find($id);
        $movie_direction->director_id = $request->directorid;
        $movie_direction->movie_id =$request->movieid;
        $movie_direction->save();

        return redirect()->route('movie_direction.index')->with("successMsg", "MovieDirection is EDIT in your data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie_direction = MovieDirection::find($id);
        $movie_direction->delete();

        return redirect()->route('movie_direction.index')->with("successMsg", "MovieDirection is DELETE in your data");


    }
}
