@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">
      <h2>Edit Booster</h2>
    </div>
  <div class="card-body">
      
      <form action="{{ url('booster/' .$boost->id_booster) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id_booster" id="id_booster" value="{{$boost->id_faskes}}" id="id" />
        <label>Vaksin</label></br>
        <input type="text" name="jenis_vaksin" id="jenis_vaksin" value="{{$boost->jenis_vaksin}}" class="form-control"></br>
        <label>Tempat</label></br>
        <input type="text" name="nama_tempat" id="nama_tempat" value="{{$boost->nama_tempat}}" class="form-control"></br>
        <label>Alamat</label></br>
        <input type="text" name="alamat" id="alamat" value="{{$boost->alamat}}" class="form-control"></br>
        <label>Waktu</label></br>
        <input type="text" name="jam_operasional" id="jam_operasional"  value="{{$boost->jam_operasional}}" class="form-control"></br>
        <label>No.kontak</label></br>
        <input type="text" name="contact" id="contact" value="{{$boost->contact}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop