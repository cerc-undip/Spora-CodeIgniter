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
                            <input type="submit" name="now" class="btn gradient-45deg-indigo-light-blue white-font btn-block btn-flat" value="Proyek yang diikuti">
                            <input type="submit" name="own" class="btn gradient-45deg-indigo-light-blue white-font btn-block btn-flat" value="Proyek milik sendiri">
                            <input type="submit" name="addProject" class="btn gradient-45deg-deep-purple-purple white-font btn-block btn-flat" value="Tambah proyek">
                        </div>
                    </form>
                </div>
            </center>
        </div>
        <div class="col-md-8">
            <div class="card card-body">
                <h4 class="card-title">&nbsp;Tambah Proyek Baru</h4>
                <form action="<?= site_url('dashboard/upload-project') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <?= $message; ?>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="tempat" class="form-control" required placeholder="Tempat">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <textarea class="form-control" id="inputExperience" name="desk" placeholder="Deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="file" class="form-control" placeholder="Foto" name="foto">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-12">
                            <input type="submit" name="upload" class="btn gradient-45deg-deep-purple-purple rounded white-font" value="Tambah">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>