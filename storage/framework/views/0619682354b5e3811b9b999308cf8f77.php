

<?php $__env->startSection('content'); ?>
<h1>Data Siswa</h1>
<h5><span style="color: blue">Data Mastar/Data Siswa</span></h5>

    <div class="container border py-4 rounded bg-secondary-subtle">
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <?php if(session('deleted')): ?>
            <div class="alert alert-warning"><?php echo e(session('deleted')); ?></div>
        <?php endif; ?>
        <?php if(Auth::check() && Auth::user()->role == 'admin'): ?>
            <div class="d-flex justify-content-end mb-3">
                <a class="btn btn-primary" href="<?php echo e(route('students.create')); ?>">Tambah Data</a>
            </div>
        <?php endif; ?>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Rombel</th>
                    <th>Rayon</th>
                    <?php if(Auth::check() && Auth::user()->role == 'admin'): ?>
                        <th class="text-center">Aksi</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($loop->index + 1); ?></td>
                        <td><?php echo e($item->nis); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->rombels->rombel); ?></td>
                        <td><?php echo e($item->rayons->rayon); ?></td>
                        <?php if(Auth::check() && Auth::user()->role == 'admin'): ?>
                            <td class="d-flex justify-content-center">
                                <a href="<?php echo e(route('students.edit', $item->id)); ?>" class="btn btn-primary me-3">Edit</a>
                                <form action="<?php echo e(route('students.delete', $item->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteConfirmationModal">
                                        Hapus
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1"
                                        aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi
                                                        Hapus</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Yakin ingin menghapus data ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data siswa.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PORDUKTIF-XI-5\Uji_kelayakan\web-rekapitulasi\resources\views/students/index.blade.php ENDPATH**/ ?>