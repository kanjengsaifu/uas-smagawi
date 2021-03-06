<?php $__env->startSection('cetak'); ?>
    <a href="<?php echo e(URL::to('admin/laporan/cetak-siswa?type=pdf&kelas='.$kelas)); ?>" class="btn btn-primary" target="new target">
        <i class="glyphicon glyphicon-print"></i>
        Export PDF
    </a>

    <a href="<?php echo e(URL::to('admin/laporan/cetak-siswa?type=excel&kelas='.$kelas)); ?>" class="btn btn-success" target="new target">
        <i class="glyphicon glyphicon-print"></i>
        Export Excel
    </a>

    <a href="<?php echo e(URL::to('admin/laporan/siswa')); ?>" class="btn btn-default">
        Kembali
    </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <legend>Laporan Data Siswa Kelas : <?php echo e($kelas); ?></legend>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>NISN</th>
                <th>No. Peserta</th>
                <th>Nama</th>
                <th>JK</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>NIK</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=0;?>
            <?php foreach($siswa as $row): ?>
                <?php $no++;?>
                <tr>
                    <td><?php echo e($no); ?></td>
                    <td><?php echo e($row->nis); ?></td>
                    <td><?php echo e($row->no_peserta); ?></td>
                    <td><?php echo e($row->nama); ?></td>
                    <td><?php echo e($row->jk); ?></td>
                    <td><?php echo e($row->tmp_lahir.','.$row->tgl_lahir); ?></td>
                    <td><?php echo e($row->nik); ?></td>
                    <td><?php echo e($row->agama); ?></td>
                    <td><?php echo e($row->alamat); ?></td>
                    <td><?php echo e($row->nm_ayah); ?></td>
                    <td><?php echo e($row->nm_ibu); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.laporan.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>