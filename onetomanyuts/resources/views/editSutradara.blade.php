{{-- 
@extends('layout.main')
@section('judul', 'KerjaLembur')

@section('main_content') --}}
<form method="POST" action="{{ route('sutradaras.update', $sutradaras->id) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PATCH">

    &nbsp;
    
    <div>
        <label for="idsutradara"> Id Sutradara:</label>
        <input type="text" name="id_sutradara" value="{{ $sutradaras->id_sutradara }}" required>
        
    </div>    

    &nbsp;
    
    <div>
        <label for="namasutradara">Nama Sutradara:</label>
        <input type="text" name="nama_sutradara" value="{{$sutradaras->nama_sutradara }}" required>
    </div>

    &nbsp;
    
    <div>
        <label for="alamatsutradara"> Alamat Sutradara:</label>
        <input type="text" name="alamat_sutradara" value="{{ $sutradaras->alamat_sutradara }}" required>
    </div>

    &nbsp;
    
    <div>
        <label for="notelp"> No Telp:</label>
        <input type="text" name="no_telp" value="{{ $sutradaras->no_telp }}" required>
    </div>
    
    &nbsp;

    <div>
    <label for="subm"> submit:</label>
    <button type="submit" >submit</button>
    </div>
    
    </form>