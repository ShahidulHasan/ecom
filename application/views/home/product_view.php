<div id="mainBody">
	<div class="container">
		<div class="row">

			<div id="sidebar" class="span3">
				<ul id="sideManu" class="nav nav-tabs nav-stacked">
					<?php
					$category_nav = $this->get_contents->get_data_items("category", "active", "1", "*");
					if ($category_nav != "") {
						foreach ($category_nav as $nav) {
							echo "<li class=\"subMenu open\"><a>$nav->category_name</a>";
							$subcategory_nav = $this->get_contents->get_data_items("subcategory", "id_category = $nav->id AND active = ", 1, "*");
							if ($subcategory_nav != "") {
								echo "<ul>";
								foreach ($subcategory_nav as $nav_sub) echo "<li><a class=\"subMenu open\" href='" . base_url() . "home/content/subcategory/$nav_sub->id/'><i class=\"icon-chevron-right\"></i>$nav_sub->subcategory_name</a>";
								echo "</ul>";
							}
							echo "</li>";} }
					?>
				</ul>
				<br/>
			</div>

			<div class="span9">
				<div class="row">
					<div id="gallery" class="span3">
						<a href="<?php echo base_url(); ?>assets/themes/images/products/large/f1.jpg" title="<?php echo $product->product_name; ?>">
							<img src="<?php echo base_url() ."assets/product/" . ( $product->phy_path == "" ? "nopicture.png" : $product->phy_path ); ?>" title="<?php echo $product->product_name; ?>" style="width:100%" alt="<?php echo $product->product_name; ?>"/>
						</a>
						<div class="btn-toolbar" style="text-align: center;">
							<div class="btn-group">
								<span class="btn"><i class="icon-envelope"></i></span>
								<span class="btn" ><i class=" icon-thumbs-up"></i></span>
								<span class="btn" ><i class="icon-thumbs-down"></i></span>
							</div>
						</div>
					</div>
					<div class="span6">
						<h3><?php echo $product->product_name; ?></h3>
						<small><?php echo $product->product_short; ?></small>
						<hr class="soft"/>
						<form class="form-horizontal qtyFrm">
							<div class="control-group">
								<label class="control-label"><span><?php echo $product->product_price; ?>tk</span></label>
								<div class="controls">
                                    <?php echo"
                                                <span class='add_to_cart product_$product->id'><span class='btn btn-large btn-primary pull-right'>Add
                                                    to cart <i class='icon-shopping-cart'></i></span></span>
                                                "; ?>
								</div>
							</div>
						</form>

						<hr class="soft"/>
						<h4><?php echo ($product->product_quantity ? $product->product_quantity : 0); ?> ps in stock</h4>
						<hr class="soft clr"/>
						<p>
							<?php echo $product->product_description; ?>
						</p>
						<a class="btn btn-small pull-right" href="#detail">More Details</a>
						<br class="clr"/>
						<a href="#" name="detail"></a>
						<hr class="soft"/>
					</div>

					<div class="span9">
						<ul id="productDetail" class="nav nav-tabs">
							<li><a href="#profile" data-toggle="tab">Related Products</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane fade" id="profile">
								<div id="myTab" class="pull-right">
									<a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
									<a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
								</div>
								<br class="clr"/>
								<hr class="soft"/>
								<div class="tab-content">
									<div class="tab-pane" id="listView">
										<?php
										if( $related != '' && count( $related ) > 0 ){
											$i = 0; $j = 1;
											foreach ($related as $latest) {
												if ($i < 6) { $i++; ?>
													<div class="row">
														<div class="span2">
															<?php echo "<img src='" . base_url() . "assets/product/" . ($latest->phy_path == "" ? "nopicture.png" : $latest->phy_path) . "' title='$latest->product_name' /> " ?>
														</div>
														<div class="span4">
															<h3>New | Available</h3>
															<hr class="soft"/>
															<h5><?php echo $latest->product_name; ?></h5>
															<p>
																<?php echo $latest->product_short; ?>
															</p>
															<a class="btn btn-small pull-right" href="<?php echo base_url() . "home/product/$latest->id"; ?>">View Details</a>
															<br class="clr"/>
														</div>
														<div class="span3 alignR">
															<form class="form-horizontal qtyFrm">
																<h3> <?php echo $latest->product_price; ?>tk</h3>
																<label class="checkbox">
																	<input type="checkbox">  Adds product to compair
																</label><br/>
																<a href="<?php echo base_url() . "home/product/$latest->id"; ?>" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
																<a href="<?php echo base_url() . "home/product/$latest->id"; ?>" class="btn btn-large"><i class="icon-zoom-in"></i></a>

															</form>
														</div>
													</div>
													<hr class="soft"/>
												<?php } }
										} ?>
									</div>

									<div class="tab-pane active" id="blockView">
										<ul class="thumbnails">
											<?php
											if ($related != '' && count($related)) {
												$i = 0;
												foreach ($related as $latest) {
													if ($i < 6) { $i++; ?>
														<li class="span3">
															<div class="thumbnail">
																<a href="product_details.html">
																	<?php echo "<img src='" . base_url() . "assets/product/" . ($latest->phy_path == "" ? "nopicture.png" : $latest->phy_path) . "' title='$latest->product_name' /> " ?>
																</a>
																<div class="caption">
																	<h5><?php echo $latest->product_name; ?></h5>
																	<p><?php echo $latest->product_short; ?></p>
																	<h4><a class="btn" href="<?php echo base_url() . "home/product/$latest->id"; ?>">
																			<i class="icon-zoom-in"></i></a>
																		<a class="btn" href="<?php echo base_url() . "home/product/$latest->id"; ?>">Add
																			to <i class="icon-shopping-cart"></i></a>
																		<a class="btn btn-primary" href="#"><?php echo $latest->product_price; ?></a>
																	</h4>
																</div>
															</div>
														</li>
													<?php }
												}
											} ?>
										</ul>
										<hr class="soft"/>
									</div>
								</div>
								<br class="clr">
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
    </div>
</div>