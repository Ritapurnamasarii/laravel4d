@extends('layouts.app')

@section('content')
<?php
  $jsArray = "var nameAnggota = new Array();\n";
  $jsArrayy = "var nameMakul = new Array();\n";
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Nilai Mahasiswa</div>

                <div class="card-body">
                    <form method="post" action="{{ route('nilai-simpan') }}">
                        @csrf
                        <div class="form-group">
                                
                            <div class="form-row">
                                <div style="display: none;">
                                    <lable for="id" class="col-sm-2 control-lable">ID User</lable>
                                    <div class="col-sm-12">
                                    <input type="number" class="form-control" name="user_id" id="user_id" placeholder="Langsung Pilih Nama Lengkap" readonly>
                                    </div>
                                </div>

                                <div class="col">
                                    <lable for="nama" class="col-sm-2 control-lable">Nama Lengkap</lable>
                                    <div class="col-sm-12">
                                    <select class="form-control" id="name"  name="name" onchange="changeValue(this.value)">
                                        <option value="selected">Pilih Nama Mahasiswa</option>
                                        @foreach ($user as $usr)
                                            <option value="{{ $usr->name }}">{{ $usr->name }}</option>
                                            <?php
                                                $jsArray .= "nameAnggota['$usr->name'] = {idAnggota:" . addslashes($usr->id) . "};\n";
                                            ?>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>

                                <div style="display: none;">
                                    <lable for="idi" class="col-sm-2 control-lable">Kd Makul</lable>
                                    <div class="col-sm-12">
                                    <input type="text" class="form-control" name="kd_makul" id="kd_makul" placeholder="Langsung Pilih Nama Makul" readonly>
                                    </div>
                                </div>

                                <div class="col">
                                    <lable for="makul" class="col-sm-2 control-lable">Mata Kuliah</lable>
                                    <div class="col-sm-12">
                                    <select class="form-control" id="makul"  name="makul" onchange="changeValuee(this.value)">
                                        <option value="selected">Pilih Mata Kuliah</option>
                                        @foreach ($makul as $mk)
                                            <option value="{{ $mk->nama_makul }}">{{ $mk->nama_makul }}</option>
                                            <?php
                                                $jsArrayy .= "nameMakul['$mk->nama_makul'] = {kd_makul:'" . addslashes($mk->kd_makul) . "'};\n";
                                            ?>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <lable for="nilai" class="col-sm-2 control-lable">Nilai</lable>
                                    <div class="col-sm-12">
                                    <input type="number" class="form-control" name="nilai" placeholder="Masukan Nilai..." maxlength="8" required>
                                    </div>
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

<script type="text/javascript">
    <?php echo $jsArray; ?>
    <?php echo $jsArrayy; ?>

    function changeValue(id){
    document.getElementById("user_id").value = nameAnggota[id].idAnggota;
    document.getElementById("id").value = nameAnggota[id].idAnggota;
    };

    
    function changeValuee(id){
    document.getElementById("kd_makul").value = nameMakul[id].kd_makul;
    document.getElementById("id").value = nameMakul[id].kd_makul;
    };
</script>
@endsection