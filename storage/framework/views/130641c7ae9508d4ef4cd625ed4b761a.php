

<?php $__env->startSection('content'); ?>
<ul class="nav nav-tabs">
    <li class="nav-item">
        
    </li>
    <li class="nav-item">
        
    </li>
</ul>
<div class="container py-5">
    <?php $__currentLoopData = $grup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nis => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $grup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nis => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h4 class="text-start text-muted"><strong>UI</strong> | <?php echo e($nis); ?> | <?php echo e($group[0]->student->rombel); ?> | Wikrama 1</h4>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 py-5">
            <?php
                $total = $group->count(); // Menggunakan count() karena sudah dalam kelompok
            ?>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $no = 1; ?>
        <?php $__currentLoopData = $lates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keterlambatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card">
                    <div class="card-body text-start">
                        <h5 class="card-title">Keterlambatan ke - <?php echo e($no++); ?></h5>
                        <strong class="text-muted"><?php echo e($keterlambatan['date_time_late']); ?></strong>
                        <p><?php echo e($keterlambatan['information']); ?></p>
                    </div>
                    <img src="<?php echo e(asset('images/' . $keterlambatan['bukti'])); ?>"
                         class="card-img-top" alt="">
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    body {
        background-color: aliceblue;
        font-family: 'Poppins', sans-serif;
        font-size: 0.875rem;
        opacity: 1;
        overflow-y: scroll;
        margin: 0;
    }
    img{
        aspect-ratio: 3/2;
  object-fit: contain;
    }
    .card p {
        color: #0D6EFD;
        font-weight: 600;
    }

    .card-img-top {
        border-radius: 50px;
        padding: 20px;
    }

    .card {
        border-radius: 30px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
    }

    .card-body {
        padding: 25px;
        margin-top: -15px;
    }

    .btn-primary {
        border-radius: 50px;
        width: 120px;
    }

    .btn-primary:hover {
        background-color: black;
        border: none;
    }

    h3,
    h5 {
        color: rgba(107, 107, 107, 0.845);
    }
</style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APK\web-rekapitulasi\resources\views/lates/detail.blade.php ENDPATH**/ ?>