

  <!-- General JS Scripts -->
  <script src="<?php echo e(asset('assets/modules/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/popper.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/tooltip.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/nicescroll/jquery.nicescroll.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/stisla.js')); ?>"></script>

  <script src="<?php echo e(asset('assets/ckeditor/ckeditor.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/ckeditor/adapters/jquery.js')); ?>"></script>
 
  <!-- JS Libraies -->
  <script src="<?php echo e(asset('assets/modules/summernote/summernote-bs4.js')); ?>"></script>

  <script src="<?php echo e(asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')); ?>"></script>
  
  <script src="<?php echo e(asset('assets/modules/izitoast/js/iziToast.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/jquery-selectric/jquery.selectric.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/select2/dist/js/select2.full.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/sweetalert/sweetalert.min.js')); ?>"></script>



  <script src="<?php echo e(asset('assets/modules/sweetalert/sweetalert.min.js')); ?>"></script>

    


  

  <!-- Template JS File -->
  <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>

<!-- Page Specific JS File -->

  

  <script>
    <?php if(Session::has('info')): ?>
    
       iziToast.info({
        title: 'Info!',
        message: '<?php echo e(Session('info')); ?>',
        position: 'bottomRight'
        });
      
    <?php endif; ?>

    <?php if(Session::has('success')): ?>
    
       iziToast.success({
        title: 'Info!',
        message: '<?php echo e(Session('success')); ?>',
        position: 'bottomRight'
        });
      
    <?php endif; ?>

    <?php if(Session::has('delete')): ?>
    
       iziToast.warning({
        title: 'Deleted!',
        message: '<?php echo e(Session('delete')); ?>',
        position: 'bottomRight'
        });
      
    <?php endif; ?>
  </script>

<?php /**PATH C:\xampp\htdocs\crud_dumbwaysid\resources\views/template_admin/js.blade.php ENDPATH**/ ?>