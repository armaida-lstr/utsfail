{{-- @extends('layout.main')
@section('judul', 'KerjaLembur')

@section('main_content') --}}

<form method="POST" action="{{ route('movies.store') }}">
{{ csrf_field() }}


&nbsp;

<div>
    <label for="idmovie"> Id Movie:</label>
    <input type="text" name="id_movie" value="">
    
</div>    

&nbsp;

<div>
    <label for="namamovie">Nama Movie:</label>
    <input type="text" name="nama_movie" value="">
</div>

&nbsp;

{{-- &nbsp;

<div>
    <label for="idsutradara">Id Sutradara:</label>
    <input type="text" name="id_sutradara" value="">
</div>

&nbsp; --}}

<div>
    <label for="tahunmovie"> Tahun Movie:</label>
    <input type="text" name="tahun_movie" value="">
</div>

&nbsp;

<div>
    <label for="descr"> Description:</label>
    <input type="text" name="description" value="">
</div>

&nbsp;

<div>
    <label for="namasutradara">Sutradara Name:</label>
    <input type="text" name="sutradara_name" value="">
</div>

&nbsp;

<div>
<label for="subm"> submit:</label>
<button type="submit" >submit</button>
</div>


</form>