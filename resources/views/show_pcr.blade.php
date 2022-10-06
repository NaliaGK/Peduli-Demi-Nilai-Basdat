@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">
      <h2>PCR Tersedia</h2>  
      </div>
  <div class="card-body">
  <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tempat</th>
                                        <th>Alamat</th>
                                        <th>Harga</th>
                                        <th>Waktu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pcr as $item) 
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->lokasi_pcr }}</td>
                                        <td>{{ $item->alamat_pcr }}</td>
                                        <td>{{ $item->harga_pcr }}</td>
                                        <td>{{ $item->waktu }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
  </div>
       
    </hr>
  
  </div>
</div>