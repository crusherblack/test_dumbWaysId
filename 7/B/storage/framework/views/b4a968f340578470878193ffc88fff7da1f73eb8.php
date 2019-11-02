	<!-- /HEADER -->
<?php $__env->startSection('content'); ?>



	<br>
	<div class="row">
		<div class="col-md-12">
        <a href="<?php echo e(route('news.create')); ?>" class="btn btn-primary btn-block">Tambah NEWS</a>
        <a href="<?php echo e(route('users.index')); ?>" class="btn btn-danger btn-block">Tambah USERS</a>
        <br><br><br>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



			<div class="post post-row">
					<a class="post-img" href="<?php echo e(route('news.show', $list->id )); ?>"><img src="<?php echo e(asset($list->image)); ?>" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="">Creator : <?php echo e($list->users->name); ?></a>

						</div>
                    <h3 class="post-title"><a href="<?php echo e(route('news.show', $list->id )); ?>"><?php echo e($list->title); ?></a></h3>
						<ul class="post-meta">
							<li><?php echo e($list->created_at); ?></li>
						</ul>

					</div>
			</div>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<div class="text-center">
	<?php echo e($data->links()); ?>

	</div>
	</div>


	<div class="col-md-4">






	</div>
	</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_blog.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_dumbwaysid\7B\test_dumbWaysId\7\B\resources\views/berita/index.blade.php ENDPATH**/ ?>