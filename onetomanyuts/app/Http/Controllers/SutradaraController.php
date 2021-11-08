<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sutradara;
use Illuminate\Support\Str;

class SutradaraController extends Controller
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

        $sutradaras = Sutradara::all();
        return view('sutradarashow', compact('active_welcome', 'active_projects', 'active_courses', 'sutradaras'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createSutradara');
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
        $nama_sutradara = Str::upper(Str::substr($request->Sutradara,1,2));
        Sutradara::create([ //kiri=nama kolom migration, kanan=nama diform.blade, tabel sama dengan form
            'id_sutradara' => $request->id_sutradara,
            'nama_sutradara' => $request->nama_sutradara,
            'alamat_sutradara' => $request->alamat_sutradara,
            'no_telp' => $request->no_telp,
        ]);
   
               return redirect(route('sutradaras.index')) ;
       }
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nama_sutradara)
    {
        //
        $sutradara = Sutradara::where('nama_sutradara', $nama_sutradara)->first();
        return view('showsutradara', compact('sutradara'));
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
        $sutradaras = Sutradara::findOrFail($id);
        return view('editSutradara',compact('sutradaras'));
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
        $sutradara = Sutradara::findOrFail($id);
        $nama_sutradara = Str::upper(Str::substr($request->sutradara,1,2));
        $sutradara->update([ //kiri=nama kolom migration, kanan=nama diform.blade, tabel sama dengan form
            'id_sutradara' => $request->id_sutradara,
            'nama_sutradara' => $request->nama_sutradara,
            'alamat_sutradara' => $request->alamat_sutradara,
            'no_telp' => $request->no_telp,
        ]);
   
               return redirect(route('sutradaras.index')) ;
       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sutradara =  Sutradara::findOrFail($id);
        $sutradara->delete();
        return redirect(route('sutradaras.index'));
        //
    }
}
