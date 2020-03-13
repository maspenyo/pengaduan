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
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>NIK</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Detail Pengaduan</label>
                    <textarea class="form-control" rows="5" placeholder="Enter ..." disabled></textarea>
                  </div>
                  <div class="form-group">
                    <label>Tanggapan</label>
                    <textarea id="compose-textarea" class="form-control" style="height: 400px">&nbsp;
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control">
                  </div>
               </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
  </section>
</div>
