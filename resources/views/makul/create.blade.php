@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Mata Kuliah</div>

                <div class="card-body">
                    <form method="post" action="{{ route('makul-simpan') }}">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Kode Makul</label>
                                    <input type="text" name="kd_makul" class="form-control" placeholder="Masukan Kode Makul">
                                </div>
                                <div class="col">
                                    <label for="">Nama Makul</label>
                                    <input type="text" name="nama_makul" class="form-control" placeholder="Masukan Nama Makul">
                                </div>
                                <div class="col">
                                    <label for="">SKSl</label>
                                    <input type="number" name="sks" class="form-control" placeholder="Masukan SKS Makul">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                                    <a href="{{ route('makul') }}" class="btn btn-danger btn-md">Batal</a>
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