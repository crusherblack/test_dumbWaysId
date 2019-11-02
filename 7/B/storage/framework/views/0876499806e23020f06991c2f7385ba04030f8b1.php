	<!-- /HEADER -->
	<?php $__env->startSection('content'); ?>
		<!-- PAGE HEADER -->
		<div id="post-header" class="page-header">
			<div class="page-header-bg" style="background-image: url('<?php echo e(asset($data->image)); ?>');" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-category">

						</div>
						<h1><?php echo e($data->title); ?></h1>
						<ul class="post-meta">

							<li><?php echo e($data->created_at->diffForHumans()); ?></li>
							<!-- <li><i class="fa fa-comments"></i> 3</li>-->

						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">


					<!-- post content -->
					<div class="section-row">
						<?php echo $data->deskripsi; ?>

					</div>
					<!-- /post content -->


				<div class="col-md-4">






				</div>

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_blog.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_dumbwaysid\resources\views/berita/details.blade.php ENDPATH**/ ?>