<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="<?php echo base_url('welcome/main') ?>" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Pengaduan
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?php echo base_url('welcome/input') ?>" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Tulis</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('welcome/data') ?>" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Tampil Data</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-header">SETTING</li>
    <li class="nav-item">
      <a href="<?php echo base_url('welcome/logout')?>" class="nav-link">
        <i class="nav-icon fas fa-power-off"></i>
        <p>
          Logout
        </p>
      </a>
    </li>
  </ul>
</nav>
