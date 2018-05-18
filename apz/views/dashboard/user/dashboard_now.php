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
                <h4 class="card-title">&nbsp;Proyek anda saat ini :</h4>
                <h4>Ada di </h4>
            </div>
        </div>
    </div>
</div>