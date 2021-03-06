<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="<?php echo base_url('admin') ?>" class="nav-link">
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
          <a href="<?php echo base_url('pengaduan/input') ?>" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Tulis</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('pengaduan/data') ?>" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Tampil Data</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="<?php echo base_url('masyarakat') ?>" class="nav-link">
        <i class="nav-icon fas fa-user-alt"></i>
        <p>
          Masyarakat
        </p>
      </a>
    </li>
    <li class="nav-header">SETTING</li>
    <li class="nav-item">
      <a href="<?php echo base_url('petugas') ?>" class="nav-link">
        <i class="nav-icon fas fa-users-cog"></i>
        <p>
          Petugas
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link">
        <i class="nav-icon fas fa-cogs"></i>
        <p>
          Sistem
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?php echo base_url('login/logout')?>" class="nav-link">
        <i class="nav-icon fas fa-power-off"></i>
        <p>
          Logout
        </p>
      </a>
    </li>
  </ul>
</nav>
