<?php $__env->startSection('content'); ?>
	<legend>Selamat Datang dihalaman Guru</legend>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('guru.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>