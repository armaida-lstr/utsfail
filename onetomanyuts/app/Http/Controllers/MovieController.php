<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Str;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $active_welcome ="";
        $active_projects = "active";
        $active_courses ="";

        $movies = Movie::all();
        return view('movieshow', compact('active_welcome', 'active_projects', 'active_courses', 'movies'));
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createMovie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $nama_movie = Str::upper(Str::substr($request->Movie,1,2));
       Movie::create([ //kiri=nama kolom migration, kanan=nama diform.blade, tabel sama dengan form
            'id_movie' => $request->id_movie,
            'nama_movie' => $request->nama_movie,
            'tahun_movie' => $request->tahun_movie,
            'description' => $request->description,
            'sutradara_name' => $request->sutradara_name,
   
              ]);
   
   
               return redirect(route('movies.index')) ;
       }
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nama_movie)
    {
      //
      $movie = Movie::where('nama_movie', $nama_movie)->first();
      return view('showmovie', compact('movie'));
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
        $movies = Movie::findOrFail($id);
        return view('editMovie',compact('movies'));
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
        $movie = Movie::findOrFail($id);
        $nama_movie = Str::upper(Str::substr($request->movie,1,2));
        $movie->update([ //kiri=nama kolom migration, kanan=nama diform.blade, tabel sama dengan form
            'id_movie' => $request->id_movie,
            'nama_movie' => $request->nama_movie,
            'tahun_movie' => $request->tahun_movie,
            'description' => $request->description,
            'sutradara_name' => $request->sutradara_name,
   
               ]);
   
   
               return redirect(route('movies.index')) ;
       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect(route('movies.index'));
    }
}
