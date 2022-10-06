@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">
      <h2>Tambahkan pengadaan vaksinasi Booster</h2>
    </div>
  <div class="card-body">
      
      <form action="{{ url('booster') }}" method="post">
        {!! csrf_field() !!}
        <label>Id Fasilitas Kesehatan</label></br>
        <input type="text" name="id_faskes" id="id_faskes" class="form-conetrol"></br>
        <label>Jenis Vaksin</label></br>
        <input type="text" name="jenis_vaksin" id="jenis_vaksin" class="form-control"></br>
        <label>Tempat</label></br>
        <input type="text" name="nama_tempat" id="nama_tempat" class="form-control"></br>
        <label>Alamat</label></br>
        <input type="text" name="alamat" id="alamat" class="form-control"></br>
        <label>Waktu</label></br>
        <input type="text" name="jam_operasional" id="jam_operasional" class="form-control"></br>
        <label>No.kontak</label></br>
        <input type="text" name="contact" id="contact" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop