@extends('layout.main')
@section('judul', 'KerjaLembur')

@section('pagetitle','Detail Movie')

@section('main_content')

<div class="container mt-3"> 
 {{-- <h1>{{ $courses['course_code'] }}</h1> --}}
    {{-- <p>Course_code :{{ $courses['course_code'] }}</p> --}}
    <div>Id Movie :{{ $movie->id_movie }}</div>
    <div>Nama Movie :{{ $movie->nama_movie }}</div>
    <div>Tahun Movie :{{ $movie->tahun_movie}}</div>
    <div>Description :{{ $movie->description }}</div>
    <div>Nama Sutradara  :{{ $movie->sutradara_name }}</div>


</div>
@endsection
