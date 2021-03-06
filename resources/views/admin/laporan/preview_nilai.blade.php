@extends('admin.laporan.template')

@section('cetak')
    <a href="{{URL::to('admin/laporan/cetak-nilai?type=pdf&kelas='.$kelas.'&mapel='.$mapel)}}" class="btn btn-primary" target="new target">
        <i class="glyphicon glyphicon-print"></i>
        Export PDF
    </a>

    <a href="{{URL::to('admin/laporan/cetak-nilai?type=excel&kelas='.$kelas.'&mapel='.$mapel)}}" class="btn btn-success" target="new target">
        <i class="glyphicon glyphicon-print"></i>
        Export Excel
    </a>

    <a href="{{URL::to('admin/laporan/nilai')}}" class="btn btn-default">
        Kembali
    </a>
@stop


@section('content')
    <legend>Data Nilai</legend>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kelas</th>
                <th> : {{$kelas}}</th>
            </tr>
            <tr>
                <th>Mata Pelajaran</th>
                <th> : {{$mapel}}</th>
            </tr>
        </thead>
    </table>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>NISN</th>
                <th>No. Peserta</th>
                <th>Nama</th>
                <th>Benar</th>
                <th>Salah</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=0;?>
            @foreach($siswa as $row)
                <?php 
                    $no++;
                    $benar=DB::table('nilai_siswa')
                            ->where('kd_mapel',$mapel)
                            ->where('kd_kelas',$kelas)
                            ->where('nis',$row->nis)
                            ->where('benar','Y')
                            ->count();

                    $salah=DB::table('nilai_siswa')
                            ->where('kd_mapel',$mapel)
                            ->where('kd_kelas',$kelas)
                            ->where('nis',$row->nis)
                            ->where('benar','N')
                            ->count();
                ?>
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$row->nis}}</td>
                    <td>{{$row->no_peserta}}</td>
                    <td>{{$row->nama}}</td>
                    <td>{{$benar}}</td>
                    <td>{{$salah}}</td>
                    <td>
                        {{$benar-$salah}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop