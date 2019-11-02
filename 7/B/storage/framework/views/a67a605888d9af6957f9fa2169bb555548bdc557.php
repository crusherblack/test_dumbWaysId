<?php $__env->startSection('judul_halaman', 'Users'); ?>
<?php $__env->startSection('sub1', 'Users'); ?>
<?php $__env->startSection('sub2', 'List Users'); ?>
<?php echo $__env->yieldPushContent('script'); ?>
<?php $__env->startSection('content'); ?>
<a class="btn btn-primary" href="<?php echo e(route('users.create')); ?>">Tambah User</a>
<br><br>

<div class="table-responsive">
<table class="table table-striped table-bordered table-hover table-sm">
	<thead>
		<tr>
			<th>Nomor</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Gambar</th>

		</tr>
	</thead>
	<tbody>
		<?php if($data->count() > 0): ?>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result => $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($result + $data->firstItem()); ?> </td>
			<td><?php echo e($hasil->name); ?></td>
			<td><?php echo e($hasil->email); ?></td>

			<td><img class="img-fluid" style="width: 70px" src="<?php echo e(asset($hasil->image)); ?>"></td>
			</td>


		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php else: ?>
		<tr>
			<td colspan="6" align="center">Tidak ada data</td>
		</tr>

		<?php endif; ?>
	</tbody>

</table>
</div>
 <?php echo e($data->appends(Request::all())->links()); ?>



<?php $__env->stopSection(); ?>







<?php echo $__env->make('template_admin/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_dumbwaysid\7B\test_dumbWaysId\7\B\resources\views/users/index.blade.php ENDPATH**/ ?>