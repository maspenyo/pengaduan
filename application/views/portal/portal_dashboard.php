<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><?php echo $title; ?></h1>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Rekap Pengaduan Anda</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Tiket</th>
                      <th>Pengaduan</th>
                      <th>Pelapor</th>
                      <th>Status</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="pages/examples/invoice.html">20200312-001</a></td>
                      <td>Penerangan Jalan Umum</td>
                      <td>Luna Maya</td>
                      <td><span class="badge badge-success">Selesai</span></td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">20200312-002</a></td>
                      <td>Penerangan Jalan Umum</td>
                      <td>Juwadi</td>
                     <td><span class="badge badge-warning">Menunggu</span></td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">20200312-003</a></td>
                      <td>Pungutan Liar</td>
                      <td>Tanto</td>
                      <td><span class="badge badge-primary">Proses</span></td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">20200312-004</a></td>
                      <td>Parkir Sembarangan</td>
                      <td>Agnes Claudia</td>
                      <td><span class="badge badge-primary">Proses</span></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="<?php echo base_url('pengaduan/data') ?>" class="btn btn-sm btn-secondary float-right">Data Pengaduan</a>
              </div>
              <!-- /.card-footer -->
            </div>
        </div>
      </div>
      <div class="row">
      </div>
    </div>
  </section>
</div>