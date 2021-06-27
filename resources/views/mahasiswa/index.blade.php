@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                    <a href="{{ route('mahasiswa-create') }}" class="btn btn-primary btn-md float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>NAMA LENGKAP</th>
                                <th>NPM</th>
                                <th>TEMPAT, TANGGAL LAHIR</th>
                                <th>ALAMAT</th>
                                <th>TELEPON</th>
                                <th>GENDER</th>
                                <TH>AKSI</TH>
                            </tr>

                            @php $no = 1; @endphp
                            @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td>{{ $no++}}</td>
                                <td>{{ $mhs->user->name }}</td>
                                <td>{{ $mhs->npm }}</td>
                                <td>{{ $mhs->tempat_lahir.', '.$mhs->tgl_lahir }}</td>
                                <td>{{ $mhs->alamat }}</td>
                                <td>{{ $mhs->telepon }}</td>
                                <td><?php if ($mhs->gender == "P" ) echo 'Perempuan'; elseif ($mhs->gender == "L" ) echo 'Laki-Laki';?></td>
                                <td>
                                    <a href="{{ route('mahasiswa-edit', $mhs->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('mahasiswa-hapus', $mhs->id) }}" class="btn btn-sm btn-danger">Hapus</a>
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