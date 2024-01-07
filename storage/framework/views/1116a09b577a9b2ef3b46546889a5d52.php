

<?php $__env->startSection('content'); ?>
<h1>Tambah Data Rayon</h1>
<h5><span style="color: blue">Data Mastar/Data Rayon/Tambah Data</span></h5>
    <form action="<?php echo e(route('rayons.store')); ?>" method="POST" class="card p-5">
        <?php echo csrf_field(); ?>

        <?php if(Session::get('success')): ?>
            <div class="alert alert-success"> <?php echo e(Session::get('success')); ?> </div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
            <ul class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
            <div>
                <center><h3>Isi Data Rayons</h3></center>
            </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Rayon :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="rayon" name="rayon" placeholder="Rayon">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label" >Pembimbing Siswa :</label>
            <div class="col-sm-10">
                <select name="user_id" id="user_id" class="form-control">
                    <option selected disabled>Pilih</option>
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option selected hidden disabled>Pembingbing Siswa</option>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item['name']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PORDUKTIF-XI-5\Uji_kelayakan\web-rekapitulasi\resources\views/rayons/create.blade.php ENDPATH**/ ?>