{{-- @extends('layout.main')
@section('judul', 'KerjaLembur')

@section('main_content') --}}

<form method="POST" action="{{ route('sutradaras.store') }}">
{{ csrf_field() }}

&nbsp; 

<div>
    <label for="idsutradara"> Id Sutradara:</label>
    <input type="text" name="id_sutradara" value="">
    
</div>

&nbsp;    

<div>
    <label for="namasutradara">Nama Movie:</label>
    <input type="text" name="nama_sutradara" value="">
</div>

&nbsp; 

<div>
    <label for="alamat"> Alamat:</label>
    <input type="text" name="alamat_sutradara" value="">
</div>
 
&nbsp; 

<div>
    <label for="notelp"> No Telp:</label>
    <input type="text" name="no_telp" value="">
</div>

&nbsp;

<div>
<label for="subm"> submit:</label>
<button type="submit" >submit</button>
</div>

</form>