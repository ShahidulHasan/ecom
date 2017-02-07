<div class="content_full">
    <h2>Cart Item</h2>
    <div class="manage_cart">
		<table border="0" cellspacing="0" cellpadding="0" class="cart_table" width="100%">
			<tr>
				<th>SN</th>
				<th class="left_align">Preview</th>
				<th class="left_align">Name/Title</th>
				<th>Browse</th>
				<th>Price</th>
				<th>Qty.</th>
				<th>Total</th>
				<th></th>
			</tr>
			<?php
			if( count( $cart ) > 0 )
			{
				$qry = $total = $i = 0;
				foreach( $cart as $detail ) {
					$row = $product[$detail['id']];
					$i++;
					$total += $price = number_format( $row->product_price * $detail['qty'], 2, '.', '' );
					$qry += $detail['qty'];
					echo "
			<tr class='" . ( $i % 2 == 0 ? "even" : "odd" ) . "_row'>
				<td>$i</td>
				<td class='left_align><a href='home/product/$row->id'><img src='" . base_url() ."assets/product/" . ( $row->phy_path == "" ? "nopicture.png" : $row->phy_path ) . "' title='$row->product_name' width='30' /></a></td>
				<td class='left_align'><a href='" . base_url() . "home/product/$row->id'>$row->product_name</a></td>
				<td class='left_align'>
					<a href='" . base_url() . "home/content/category/$row->id_category'>" . ( $category[$row->id_category] ) . "</a> 
					- 
					<a href='" . base_url() . "home/content/subcategory/$row->id_subcategory/'>" . ( $subcategory[$row->id_subcategory] ) . "</a>
				</td>
				<td class='right_align'>$ $row->product_price</td>
				<td>
					<a href='" . base_url() . "cart/remove_item/$row->id/1' title='Remove One'><img src='" . base_url() . "assets/images/quantity_down.gif' /></a>
					$detail[qty]
					<a href='" . base_url() . "cart/add_item/$row->id' title='Add One'><img src='" . base_url() . "assets/images/quantity_up.gif' /></a>
				</td>
				<td class='right_align'>$ $price</td>
				<td><a href='" . base_url() . "cart/remove_item/$row->id/all' title='Remove This'><img src='" . base_url() . "assets/images/cart_cross_small.png' /></a></td>
			</tr>
					";
				}
				echo "
			<tr>
				<td colspan='5' class='right_align'><h4>All Total</h4></td>
				<td>$qry</td>
				<td class='right_align'>$ " . number_format( $total, 2, '.', '' ) . "</td>
				<td><a href='" . base_url() . "cart/remove_all' title='Remove All'><img src='" . base_url() . "assets/images/cart_cross_small.png' /></a></td>
			</tr>
				";
			}
			?>
		</table>
		<div class="page_link">
			<p>
				<a style="float: left; margin-top: -10px;" href="#" onclick="history.go(-1);" >Continue Shopping</a>
				<a href="<?php echo base_url() . "cart/checkout"; ?>">Checkout</a>
			</p>
		</div>
	</div>
</div>

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
				<h3>  SHOPPING CART [ <small>3 Item(s) </small>]<a href="products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>
				<hr class="soft"/>

				<table class="table table-bordered">
					<thead>
					<tr>
						<th>Product</th>
						<th>Description</th>
						<th>Quantity/Update</th>
						<th>Price</th>
						<th>Discount</th>
						<th>Tax</th>
						<th>Total</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td> <img width="60" src="themes/images/products/4.jpg" alt=""/></td>
						<td>MASSA AST<br/>Color : black, Material : metal</td>
						<td>
							<div class="input-append"><input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
						</td>
						<td>$120.00</td>
						<td>$25.00</td>
						<td>$15.00</td>
						<td>$110.00</td>
					</tr>

					<tr>
						<td colspan="6" style="text-align:right">Total Price:	</td>
						<td> $228.00</td>
					</tr>
					<tr>
						<td colspan="6" style="text-align:right">Total Discount:	</td>
						<td> $50.00</td>
					</tr>
					<tr>
						<td colspan="6" style="text-align:right">Total Tax:	</td>
						<td> $31.00</td>
					</tr>
					<tr>
						<td colspan="6" style="text-align:right"><strong>TOTAL ($228 - $50 + $31) =</strong></td>
						<td class="label label-important" style="display:block"> <strong> $155.00 </strong></td>
					</tr>
					</tbody>
				</table>

				<a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
				<a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>

			</div>
		</div></div>
</div>