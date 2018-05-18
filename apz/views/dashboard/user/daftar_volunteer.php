<?php
$q = "SELECT * FROM user WHERE id_akun = '". $this->session->userdata('id_akun') ."'";
$user = $this->db->query($q)->row();
?>

<div class="container" style="padding-top:150px">
    <div class="row">
        <div class="col-md-4">
            <center>
                <div class="product-item" style="height:250px; width:200px">
                    <div class="product">
                        <div class="product_image">
                            <br />
                            <img class="rounded" src="<?php echo base_url();?>assets/img/avatar.png">
                        </div>
                        <div class="product_info">
                            <br />
                        </div>
                    </div>
                </div>
                <div style="width:200px">
                    <br />
                    <form class="form-horizontal" action="<?= site_url('dashboard') ?>" method="post">
                        <div class="form-group">
                            <a href="<?= site_url('dashboard/now') ?>" class="btn gradient-45deg-indigo-light-blue white-font btn-block btn-flat" >Proyek yang diikuti</a>
                            <a href="<?= site_url('dashboard/own') ?>" class="btn gradient-45deg-indigo-light-blue white-font btn-block btn-flat" >Proyek milik sendiri</a>
                            <a href="<?= site_url('dashboard/add') ?>" class="btn gradient-45deg-deep-purple-purple white-font btn-block btn-flat" >Tambah proyek</a>
                        </div>
                    </form>
                </div>
            </center>
        </div>
        <div class="col-md-8">
            <div class="card card-body">
                <h4 class="card-title">Daftar Menjadi Volunteer</h4>
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <?= $message; ?>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="no_ktp" class="form-control" placeholder="No. KTP" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="telp" class="form-control" placeholder="No. Telp" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="prov" class="form-control" placeholder="Provinsi" value="<?= $user->prov; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="kab" class="form-control" placeholder="Kabupaten" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="kec" class="form-control" placeholder="Kecamatan" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="jalan" class="form-control" placeholder="Jalan" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <select class="form-control" name="status">
                              <option>--- Mendaftar Sebagai ---</option>
                              <option value="P">Publisher</option>
                              <option value="T">Trainer</option>
                              <option value="D">Keduanya</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-12">
                            <input type="submit" name="daftar" class="btn gradient-45deg-deep-purple-purple rounded white-font" value="Daftar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>