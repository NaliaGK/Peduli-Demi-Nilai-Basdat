@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">
      <h2>Edit Faskes Page (ADMIN ONLY)</h2>
    </div>
  <div class="card-body">
      
      <form action="{{ url('faskes/' .$faskes->id_faskes) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id_faskes" id="id_faskes" value="{{$faskes->id_faskes}}" id="id" />
        <label>Nama</label></br>
        <input type="text" name="nama_faskes" id="nama_faskes" value="{{$faskes->nama_faskes}}" class="form-control"></br>
        <label>Alamat</label></br>
        <input type="text" name="alamat_faskes" id="alamat_faskes" value="{{$faskes->alamat_faskes}}" class="form-control"></br>
        <label>Deskripsi</label></br>
        <input type="text" name="deskripsi_faskes" id="deskripsi_faskes" value="{{$faskes->deskripsi_faskes}}" class="form-control"></br>
        <label>Kontak</label></br>
        <input type="text" name="contact_faskes" id="contact_faskes"  value="{{$faskes->contact_faskes}}" class="form-control"></br>
        <label>No.Rekening</label></br>
        <input type="text" name="no_rekening" id="no_rekening" value="{{$faskes->no_rekening}}" class="form-control"></br>
        <label>Bank Rekening</label></br>
        <input type="text" name="nama_bank" id="nama_bank" value="{{$faskes->nama_bank}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop