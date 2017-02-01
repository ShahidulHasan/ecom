<div id="carouselBlk">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <?php
            foreach ($banner as $baner) { ?>
                <div class="item">
                    <div class="container">
                        <?php echo "
						<a href='" . ($baner->id_product != 0 ? (base_url() . "home/product/$baner->id_product") : ($baner->link != "" ? $baner->link : "javascript:void(0)")) . "'> </a>
						<img src='" . base_url() . "assets/banner/$baner->url' class='call_me_$baner->id'" . ($baner->title != "" ? " alt='$baner->title'" : "") . " />"; ?>
                        <div class="carousel-caption">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
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
                <!-- Sidebar end=============================================== -->
                <?php
                if ($release != '' && count($release) > 0) {
                    $i = 0;
                    $j = 6;
                    foreach ($release as $latest) {
                        if ($i < 4) { ?>
                            <div class="thumbnail">
                                <?php $i++;
                                echo "
                                    <img src='" . base_url() . "assets/product/" . ($latest->phy_path == "" ? "nopicture.png" : $latest->phy_path) . "' title='$latest->product_name' /> " ?>
                                <div class="caption">
                                    <h5><?php echo $latest->product_name; ?></h5>
                                    <h4><a class="btn" href="<?php echo base_url() . "home/product/$latest->id"; ?>"><i
                                                class="icon-zoom-in"></i></a>
                                        <a class="btn" href="<?php echo base_url() . "home/product/$latest->id"; ?>">Add
                                            to <i class="icon-shopping-cart"></i></a>
                                        <a class="btn btn-primary" href="#"><?php echo $latest->product_price; ?></a>
                                    </h4>
                                </div>
                            </div><br/>
                        <?php }
                    }
                } ?>

            </div>

            <div class="span9">
                <div class="well well-small">
                    <h4>Top Products
                        <small class="pull-right"></small>
                    </h4>
                    <div class="row-fluid">
                        <div id="featured" class="carousel slide">
                            <div class="carousel-inner">

                                <div class="item active">
                                    <ul class="thumbnails">
                                        <?php
                                        if ($topitems != '' && count($topitems) > 0) {
                                            $i = 0;
                                            $j = 1;
                                            foreach ($topitems as $latest) {
                                                if ($i < 4) { ?>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <i class="tag"></i>
                                                            <?php $i++;
                                                            echo "
														<a href='" . base_url() . "home/product/$latest->id'>
															<img src='" . base_url() . "assets/product/" . ($latest->phy_path == "" ? "nopicture.png" : $latest->phy_path) . "' title='$latest->product_name' />
														</a>"; ?>
                                                            <div class="caption">
                                                                <h5><?php echo $latest->product_name; ?></h5>
                                                                <h4><a class="btn"
                                                                       href="<?php echo base_url() . "home/product/$latest->id"; ?>">VIEW</a>
                                                                    <span
                                                                        class="pull-right"><?php echo $latest->product_price; ?></span>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php }
                                            }
                                        } ?>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">

                                        <?php
                                        if ($topitems != '' && count($topitems) > 0) {
                                            foreach ($topitems as $latest) {
                                                if ($i > 3 && $i < 8) { ?>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <i class="tag"></i>
                                                            <?php $i++;
                                                            echo "
														<a href='" . base_url() . "home/product/$latest->id'>
															<img src='" . base_url() . "assets/product/" . ($latest->phy_path == "" ? "nopicture.png" : $latest->phy_path) . "' title='$latest->product_name' />
														</a>"; ?>
                                                            <div class="caption">
                                                                <h5><?php echo $latest->product_name; ?></h5>
                                                                <h4><a class="btn"
                                                                       href="<?php echo base_url() . "home/product/$latest->id"; ?>">VIEW</a>
                                                                    <span
                                                                        class="pull-right"><?php echo $latest->product_price; ?></span>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php }
                                            }
                                        } ?>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        <?php
                                        if ($topitems != '' && count($topitems) > 0) {
                                            foreach ($topitems as $latest) {
                                                if ($i > 7 && $i < 12) { ?>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <i class="tag"></i>
                                                            <?php $i++;
                                                            echo "
														<a href='" . base_url() . "home/product/$latest->id'>
															<img src='" . base_url() . "assets/product/" . ($latest->phy_path == "" ? "nopicture.png" : $latest->phy_path) . "' title='$latest->product_name' />
														</a>"; ?>
                                                            <div class="caption">
                                                                <h5><?php echo $latest->product_name; ?></h5>
                                                                <h4><a class="btn"
                                                                       href="<?php echo base_url() . "home/product/$latest->id"; ?>">VIEW</a>
                                                                    <span
                                                                        class="pull-right"><?php echo $latest->product_price; ?></span>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php }
                                            }
                                        } ?>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        <?php
                                        if ($topitems != '' && count($topitems) > 0) {
                                            foreach ($topitems as $latest) {
                                                if ($i > 11 && $i < 16) { ?>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <i class="tag"></i>
                                                            <?php $i++;
                                                            echo "
														<a href='" . base_url() . "home/product/$latest->id'>
															<img src='" . base_url() . "assets/product/" . ($latest->phy_path == "" ? "nopicture.png" : $latest->phy_path) . "' title='$latest->product_name' />
														</a>"; ?>
                                                            <div class="caption">
                                                                <h5><?php echo $latest->product_name; ?></h5>
                                                                <h4><a class="btn"
                                                                       href="<?php echo base_url() . "home/product/$latest->id"; ?>">VIEW</a>
                                                                    <span
                                                                        class="pull-right"><?php echo $latest->product_price; ?></span>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php }
                                            }
                                        } ?>
                                    </ul>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                            <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                        </div>
                    </div>
                </div>
                <h4>Featured Products </h4>
                <ul class="thumbnails">
                    <?php
                    if ($featured != '' && count($featured) > 0) {
                        $i = 0;
                        $j = 11;
                        foreach ($featured as $latest) {
                            if ($i < 6) { ?>

                                <li class="span3">
                                    <div class="thumbnail">
                                        <?php $i++;
                                        echo "
										<a href='" . base_url() . "home/product/$latest->id'>
											<img src='" . base_url() . "assets/product/" . ($latest->phy_path == "" ? "nopicture.png" : $latest->phy_path) . "' title='$latest->product_name' />
										</a>"; ?>
                                        <div class="caption">
                                            <h5><?php echo $latest->product_name; ?></h5>
                                            <h4 style="text-align:center"><a class="btn"
                                                                             href="<?php echo base_url() . "home/product/$latest->id"; ?>">
                                                    <i class="icon-zoom-in"></i></a>
                                                <a class="btn"
                                                   href="<?php echo base_url() . "home/product/$latest->id"; ?>">Add to
                                                    <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                                              href="#"><?php echo $latest->product_price; ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                            <?php }
                        }
                    } ?>
                </ul>
                <h4>Others Products </h4>
                <ul class="thumbnails">
                    <?php
                    if ($otehritems != '' && count($otehritems) > 0) {
                        $i = 0;
                        $j = 16;
                        foreach ($otehritems as $latest) {
                            if ($i < 6) { ?>

                                <li class="span3">
                                    <div class="thumbnail">
                                        <?php $i++;
                                        echo "
										<a href='" . base_url() . "home/product/$latest->id'>
											<img src='" . base_url() . "assets/product/" . ($latest->phy_path == "" ? "nopicture.png" : $latest->phy_path) . "' title='$latest->product_name' />
										</a>"; ?>
                                        <div class="caption">
                                            <h5><?php echo $latest->product_name; ?></h5>
                                            <h4 style="text-align:center"><a class="btn" href="<?php echo base_url() . "home/product/$latest->id"; ?>">
                                                <i class="icon-zoom-in"></i></a>
                                                <a class="btn" href="<?php echo base_url(); ?>cart">Add to
                                                <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo $latest->product_price; ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                            <?php }
                        }
                    } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
