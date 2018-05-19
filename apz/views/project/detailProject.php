<?php foreach($project as $pr) {  ?>
<div class="tabs_section_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabs_container">
						<ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
							<li class="tab active" data-active-tab="tab_1"><span>Deskripsi Umum</span></li>
							<li class="tab" data-active-tab="tab_2"><span>Informasi Tambahan</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div id="tab_1" class="tab_container active">
						<div class="row">
							<div class="col-lg-5 desc_col">
								<div class="tab_title">
									<h4>Informasi umum</h4>
								</div>
								<div class="tab_text_block">
									<h2><?= $pr->nama ?></h2>
									<p><?= $pr->desk ?></p>
								</div>

							</div>
							<div class="col-lg-5 offset-lg-2 desc_col">
								<div class="tab_image">
									<img src="<?php echo base_url();?>assets/img/project1.jpg" alt="">
								</div>
								</div>
						</div>
					</div>
					<div id="tab_2" class="tab_container">
						<div class="row">
							<div class="col additional_info_col">
								<div class="tab_title additional_info_title">
									<h4>Informasi Tambahan</h4>
								</div>
								<p>Tempat:<span><?= $pr->tempat ?></span></p>
							</div>
						</div>
					</div>
					<?php if ($this->session->userdata('login')){ ?>
						<div class="red_button shop_now_button"><a href="<?= site_url('project-reg/'.$pr->id.'/'.$pr->slug) ?>">Daftar</a></div>
					<?php } else { ?>
						<div class="red_button shop_now_button"><a href="<?= site_url('login') ?>">Masuk</a></div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>