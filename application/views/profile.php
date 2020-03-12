<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $title; ?></h1>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="<?php echo base_url() ?>assets/adminlte3/dist/img/avatar.png"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">Bambang Radwe Pusaka</h3>

              <p class="text-muted text-center">Jalan Nitikan 38 Yogyakarta</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="#ubahpassword" data-toggle="tab">Ubah Password</a></li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <?php $this->load->view('profile_setting'); ?>
                <?php $this->load->view('profile_ubahpassword'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
