<!DOCTYPE html>
<html>
<head>
  <title>Upload Proyek</title>
  <meta charset="utf-8">
</head>
<body>

<h1>Upload Proyek</h1>


<form action="<?= site_url('dashboard/upload-project') ?>" method="post" enctype="multipart/form-data">
  <?= $message; ?>

  <label>Nama Proyek</label>
  <input type="text" name="nama" required><br>

  <label>Tempat</label>
  <input type="text" name="tempat" required><br>

  <label>Deskripsi</label>
  <textarea name="desk"></textarea><br>

  <label>Foto</label>
  <input type="file" name="foto"><br>

  <input type="submit" name="upload">

</form>

</body>
</html>


<div class="container" style="padding-top:150px">
    <div class="row">
    <div class="col-md-4 rounded">
        <center>
        <div class="product-item rounded" style="height:300px; width:200px">
            <div class="product rounded">
                <div class="product_image">
                    <br />
                    <img class="rounded" src="<?php echo base_url();?>assets/img/avatar.png">
                </div>
                <div class="product_info">
                    <br />
                    <button type="submit" class="btn gradient-45deg-deep-purple-purple rounded white-font">Ganti Foto profil</button>
                </div>
            </div>
        </div>
        </center>
    </div>

    <div class="col-md-8">
        <div class="card card-body" id="login">
            <h4 class="card-title">&nbsp;Ubah Profil</h4>
            <form class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-12">
                        <button type="submit" class="btn gradient-45deg-deep-purple-purple rounded white-font">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
