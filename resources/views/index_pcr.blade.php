@extends('layout')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>PCR</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/pcr/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Id PCR</th>
                                        <th>Id faskes</th>
                                        <th>Lokasi</th>
                                        <th>Alamat</th>
                                        <th>Harga</th>
                                        <th>Waktu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pcr as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->id_pcr }}</td>
                                        <td>{{ $item->id_faskes}}</td>
                                        <td>{{ $item->lokasi_pcr }}</td>
                                        <td>{{ $item->alamat_pcr }}</td>
                                        <td>{{ $item->harga_pcr }}</td>
                                        <td>{{ $item->waktu }}</td>
                                        <td>
                                            <!-- <a href="{{ url('/pcr/' . $item->id_pcr) }}" title="View PCR"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> -->
                                            <a href="{{ url('/pcr/' . $item->id_pcr . '/edit') }}" title="Edit PCR"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/pcr' . '/' . $item->id_pcr) }}" accept-charset="UTF-8" style="display:inline">
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