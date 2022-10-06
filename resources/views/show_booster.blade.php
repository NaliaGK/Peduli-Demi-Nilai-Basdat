@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">
      <h2>Booster Tersedia pada lokasi berikut (USER VIEW)</h2>  
      </div>
  <div class="card-body">
  <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tempat</th>
                                        <th>Alamat</th>
                                        <th>Jenis Vaksin</th>
                                        <th>Waktu</th>
                                        <th>No. Kontak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($boost as $item) 
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_tempat }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->jenis_vaksin }}</td>
                                        <td>{{ $item->jam_operasional }}</td>
                                        <td>{{ $item->contact }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
  </div>
       
    </hr>
  
  </div>
</div>