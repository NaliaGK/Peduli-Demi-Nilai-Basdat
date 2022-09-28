@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('pedulin/' .$pedulins->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$pedulins->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" name="name" id="name" value="{{$pedulins->name}}" class="form-control"></br>
        <label>Alamat</label></br>
        <input type="text" name="address" id="address" value="{{$pedulins->address}}" class="form-control"></br>
        <label>Nomor Telepon</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$pedulins->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop