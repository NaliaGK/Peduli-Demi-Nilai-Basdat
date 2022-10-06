@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">
      <h2>Faskes Page (FASKES VIEW)</h2>  
      </div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Nama Fasilitas Kesehatan : {{ $faskes->nama_faskes ?? 'not found' }}</h5>
        <p class="card-text">Alamat : {{ $faskes->alamat_faskes ?? 'not found' }}</p>
        <p class="card-text">Nomor Telepon : {{ $faskes->contact_faskes ?? 'not found' }}</p>
  </div>
       
    </hr>
  
  </div>
</div>