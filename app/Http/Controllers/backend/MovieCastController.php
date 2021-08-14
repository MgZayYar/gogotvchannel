<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Actor;
use App\Models\MovieCast;

class MovieCastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie_cast = MovieCast::all();

        return view('backend.movie_cast.index', compact('movie_cast'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movies = Movie::all();
        $actors = Actor::all();

        return view('backend.movie_cast.create', compact('movies', 'actors'));
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
            'actorid' => 'required|max:191',
            'movieid' => 'required',
            'role' => 'required'
        ]);

        $movie_cast = new MovieCast;
        $movie_cast->actor_id = $request->actorid;
        $movie_cast->movie_id =$request->movieid;
        $movie_cast->role = $request->role;
        $movie_cast->save();

        return redirect()->route('movie_cast.index')->with("successMsg", "New MovieCast is ADDED in your data");
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
        $actors = Actor::all();
        $movie_cast = MovieCast::find($id);

        return view('backend.movie_cast.edit', compact('movies', 'actors', 'movie_cast'));
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
            'actorid' => 'required|max:191',
            'movieid' => 'required',
            'role' => 'required'
        ]);

        $movie_cast = MovieCast::find($id);
        $movie_cast->actor_id = $request->actorid;
        $movie_cast->movie_id =$request->movieid;
        $movie_cast->role = $request->role;
        $movie_cast->save();

        return redirect()->route('movie_cast.index')->with("successMsg", "MovieCast is EDIT in your data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie_cast = MovieCast::find($id);
        $movie_cast->delete();

        return redirect()->route('movie_cast.index')->with("successMsg", "MovieCast id DELETE in your data");
    }
}
