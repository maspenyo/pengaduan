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
      <div class="row">
        <div class="col-12">
          <div class="card">
           <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Tiket</th>
                  <th>Pengaduan</th>
                  <th>Pelapor</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>28-02-2020</td>
                  <td>200228-0001</td>
                  <td>Penerangan Jalan Umum</td>
                  <td>Sumardi</td>
                  <td><span class="badge badge-warning">Menunggu</span></td>
                  <td>
                    <a href="<?php echo base_url('pengaduan/detail') ?>"><i  class="nav-icon fa fa-search"></i> Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>28-02-2020</td>
                  <td>200228-0002</td>
                  <td>Penerangan Jalan Umum</td>
                  <td>Sumardi</td>
                  <td><span class="badge badge-success">Selesai</span></td>
                  <td>
                    <a href="<?php echo base_url('pengaduan/detail') ?>"><i  class="nav-icon fa fa-search"></i> Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>28-02-2020</td>
                  <td>200228-0003</td>
                  <td>Penerangan Jalan Umum</td>
                  <td>Sumardi</td>
                  <td><span class="badge badge-warning">Menunggu</span></td>
                  <td>
                    <a href="<?php echo base_url('pengaduan/detail') ?>"><i  class="nav-icon fa fa-search"></i> Detail</a>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </section>
  </div>
