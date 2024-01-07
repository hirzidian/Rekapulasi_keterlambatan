

<?php $__env->startSection('content'); ?>

<button type="button" class="btn btn-primary">Tambah</button>
<button type="button" class="btn btn-info">Export Data Keterlambatan</button>
<div class="container py-5">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link<?php echo e(request()->is('lates') ? ' active' : ''); ?>"
                href="<?php echo e(route('lates.index')); ?>">Keseluruhan Data</a>
        </li>
        <li class="nav-item">
            <a class="nav-link<?php echo e(request()->is('export') ? ' active' : ''); ?>"
                href="<?php echo e(route('lates.export')); ?>">Rekapitulasi Data</a>
        </li>
    </ul>
    <div class="table" style="margin-bottom: 2rem;">
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah Keterlambatan</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Expot (.pdf)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>1 aja</td>
                    <td>24-11-2023 08:00</td>
                    <td>Kamu nanyea</td>

                    <td>
                        <a class=" text-primary nav-link<?php echo e(request()->is('lates/detail') ? ' active' : ''); ?>"
                            href="<?php echo e(route('lates.detail')); ?>">Lihat</a>
                    </td>
                    </td>
                    <td>
                        <button class="btn btn-primary">Cek surat Pernyataan</button>
                    </td>
                </tr>
                <!-- Tambahkan row baru disini -->
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APK\web-rekapitulasi\resources\views/lates/export.blade.php ENDPATH**/ ?>