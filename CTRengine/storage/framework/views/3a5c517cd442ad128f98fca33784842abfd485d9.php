<?php $__env->startSection('content'); ?>
<div class="container">
    <a href="<?php echo e(route('feemng')); ?>" class="btn btn-success">Edit Fee</a>
    <a href="<?php echo e(route('ordermarket')); ?>" class="btn btn-success">Order Exchange</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>