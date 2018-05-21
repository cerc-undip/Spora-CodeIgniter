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
                            <a href="<?= site_url('verify/user') ?>" class="btn gradient-45deg-indigo-light-blue white-font btn-block btn-flat" >Daftar User</a>
                            <a href="<?= site_url('verify/project') ?>" class="btn gradient-45deg-indigo-light-blue white-font btn-block btn-flat" >Daftar Proyek</a>
                            <a href="<?= site_url('product/add') ?>" class="btn gradient-45deg-deep-purple-purple white-font btn-block btn-flat" >Tambah produk</a>
                        </div>
                    </form>
                </div>
            </center>
        </div>
        <div class="col-md-8">
            <div class="row">
                <center>
                    <h3>Verifikasi Volunteer</h3>
                </center>
                <?= $message; ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Email</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?= $user->id; ?></td>
                                <td><?= $user->email; ?></td>
                                <td><?= $user->nama; ?></td>
                                <td><?= $user->status; ?></td>
                                <td>
                                    <a href="<?= site_url('confirm/'.$user->id_vol); ?>">Konfirmasi</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
