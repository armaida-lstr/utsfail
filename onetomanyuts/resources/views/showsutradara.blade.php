@extends('layout.main')
@section('judul', 'KerjaLembur')

@section('pagetitle','Detail Sutradara')

@section('main_content')

<div class="container mt-3"> 
    <div>Id Sutradara :{{ $sutradara->id_sutradara }}</div>
    <div>Nama Sutradara :{{ $sutradara->nama_sutradara }}</div>
    <div>Alamat Sutradara :{{ $sutradara->alamat_sutradara}}</div>
    <div>No Telp :{{ $sutradara->no_telp }}</div>
</div>
@endsection
