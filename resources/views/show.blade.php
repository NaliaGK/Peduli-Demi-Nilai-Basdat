@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">User Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Nama : {{ $pedulins->name }}</h5>
        <p class="card-text">Alamat : {{ $pedulins->address }}</p>
        <p class="card-text">Nomor Telepon : {{ $pedulins->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>