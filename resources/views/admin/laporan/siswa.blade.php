@extends('admin.template')

@section('content')
    <legend>Laporan Data Siswa</legend>

    {{Form::open(['url'=>'admin/laporan/preview-siswa','method'=>'post','class'=>'form-horizontal'])}}
        <div class="form-group">
            <label for="" class="col-lg-2 control-label">Kelas</label>
            <div class="col-lg-4">
                <select name="kelas" id="kelas" class="form-control">
                    <option value="">--Pilih Kelas--</option>
                    @foreach($kelas as $row)
                        <option value="{{$row->kd_kelas}}">{{$row->kd_kelas}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group well">
            <label for="" class="col-lg-2 control-label"></label>
            <div class="col-lg-4">
                <button class="btn btn-primary">
                    <i class="glyphicon glyphicon-print"></i>
                    Tampilkan
                </button>
            </div>
        </div>
    {{Form::close()}}
@stop