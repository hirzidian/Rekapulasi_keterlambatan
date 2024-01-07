

<?php $__env->startSection('content'); ?>

<div class="container border py-4 rounded">
<?php if(Session::get('success')): ?>
    <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
<?php endif; ?>
<?php if(Session::get('deleted')): ?>
    <div class="alert alert-warning"><?php echo e(Session::get('deleted')); ?></div>
<?php endif; ?>

<div class="d-flex justify-content-end mb-3">
    <a class="btn btn-secondary" href="<?php echo e(route('rombels.create')); ?>">Tambah</a>
</div>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Rombel</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $rombel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($item['rombel']); ?></td>
                    <td class="d-flex justify-content-center">
                        <a href="<?php echo e(route('rombels.edit', $item->id)); ?>" class="btn btn-primary me-3">Edit</a>
                        <form action="<?php echo e(route('rombels.delete', $item->id)); ?>" method="POST">
                         <?php echo csrf_field(); ?>
                         <?php echo method_field('DELETE'); ?>
                         <button type="submit" class="btn btn-danger">Hapus</button>
                     </form>                     
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\web-rekapitulasi\resources\views/rombels/index.blade.php ENDPATH**/ ?>