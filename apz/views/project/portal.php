<div class="main_slider" style="background-image:url(<?php echo base_url(); ?>assets/img/carousel<?php echo(rand(1,3));  ?>.jpg); margin-top: 125px; margin-left:20px; margin-right:20px;">
    <div class="container fill_height">
      <div class="row align-items-center fill_height">
        <div class="col">
          <div class="main_slider_content">

          </div>
        </div>
      </div>
    </div>
  </div>

<div class="blogs">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="section_title">
          <h2>Jadilah Relawan Spora</h2>
        </div>
      </div>
    </div>
    <div class="row blogs_container">
        <?php foreach($project as $pr) {  ?>
      <div class="col-lg-4 blog_item_col">
        <p></p>
          <div class="blog_item">
          <div class="blog_background" style="background-image:url(<?php echo base_url()?>assets/img/project1.jpg)"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title"><?= $pr->nama ?></h4>
            <span class="blog_meta"><?= $pr->tempat ?> | <?= $pr->tgl ?></span>
            <a class="blog_more" href="<?= site_url('project-detail/'.$pr->id.'/'.$pr->slug) ?>">Baca selengkapnya</a>
          </div>
        </div>
      </div>
        <?php } ?>
    </div>

  </div>
</div>
