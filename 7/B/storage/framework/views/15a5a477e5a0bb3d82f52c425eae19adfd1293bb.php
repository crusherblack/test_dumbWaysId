<?php $__env->startSection('judul_halaman', 'Create News'); ?>
<?php $__env->startSection('sub1', 'News'); ?>
<?php $__env->startSection('sub2', 'Create News'); ?>

<?php $__env->startSection('content'); ?>

			<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">



                    <form action="<?php echo e(route('news.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                      <div class="col-sm-12 col-md-8">
                        <input type="text" class="form-control form-control" name="title" value="<?php echo e(old('title')); ?>">

                      </div>
                    </div>


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">deskripsi</label>
                      <div class="col-sm-12 col-md-8">
                        <textarea class="form-control"  name="deskripsi" ><?php echo e(old('deskripsi')); ?></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="image" id="image-upload" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-8">
                        <button class="btn btn-primary btn-block" type="submit">Simpan Berita</button>
                      </div>
                    </div>
                    </form>


                  </div>
                </div>
              </div>
            </div>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script >
    $.uploadPreview({
      input_field: "#image-upload",   // Default: .image-upload
      preview_box: "#image-preview",  // Default: .image-preview
      label_field: "#image-label",    // Default: .image-label
      label_default: "Choose File",   // Default: Choose File
      label_selected: "Change File",  // Default: Change File
      no_label: false,                // Default: false
      success_callback: null          // Default: null
    });
  $(".inputtags").tagsinput('items');
</script>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('template_admin/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_dumbwaysid\7B\test_dumbWaysId\7\B\resources\views/berita/create.blade.php ENDPATH**/ ?>