
@extends('layout.main')
@section('judul', 'KerjaLembur')

@section('main_content')

<div class="container">
    <div class="row justify-content-center">
        <h1>SUTRADARA</h1>
    
        <div class="text-right">
            <a class="btn btn-success pull-right" href="{{ route('sutradaras.create') }}" >Add Sutradara</a>
    
        </div>
    
    </div>
</div>

<table class="table table-striped">
    
   <tr class="duu">
       <th>No</th>
       <th>Id Sutradara</th>
       <th>Nama Sutradara</th>
       <th>Alamat Sutradara</th>
       <th>No Telp</th>
       <th>action</th>
 
   </tr>

   @foreach ($sutradaras as $pro)
   <tr>
       <td> {{ $loop->index+1 }}</td>
       <td>{{ $pro->id_sutradara }}</td>
       <td>{{ $pro->nama_sutradara }}</td>
       <td>{{ $pro->alamat_sutradara }}</td>
       <td>{{ $pro->no_telp }}</td>
          
       <td>
        <form action="{{ route('sutradaras.destroy', $pro->id) }}" method="POST">
         <a class="btn btn-info" href="{{ route('sutradaras.show', $pro->nama_sutradara) }}">Show</a>
         <a class="btn btn-primary" href="{{ route('sutradaras.edit', $pro->id) }}">Edit</a>
         
         @csrf
         @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Sutradara</button>
      
         </form>
    </td>
    </tr>
       
   @endforeach


</table>
@endsection
