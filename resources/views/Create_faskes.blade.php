@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">
      <h2>Tambahkan Fasilitas Kesehatan (Register)</h2>
    </div>
  <div class="card-body">
      
      <form action="{{ url('faskes') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama_faskes" id="nama_faskes" class="form-conetrol"></br>
        <label>Alamat</label></br>
        <input type="text" name="alamat_faskes" id="alamat_faskes" class="form-control"></br>
        <label>Deskripsi</label></br>
        <input type="text" name="deskripsi_faskes" id="deskripsi_faskes" class="form-control"></br>
        <label>Kontak</label></br>
        <input type="text" name="contact_faskes" id="contact_faskes" class="form-control"></br>
        <label>No.Rekening</label></br>
        <input type="text" name="no_rekening" id="no_rekening" class="form-control"></br>
        <label>Bank Rekening</label></br>
        <input type="text" name="nama_bank" id="nama_bank" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop