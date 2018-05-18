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
            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <div id="profile-error-message" class="col-sm-12">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $this->session->userdata('email'); ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?= $this->session->userdata('nama'); ?>" required>
                    </div>
                </div>
                
                <?php if($volunteer != NULL){ ?>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="no_ktp" placeholder="No. KTP" value="<?= $volunteer->no_ktp; ?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="telp" placeholder="No. Telepon" value="<?= $volunteer->telp; ?>">
                    </div>
                </div>

                <?php } ?>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-12">
                        <input type="submit" class="btn gradient-45deg-deep-purple-purple rounded white-font" name="simpan_profil" value="Simpan">
                    </div>
                </div>
            </form>

            <div class="clearfix"></div>
            <br>

            <h4 class="card-title">&nbsp;Ubah Alamat</h4>
            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="prov" placeholder="Provinsi" value="<?= $alamat->prov; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="kab" placeholder="Kabupaten" value="<?= $alamat->kab; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="kec" placeholder="Kecamatan" value="<?= $alamat->kec; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="jalan" placeholder="Jalan" value="<?= $alamat->jalan; ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-12">
                        <input type="submit" class="btn gradient-45deg-deep-purple-purple rounded white-font" name="simpan_alamat" value="Simpan">
                    </div>
                </div>
            </form>

            <div class="clearfix"></div>
            <br>

            <h4 class="card-title">&nbsp;Ubah Password</h4>
            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <div id="pass-error-message" class="col-sm-12">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="password" id="old-password" class="form-control" name="old-password" placeholder="Password lama" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="password" id="password2" class="form-control" name="password2" placeholder="Ulangi password" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-12">
                        <input type="submit" id="ubah-pass" class="btn gradient-45deg-deep-purple-purple rounded white-font" name="ubah_pass" value="Ubah">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<script>
$(function () {
  $("#ubah-pass").click(function(e) {
    var password  = $("#password").val();
    var password2 = $("#password2").val();

    if(password.length < 6){
      $("#pass-error-message").empty();
      $("#pass-error-message").append("<div class=\"alert alert-danger\">Password minimal 6 karakter alfanumerik.</div>")
      return false;
    }

    if (password != password2) {
      $("#pass-error-message").empty();
      $("#pass-error-message").append("<div class=\"alert alert-danger\">Password tidak cocok.</div>")
      return false;
    }

    return true;
  });

    <?php if($message){ ?>

    swal("", "<?= $message; ?>", "<?= $type; ?>");

    <?php } ?>
});

</script>