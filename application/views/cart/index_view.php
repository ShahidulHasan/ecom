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
				<h3> SHOPPING CART <a href="#" onclick="history.go(-1);" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>
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

<?php if( count( $cart ) > 0 )
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
				<td>
				    <img src='" . base_url() ."assets/product/" . ( $row->phy_path == "" ? "nopicture.png" : $row->phy_path ) . "' title='$row->product_name' width='60' />
				</td>
				<td>
				    <a href='" . base_url() . "home/product/$row->id'>$row->product_name</a><br/>
				    
				</td>
				<td>
					<a href='" . base_url() . "home/content/category/$row->id_category'>" . ( $category[$row->id_category] ) . "</a> 
					-
					<a href='" . base_url() . "home/content/subcategory/$row->id_subcategory/'>" . ( $subcategory[$row->id_subcategory] ) . "</a>
				</td>
				<td>$ $row->product_price</td>
				<td>
					<a href='" . base_url() . "cart/remove_item/$row->id/1' title='Remove One'><img src='" . base_url() . "assets/images/quantity_down.gif' /></a>
					$detail[qty]
					<a href='" . base_url() . "cart/add_item/$row->id' title='Add One'><img src='" . base_url() . "assets/images/quantity_up.gif' /></a>
				</td>
				<td> $price tk <a href='" . base_url() . "cart/remove_item/$row->id/all' title='Remove This'><img src='" . base_url() . "assets/images/cart_cross_small.png' /></a></td>
			</tr>
					";
    }  ?>
					<tr>
						<td colspan="6" style="text-align:right"><strong>TOTAL =</strong></td>
						<td class="label label-important" style="display:block"> <strong> <?php echo number_format( $total, 2, '.', '' ); ?> tk</strong></td>
					</tr>

    <?php } ?>
					</tbody>
				</table>
				<a href="#" onclick="history.go(-1);" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
				<a class="btn btn-large pull-right"href="<?php echo base_url() . "cart/checkout"; ?>">Checkout <i class="icon-arrow-right"></i></a>

			</div>
		</div></div>
</div>