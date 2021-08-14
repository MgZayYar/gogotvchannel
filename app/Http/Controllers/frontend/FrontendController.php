<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Director;
use App\Models\MovieGenre;

class FrontendController extends Controller
{
    public function index()
    {
        $movies = Movie::paginate(15);
        $genres = Genre::take(5)->get();
        $directors = Director::take(10)->get();

        return view('frontend.index',compact('movies','genres','directors'));
    }

    public function moviedetail($id)
    {
        $moviedetail = Movie::where('id',$id)->get();
        $movies = Movie::all();

        return view('frontend.moviedetail',compact('moviedetail','movies'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function movie()
    {
        $movies = Movie::paginate(20);
        return view('frontend.movie',compact('movies'));
    }
}
