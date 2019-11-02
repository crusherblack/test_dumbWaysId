<?php $__env->startSection('judul_halaman', 'Create User'); ?>
<?php $__env->startSection('sub1', 'User'); ?>
<?php $__env->startSection('sub2', 'Create User'); ?>

<?php $__env->startSection('content'); ?>

			<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">




                    <form action="<?php echo e(route('users.store')); ?>" method="POST" >
                    <?php echo csrf_field(); ?>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="name">

                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="email" class="form-control" name="email">

                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary btn-block" type="submit">Simpan User</button>
                      </div>
                    </div>
                    </form>


                  </div>
                </div>
              </div>
            </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_admin/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_dumbwaysid\resources\views/users/create.blade.php ENDPATH**/ ?>