@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">
      <h2>Register for PeduliLindungi Here</h2>
    </div>
  <div class="card-body">
      
      <form action="{{ url('pedulin') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="name" id="name" class="form-conetrol"></br>
        <label>Alamat</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Nomor Telepon</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop