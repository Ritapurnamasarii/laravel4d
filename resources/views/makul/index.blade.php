@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                    <a href="{{ route('makul-create') }}" class="btn btn-primary btn-md float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>KODE_MAKUL</th>
                                <th>NAMA_MAKUL</th>
                                <th style="width: 50px;">SKS</th>
                                <th style="width: 130px; text-align: center;">AKSI</th>
                            </tr>

                            @foreach ($makul as $mk)
                            <tr>
                                <td>{{ $mk->id }}</td>
                                <td>{{ $mk->kd_makul }}</td>
                                <td>{{ $mk->nama_makul }}</td>
                                <td style="text-align: center;">{{ $mk->sks }}</td>
                                <td>
                                    <a href="{{ route('makul-edit',$mk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('makul-hapus',$mk->id) }}" class="btn btn-sm btn-danger">Hapus</a>
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