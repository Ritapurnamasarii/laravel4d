@extends('layouts.app')

@section('content')
<?php
  $jsArray = "var nameAnggota = new Array();\n";
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa</div>

                <div class="card-body">
                    <form method="post" action="{{ route('mahasiswa-simpan') }}" class="form-horizontal">
                    @csrf

                        <div class="form-group">
                            <div class="col-sm-12">
                            <input style="display: none;" type="number" class="form-control" name="id" id="id" placeholder="Langsung Pilih Nama Lengkap" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                            <input style="display: none;" type="number" class="form-control" name="user_id" id="user_id" placeholder="Langsung Pilih Nama Lengkap" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <lable for="nama" class="col-sm-2 control-lable">Nama Lengkap</lable>
                            
                            <div class="col-sm-12">
                            <select class="form-control" id="name"  name="name" onchange="changeValue(this.value)">
                                <option value="selected">Pilih Nama Mahasiswa</option>
                                @foreach ($username as $usr)
                                    <option value="{{ $usr->name }}">{{ $usr->name }}</option>
                                    <?php
                                        $jsArray .= "nameAnggota['$usr->name'] = {idAnggota:" . addslashes($usr->id) . "};\n";
                                    ?>
                                @endforeach
                                <option value="selected">Jika Nama tidak terdaftar, silahkan register terlebih dahulu</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <lable for="npm" class="col-sm-2 control-lable">NPM</lable>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" name="npm" placeholder="Masukan NPM..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <lable for="tempat_lahir" class="col-sm-2 control-lable">Tempat Lahir</lable>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat lahir..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <lable for="tanggal_lahir" class="col-sm-2 control-lable">Tanggal Lahir</lable>
                            <div class="col-sm-12">
                            <input type="date" class="form-control" name="tgl_lahir" placeholder="Masukan Tanggal Lahir..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <lable for="alamat" class="col-sm-2 control-lable">Alamat</lable>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <lable for="telepon" class="col-sm-2 control-lable">Telpon</lable>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" name="telepon" placeholder="Masukan Telpon..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-lable">Gender</label>
                            <div class="col-sm-12">
                                <select class="custom-select" id="gender" name="gender" required>
                                    <option selected disabled value="">Pilih Gender...</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-12">
                            <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
                            <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    <?php echo $jsArray; ?>
    function changeValue(id){
    document.getElementById("user_id").value = nameAnggota[id].idAnggota;
    document.getElementById("id").value = nameAnggota[id].idAnggota;
    };
</script>
@endsection