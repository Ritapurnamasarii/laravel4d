@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Nilai Mahasiswa
                    <a href="{{ route('nilai-create') }}" class="btn btn-primary btn-md float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>NPM</th>
                                <th>NAMA</th>
                                <th>NAMA_MAKUL</th>
                                <th style="width: 50px;">SKS</th>
                                <th style="width: 50px;">NILAI</th>
                                <th style="width: 130px; text-align: center;">AKSI</th>
                            </tr>

                            @php $no = 1; @endphp
                            @foreach ($nilai as $nl)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $nl->mahasiswa->npm}}</td>
                                <td>{{ $nl->user->name}}</td>
                                <td>{{ $nl->makul->nama_makul}}</td>
                                <td>{{ $nl->makul->sks}}</td>
                                <td>{{ $nl->nilai}}</td>
                                <td>
                                    <a href="{{ route('nilai-edit',$nl->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('nilai-hapus',$nl->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection