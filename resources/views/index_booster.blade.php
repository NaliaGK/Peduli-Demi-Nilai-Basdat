@extends('layout')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Booster</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/booster/create') }}" class="btn btn-success btn-sm" title="Add New Booster">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Id Faskes</th>
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
                                        <td>{{ $item->id_faskes }}</td>
                                        <td>{{ $item->nama_tempat }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->jenis_vaksin }}</td>
                                        <td>{{ $item->jam_operasional }}</td>
                                        <td>{{ $item->contact }}</td>
                                        <td>
                                            <a href="{{ url('/booster/' . $item->id_booster . '/edit') }}" title="Edit Booster"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/booster' . '/' . $item->id_booster) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Booster" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection