<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return view('backend.movies.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'title'  => ['required', 'string', 'max:255'],
        ]);
            // dd($request);
        if ($validator) {
            $title = $request->title;
            $year = $request->year;
            $length = $request->length;
            $language = $request->language;
            $release_date = $request->release_date;
            $release_country = $request->release_country;
            $description = $request->description;
            $link1 =$request->link1;
            $link2 =$request->link2;
            $link3 =$request->link3;



            // FILE UPLOAD

            if ($request->hasfile('images')) 
            {
                $i=1;
                foreach($request->file('images') as $image)
                {
                    $imagename = time().$i.'.'.$image->extension();
                    $image->move(public_path('images/movie'), $imagename);  
                    $data[] = 'images/movie/'.$imagename;
                    $i++;
                }
            }
            
            $codeno = "JPM-".rand(11111,99999);

            $movie= new Movie();
            $movie->codeno = $codeno;
            $movie->title = $title;
            $movie->photo = json_encode($data);
            $movie->year = $year;
            $movie->length = $length;
            $movie->language = $language;
            $movie->release_date = $release_date;
            $movie->release_country = $release_country;
            $movie->description = $description;
            $movie->link1 = $link1;
            $movie->link2 = $link2;
            $movie->link3 = $link3;
            $movie->save();

            return redirect()->route('movies.index')->with("successMsg", "New movie is ADDED in your data");


        }else{
            return Redirect::back()->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movies = Movie::find($id);

        return view('backend.movies.detail', compact('movies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies = Movie::find($id);

        return view('backend.movies.edit', compact('movies'));
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
        $validator = $request->validate([
            'title'  => ['required', 'string', 'max:255'],
        ]);

        if ($validator) {
            $title = $request->title;
            $year = $request->year;
            $length = $request->length;
            $language = $request->language;
            $release_date = $request->release_date;
            $release_country = $request->release_country;
            $description = $request->description;
            $codeno = $request->codeno;
            $link1 = $request->link1;
            $link2 = $request->link2;
            $link3 = $request->link3;


            // FILE UPLOAD

            if ($request->hasfile('images')) 
            {

                $i = 1;
                foreach($request->file('images') as $file)
                {
                    $name = time().$i.'.'.$file->extension();
                    $file->move(public_path('images/movie'), $name);  
                    $data[] = 'images/movie/'.$name;
                    $i++;
                }

                foreach (json_decode($request->oldphoto) as $oldphoto){
                    if(\File::exists(public_path($oldphoto))){
                        \File::delete(public_path($oldphoto));
                    }
                }
            }else{
                $data = json_decode($request->oldphoto);
            }

            $movie=  Movie::find($id);
            $movie->codeno = $codeno;
            $movie->title = $title;
            $movie->photo = json_encode($data);
            $movie->year = $year;
            $movie->length = $length;
            $movie->language = $language;
            $movie->release_date = $release_date;
            $movie->release_country = $release_country;
            $movie->description = $description;
            $movie->link1 =$link1;
            $movie->link21 =$link2;
            $movie->link3 =$link3;
            $movie->save();

            return redirect()->route('movies.index')->with("successMsg", "New movie is ADDED in your data");


        }else{
            return Redirect::back()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);

        foreach (json_decode($movie->photo) as $oldphoto){
            if(\File::exists(public_path($oldphoto))){
                \File::delete(public_path($oldphoto));
            }
        }

        $movie->delete();

        return redirect()->route('movies.index')->with("successMsg", "New Movie is DELETED in your data");
    }
}
