@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Mata Kuliah</div>

                <div class="card-body">
                    <form method="post" action="{{ route('makul-update', $makul->id) }}">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Kode Makul</label>
                                    <input type="text" name="kd_makul" class="form-control" value="{{ is_null ($makul) ? 'Masukan Kode Makul' : $makul->kd_makul }}">
                                </div>
                                <div class="col">
                                    <label for="">Nama Makul</label>
                                    <input type="text" name="nama_makul" class="form-control" value="{{ is_null ($makul) ? 'Masukan Nama Makul' : $makul->nama_makul }}">
                                </div>
                                <div class="col">
                                    <label for="">SKS</label>
                                    <input type="number" name="sks" class="form-control" value="{{ is_null ($makul) ? 'Masukan SKS' : $makul->sks }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                                    <a href="{{ route('nilai') }}" class="btn btn-danger btn-md">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection