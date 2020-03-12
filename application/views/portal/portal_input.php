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
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Tulis Pengaduan</h3>
            </div>
           <div class="card-body">
              <div class="form-group">
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Pilih Kategori</option>
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Perihal:">
              </div>
              <div class="form-group">
                  <textarea id="compose-textarea" class="form-control" style="height: 400px">&nbsp;
                  
                  </textarea>
              </div>
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fas fa-paperclip"></i> Lampirkan Foto
                  <input type="file" name="attachment">
                </div>
                <p class="help-block">Max. 16MB</p>
              </div>
            </div>
           <div class="card-footer">
              <div class="float-right">
                <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
