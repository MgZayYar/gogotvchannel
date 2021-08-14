<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MovieGenre;
use App\Models\Movie;
use App\Models\Genre;

class MovieGenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie_genre = MovieGenre::all();

        return view('backend.movie_genres.index', compact('movie_genre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movies = Movie::all();
        $genres = Genre::all();

        return view('backend.movie_genres.create', compact('movies', 'genres'));
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
            'genreid' => 'required',
            'movieid' => 'required'
        ]);

        $movie_genre = new MovieGenre;
        $movie_genre->genre_id = $request->genreid;
        $movie_genre->movie_id =$request->movieid;
        $movie_genre->save();

        return redirect()->route('movie_genres.index')->with("successMsg", "New MovieGenre is ADDED in your data");
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
        $genres = Genre::all();
        $movie_genres = MovieGenre::find($id);

        return view('backend.movie_genres.edit',compact('movies', 'genres', 'movie_genres'));
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
            'genreid' => 'required',
            'movieid' => 'required'
        ]);

        $movie_genre = MovieGenre::find($id);
        $movie_genre->genre_id = $request->genreid;
        $movie_genre->movie_id =$request->movieid;
        $movie_genre->save();

        return redirect()->route('movie_genres.index')->with("successMsg", "MovieGenre is EDITED in your data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie_genre = MovieGenre::find($id);
        $movie_genre->delete();

        return redirect()->route('movie_genres.index')->with("successMsg", "MovieGenre is DELETE in your data");

    }
}
