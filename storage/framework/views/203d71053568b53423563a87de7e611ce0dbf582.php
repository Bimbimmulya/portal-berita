<?php $__env->startPush('customcss'); ?>
<script src="<?php echo e(asset('plugins/datatables/dataTables.bootstrap.css')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('title','Dahboard'); ?>
<?php $__env->startSection('page-title'); ?>
<?php $__env->startSection('content'); ?>
<!-- Default box -->

<div class="col-xl-6 col-md-3 mb-5">
    <div class="box">
    <div class="box-header">
        <h4><div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Total Artikel</div></h4>
            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah : 21</div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-3 mb-5">
    <div class="box">
    <div class="box-header">
        <h4><div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> User Premium</div></h4>
            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah : 21</div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-3 mb-5">
    <div class="box">
    <div class="box-header">
        <h4><div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Jumlah Like</div></h4>
            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah : 21</div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-3 mb-5">
    <div class="box">
    <div class="box-header">
        <h4><div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Jumlah Comment</div></h4>
            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah : 21</div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-3 mb-5">
    <div class="box">
    <div class="box-header">
        <h4><div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Email Masuk</div></h4>
            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah : 21</div>
        </div>
    </div>
</div>

<!--box -->
<?php $__env->startPush('datatables'); ?>
<script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/datatables/datatables.bootstrap.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('customdatatables'); ?>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })

</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_blog-master\resources\views/admin/index.blade.php ENDPATH**/ ?>