    
<div class="container product_section_container" style="padding-left:5%">
		<div class="row">
			<div class="col product_section clearfix">
				<div class="main_content">
					<div class="products_iso">
						<div class="row">
							<div class="col">
								<div class="product_sorting_container product_sorting_container_top">
									<ul class="product_sorting">
										<li>
											<span class="type_sorting_text">Default Sorting</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default Sorting</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Product Name</span></li>
											</ul>
										</li>
									</ul>
								</div>
                                
								<div class="product-grid">
                                    <?php foreach($produk as $pr) {  ?>
									<div class="product-item men" style="height:auto">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="<?php echo base_url(); ?>assets/img/product1.jpg" alt="">
											</div>
											<div class="product_info">
												<h6 class="product_name"><a href="<?= site_url('detailProduct/'.$pr->id) ?>"><?= $pr -> nama ?></a></h6>
												<div style="color:red;"><b>Rp</b></div> <div class="product_price"><?= $pr -> harga ?></div>
											</div>
										</div>
									</div>
                                    <?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
