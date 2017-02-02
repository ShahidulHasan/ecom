<div id="mainBody">
	<div class="container">
		<div class="row">

			<!-- Sidebar ================================================== -->
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
			<!-- Sidebar end=============================================== -->

			<div class="span9">
				<h3> Products Name <small class="pull-right"> <?php count( $all_product ) ?> products are available </small></h3>
				<hr class="soft"/>
				<p>
					Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - that is why our goods are so popular and we have a great number of faithful customers all over the country.
				</p>
				<hr class="soft"/>
				<form class="form-horizontal span6">
					<div class="control-group">
						<label class="control-label alignL">Sort By </label>
						<select>
							<option>Priduct name A - Z</option>
							<option>Priduct name Z - A</option>
							<option>Priduct Stoke</option>
							<option>Price Lowest first</option>
						</select>
					</div>
				</form>

				<div id="myTab" class="pull-right">
					<a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
					<a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
				</div>
				<br class="clr"/>
				<div class="tab-content">
					<div class="tab-pane" id="listView">
						<?php
						if( $all_product != '' && count( $all_product ) > 0 ){
							$i = 0; $j = 1;
							foreach ($all_product as $latest) {
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

					<div class="tab-pane  active" id="blockView">
						<ul class="thumbnails">

							<?php
							if( $all_product != '' && count( $all_product ) > 0 ){
								$i = 0; $j = 1;
								foreach ($all_product as $latest) {
									if ($i < 6) { $i++; ?>
										<li class="span3">
											<div class="thumbnail">
												<a href="<?php echo base_url() . "home/product/$latest->id"; ?>">
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
									<?php } }
							} ?>
						</ul>
						<hr class="soft"/>
					</div>
				</div>

<!--				<a href="compair.html" class="btn btn-large pull-right">Compair Product</a>-->

				<?php if( count( $all_product ) > 6 ) { ?>
				<div class="pagination">
					<ul>
						<li><a href="#">&lsaquo;</a></li>
						<?php
						for( $i = 1; $i <= ceil( count( $all_product ) / 6 ); $i++ )
							echo "<li><a href='#'>$i</a></li>";
						?>
						<li><a href="#">...</a></li>
						<li><a href="#">&rsaquo;</a></li>
					</ul>
				</div>
				<?php } ?>
				<br class="clr"/>
			</div>
		</div>
	</div>
</div>

