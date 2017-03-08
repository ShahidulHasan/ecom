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

            <div class="span9" id="mainCol">
                <h3> Delivery Option</h3>
                <hr class="soft"/>
                <h5>Cash-On-Delivery</h5><br/>
                <p>
                    With our Cash On Delivery Option, you can pay directly to the courier. No advance payment required now. For all delivery in side Dhaka delivery charge 50 tk and out side Dhaka the charge will 100 tk.
                </p>
                <h5>Payment by bKash or DBBL or Visa</h5><br/>
                <p>
                    With this option you can pay before delivery. For all delivery in side Dhaka delivery charge 50 tk and out side Dhaka the charge will 100 tk.
                </p>
            </div>
        </div></div>
</div>