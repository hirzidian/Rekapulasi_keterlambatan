<?php $__env->startSection('content'); ?>
    <?php if(Session::get('success')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
    <?php endif; ?>

    <?php if(Session::get('deleted')): ?>
        <div class="alert"><?php echo e(Session::get('deleted')); ?></div>
    <?php endif; ?>

    <div class="text" style="margin-top: 20px; margin-left: 20px;">
        <h3>Data Rekap</h3>
        <p>Data Rekap</p>
    </div>

    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="<?php echo e(route('lates.index')); ?>" class="btn btn-outline-primary ms-2">Keseluruhan Data</a>
        <a href="<?php echo e(route('lates.rekap')); ?>" class="btn btn-primary ms-2">Rekapitulasi Data</a>
    </div>

    <div class="container">
        <div class="button" style="width: 800px; display: flex; margin-top: 50px; margin-left: 20px; justify-content: space-between;">
            <form action="<?php echo e(route('lates.search')); ?>" method="GET" class="input-group flex-nowrap">
                <input type="text" name="query" class="form-control" placeholder="Cari Detail Keterlambatan">
                <button type="submit" class="btn btn-info text-white">Search</button>
            </form>
        </div>

        <?php if(!isset($searchQuery)): ?>
            <table class="table" style="margin-top: 50px; text-align: start;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Jumlah Keterlambatan</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php $__currentLoopData = $grup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nis => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $total = $group->where('student.nis')->count();
                        ?>
                        <tr>
                            <td><?php echo e($no++); ?></td>
                            <td>(<?php echo e($nis); ?>)</td>
                            <td><?php echo e($group->first()->student->name); ?></td>
                            <td><?php echo e($total); ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="<?php echo e(route('lates.detail', ['nis' => $nis])); ?>" class="btn btn-info text-white m-2" style="background: purple;">Detail</a>                                </div>
                            </td>
                            
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <form action="" method="">
                                        <button type="submit" class="btn btn-info text-white m-2" style="background: purple;">Export PDF</button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php else: ?>
            
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APK\web-rekapitulasi\resources\views/lates/rekap.blade.php ENDPATH**/ ?>