

<?php $__env->startSection('content'); ?>
    <?php if(session('success')): ?>
        <div class="alert alert-primary" role="alert">
                <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-6">
            <h3>Karyawan</h3>
        </div>
        <div class="col-md-6">
            <a href="<?php echo e(route('karyawan.create')); ?>" class="btn btn-success btn-sm float-end">
                <i class="fa fa-plus-circle"></i> Tambah
            </a>
        </div>
        <div class="row mt-3">
            <div class="col">
                <table class="table bg-white rounded shadow-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col" width="50">#</th>
                            <th scope="col">Nama Karyawan</th>
                            <th scope="col">Nomor HP</th>
                            <th scope="col">Alamat</th>
                            <th style="width: 200px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $karyawans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $karyawan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($karyawan['nama_karyawan']); ?></td>
                        <td><?php echo e($karyawan['nomor_hp']); ?></td>
                        <td><?php echo e($karyawan['alamat']); ?></td>
                        <td>
                            <?php echo $__env->make('karyawan.action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </td> 
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
        </table>
    </div>
</div>
<form action="" method="POST" id="deleteForm">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <input type="submit" value="Hapus" style="display:none">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\bangsukri\resources\views/karyawan/index.blade.php ENDPATH**/ ?>