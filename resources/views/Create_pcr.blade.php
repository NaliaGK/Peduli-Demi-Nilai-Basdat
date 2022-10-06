@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">
      <h2>Tambahkan Tempat PCR</h2>
    </div>
  <div class="card-body">
      
      <form action="{{ url('pcr') }}" method="post">
        {!! csrf_field() !!}
        <label>Id faskes</label></br>
        <input type="text" name="id_faskes" id="id_faskes" class="form-control"></br>
        <label>Lokasi</label></br>
        <input type="text" name="lokasi_pcr" id="lokasi_pcr" class="form-control"></br>
        <label>Alamat</label></br>
        <input type="text" name="alamat_pcr" id="alamat_pcr" class="form-control"></br>
        <label>Harga</label></br>
        <input type="text" name="harga_pcr" id="harga_pcr" class="form-control"></br>
        <label>Waktu</label></br>
        <input type="text" name="waktu" id="waktu" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop