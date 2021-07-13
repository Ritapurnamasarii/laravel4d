@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa</div>

                <div class="card-body">
                    <form method="post" action="{{ route('mahasiswa-update', $username->id) }}" class="form-horizontal">
                    @csrf

                        <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                                <lable for="id" class="col-sm-2 control-lable">ID User</lable>
                                    <div>
                                    <input type="number" class="form-control" name="user_id" id="user_id" value="{{ is_null ($username) ? 'Masukan Kode Makul' : $username->id }}" readonly>
                                    </div>
                                </div>

                                <div class="col">
                                    <lable for="nama" class="col-sm-2 control-lable">Nama Lengkap</lable>
                                    <div>
                                    <input type="text" class="form-control" name="name" placeholder="Masukan Nama..." value="{{ is_null ($username) ? 'Masukan Nama Lengkap' : $username->name }}" required>
                                    </div>
                                </div>

                                <div class="col">
                                    <lable for="npm" class="col-sm-2 control-lable">NPM</lable>
                                    <div>
                                    <input type="text" class="form-control" name="npm" value="{{ is_null ($mahasiswa) ? 'Masukan NPM' : $mahasiswa->npm }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <lable for="tempat_lahir" class="col-sm-2 control-lable">Tempat Lahir</lable>
                                    <div>
                                    <input type="text" class="form-control" name="tempat_lahir" value="{{ is_null ($mahasiswa) ? 'Masukan Temapat Lahir' : $mahasiswa->tempat_lahir }}" required>
                                    </div>
                                </div>

                                <div class="col">
                                    <lable for="tanggal_lahir" class="col-sm-2 control-lable">Tanggal Lahir</lable>
                                    <div>
                                    <input type="date" class="form-control" name="tgl_lahir" value="{{ is_null ($mahasiswa) ? 'Masukan Tanggal Lahir' : $mahasiswa->tgl_lahir }}" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <lable for="telepon" class="col-sm-2 control-lable">Telpon</lable>
                                    <div>
                                    <input type="text" class="form-control" name="telepon" value="{{ is_null ($mahasiswa) ? 'Masukan No Telepon' : $mahasiswa->telepon }}" required>
                                    </div>
                                </div>

                                <div class="col">
                                    <lable for="gender" class="col-sm-2 control-lable">Gender</lable>
                                    <div>
                                        <select class="custom-select" id="gender" name="gender">
                                            <option selected disabled value="">Pilih Gender...</option>
                                            <option <?php if ($mahasiswa->gender == "L" ) echo 'selected';?>  value="L" selected>Laki-Laki</option>
                                            <option <?php if ($mahasiswa->gender == "P" ) echo 'selected';?>  value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                                <lable for="alamat" class="col-sm-2 control-lable">Alamat</lable>
                                    <div>
                                        <textarea cols="130" rows="3" name="alamat" placeholder="Masukan Alamat..." style="resize: none;">{{ is_null ($mahasiswa) ? 'Masukan Alamat' : $mahasiswa->alamat }}</textarea> <br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group float-right">
                            <div class="col-sm-offset-2 col-sm-12">
                            <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
                            <a href="{{ route('mahasiswa') }}" class="btn btn-warning">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection