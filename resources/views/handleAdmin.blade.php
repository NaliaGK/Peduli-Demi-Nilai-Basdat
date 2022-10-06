@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                <div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>PeduliLindungi Faskes List</h2>
                </div>
                <div class="card-body">
                    <!-- <a href="{{ url('/pedulin/create') }}" class="btn btn-success btn-sm" title="Add New User">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a> -->
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Deskripsi</th>
                                    <th>No.tlp</th>
                                    <th>Bank</th>
                                    <th>No.Rekening</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($faskes as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_faskes }}</td>
                                    <td>{{ $item->alamat_faskes }}</td>
                                    <td>{{ $item->deskripsi_faskes }}</td>
                                    <td>{{ $item->contact_faskes }}</td>
                                    <td>{{ $item->nama_bank }}</td>
                                    <td>{{ $item->no_rekening }}</td>

                                    <td>
                                        <a href="{{ url('/faskes/' . $item->id) }}" title="View Faskes"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/faskes/' . $item->id . '/edit') }}" title="Edit Faskes"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/pedulin' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection