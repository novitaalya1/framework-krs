<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TAMBAH DATA MAHASISWA
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Data Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="mahasiswa/aksi_tambah_mahasiswa.php" method="POST">
              <div class="box-body">
              <div class="form-group">
                  <label>NIM</label>
                  <input type="text" class="form-control" name="nim">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Masukan Nama" name="nama_mhs">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name="jk" class="form-control">
                  	<option value="Laki-Laki">
                  		Laki-Laki
                  	</option>
                  	<option value="Perempuan">
                  		Perempuan
                  	</option>
                  </select>
                </div>
                <div class="form-group">
                	<label>Alamat</label>
                	<textarea class="form-control" name="alamat"></textarea>
                </div>
                <div class="form-group">
                	<label>No. HP</label>
                	<input class="form-control" name="no_hp" type="number">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>