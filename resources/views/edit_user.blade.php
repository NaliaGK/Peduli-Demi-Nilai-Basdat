@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">
      <h2>Edit User</h2>
    </div>
  <div class="card-body">
      
      <form action="{{ url('users/' .$users->id_user) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id_pcr" id="id_pcr" value="{{$users->id_pcr}}" id="id" />
        <label>Role</label></br>
        <input type="text" name="role" id="role" value="{{$users->role}}" class="form-control"></br>
        <label>Nama Awal</label></br>
        <input type="text" name="first_name" id="first_name" value="{{$users->first_name}}" class="form-control"></br>
        <label>Nama Akhir</label></br>
        <input type="text" name="last_name" id="last_name" value="{{$users->last_name}}" class="form-control"></br>
        <label>Tempat Lahir</label></br>
        <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{$users->tempat_lahir}}" class="form-control"></br>
        <label>NIK</label></br>
        <input type="text" name="nik" id="nik" value="{{$users->nik}}" class="form-control"></br>
        <label>e-mail</label></br>
        <input type="text" name="email" id="email" value="{{$users->email}}" class="form-control"></br>
        <label>Alamat</label></br>
        <input type="text" name="alamat" id="alamat" value="{{$users->alamat}}" class="form-control"></br>
        <label>No.Telepon</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$users->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop