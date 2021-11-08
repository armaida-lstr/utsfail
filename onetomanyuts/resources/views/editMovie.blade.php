
{{-- @extends('layout.main')
@section('judul', 'KerjaLembur')

@section('main_content') --}}
<form method="POST" action="{{ route('movies.update', $movies->id) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PATCH">
    &nbsp;

    <div>
        <label for="idmovie"> Id Movie:</label>
        <input type="text" name="id_movie" value="{{ $movies->id_movie }}" required>
        
    </div>    

    &nbsp;
    
    <div>
        <label for="namamovie">Nama Movie:</label>
        <input type="text" name="nama_movie" value="{{ $movies->nama_movie }}" required>
    </div>

    &nbsp;

    {{-- &nbsp;
    
    <div>
        <label for="idsutradara">Id Sutradara:</label>
        <input type="text" name="id_sutradara" value="{{ $sutradaras->id_sutradara }}" required>
    </div>

    &nbsp; --}}
    
    <div>
    
    <div>
        <label for="tahunmovie"> Tahun Movie:</label>
        <input type="text" name="tahun_movie" value="{{ $movies->tahun_movie }}" required>
    </div>

    &nbsp;
    
    <div>
        <label for="descr"> Description:</label>
        <input type="text" name="description" value="{{ $movies->description }}" required>
    </div>

    &nbsp;
    
    <div>
        <label for="sutradaraname">Nama Sutradara:</label>
        <input type="text" name="name_sutradara" value="{{ $movies->sutradaraname }}" required>
    </div>

    &nbsp;

<div>
<label for="subm"> submit:</label>
<button type="submit" >submit</button>
</div>

    
    
    </form>