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
                <div class="card-header">Edit Data Nilai Mahasiswa</div>

                <div class="card-body">
                    <form method="post" action="{{ route('nilai-update', $nilai->id) }}">
                        @csrf
                        <div class="form-group">
                            
                                <div>
                                    <lable for="id" class="col-sm-2 control-lable">ID User</lable>
                                    <div class="col-sm-12">
                                    <input type="number" class="form-control" name="user_id" id="user_id" placeholder="Langsung Pilih Nama Lengkap" value="{{ is_null ($nilai) ? '' : $nilai->user_id }}" readonly>
                                    </div>
                                </div>
                            <div class="form-row">
                                <div class="col">
                                    <lable for="nama" class="col-sm-2 control-lable">Nama Lengkap</lable>
                                    <div class="col-sm-12">
                                    <select class="form-control" id="name"  name="name" onchange="changeValue(this.value)">
                                        <option value="selected">Pilih Nama Mahasiswa</option>
                                        @foreach ($user as $usr)
                                            <option value="{{ $usr->name }}" {{ $nilai->user_id == $usr->id ? 'selected' : ''}} >{{ $usr->name }}</option>
                                            <?php
                                                $jsArray .= "nameAnggota['$usr->name'] = {idAnggota:" . addslashes($usr->id) . "};\n";
                                            ?>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>

                                <div>
                                    <lable for="idi" class="col-sm-2 control-lable">Kd Makul</lable>
                                    <div class="col-sm-12">
                                    <input type="text" class="form-control" name="kd_makul" id="kd_makul" placeholder="Langsung Pilih Nama Makul" value="{{ is_null ($nilai) ? '' : $nilai->kd_makul }}" readonly>
                                    </div>
                                </div>

                                <div class="col">
                                    <lable for="makul" class="col-sm-2 control-lable">Mata Kuliah</lable>
                                    <div class="col-sm-12">
                                    <select class="form-control" id="makul"  name="makul" onchange="changeValuee(this.value)">
                                        <option value="selected">Pilih Mata Kuliah</option>
                                        @foreach ($makul as $mk)
                                            <option value="{{ $mk->nama_makul }}" {{ $nilai->kd_makul == $mk->kd_makul ? 'selected' : ''}} >{{ $mk->nama_makul }}</option>
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
                                    <input type="number" class="form-control" name="nilai" placeholder="Masukan Nilai..." maxlength="8" value="{{ is_null ($nilai) ? 'Masukan Nilai' : $nilai->nilai }}" required>
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