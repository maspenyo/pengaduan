<div class="tab-pane" id="ubahpassword">
  <form class="form-horizontal" method="post" action="<?php echo base_url('welcome/ubahpassword') ?>">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Password Sekarang</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" id="PasswordLama">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Password Baru</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" id="PasswordBaru">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Ulangi Password Baru</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" id="RePasswordBaru">
      </div>
    </div>

    <div class="form-group row">
      <div class="offset-sm-3 col-sm-9">
        <button type="submit" class="btn btn-danger">Simpan</button>
      </div>
    </div>
  </form>
</div>
