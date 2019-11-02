   <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">WEBSITE</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>

            <li class="menu-header">Crud</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-list-alt"></i> <span>Users</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('users.create')); ?>">Create User</a></li>
                <li><a class="nav-link" href="<?php echo e(route('users.index')); ?>">List User</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-list-alt"></i> <span>News</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?php echo e(route('news.create')); ?>">Create News</a></li>
                  <li><a class="nav-link" href="<?php echo e(route('news.index')); ?>">List News</a></li>
                  </ul>
              </li>


        </aside>
    </div>
<?php /**PATH C:\xampp\htdocs\crud_dumbwaysid\7B\test_dumbWaysId\7\B\resources\views/template_admin/sidebar.blade.php ENDPATH**/ ?>