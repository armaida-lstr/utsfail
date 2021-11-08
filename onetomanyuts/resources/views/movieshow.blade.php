
@extends('layout.main')
@section('judul', 'KerjaLembur')

@section('main_content')

<div class="container">
    <div class="row justify-content-center">
        <h1>MOVIES</h1>
    
        <div class="text-right">
            <a class="btn btn-success pull-right" href="{{ route('movies.create') }}" >Add Movies</a>
      
        </div>

</div>

<table class="table table-striped">
    
   <tr class="duu">
       <th>No</th>
       <th>Id Movie</th>
       <th>Nama Movie</th>
       <th>Tahun Movie</th>
       <th>Description</th>
       <th>Id Sutradara</th>
       <th>action</th>
 
   </tr>

   @foreach ($movies as $pro)
   <tr>
       <td> {{ $loop->index+1 }}</td>
       <td>{{ $pro->id_movie }}</td>
       <td>{{ $pro->nama_movie }}</td>
       <td>{{ $pro->tahun_movie }}</td>
       <td>{{ $pro->description }}</td>
       <td>{{ $pro->sutradara_name }}</td>
          
       <td>
        <form action="{{ route('movies.destroy', $pro->id) }}" method="POST">
         <a class="btn btn-info" href="{{ route('movies.show', $pro->nama_movie) }}">Show</a>
         <a class="btn btn-primary" href="{{ route('movies.edit', $pro->id) }}">Edit</a>
         
         @csrf
         @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Movie</button>


     
      
         </form>
        
      </div>
    </td>
    </tr>

   
       
   @endforeach


</table>
@endsection
