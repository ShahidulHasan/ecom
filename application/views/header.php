<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>	<?php $title = $this->get_contents->get_title(); ?> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Bootstrap style -->
	<link id="callCss" rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/bootshop/bootstrap.min.css" media="screen"/>
	<link href="<?php echo base_url(); ?>assets/themes/css/base.css" rel="stylesheet" media="screen"/>
	<!-- Bootstrap style responsive -->
	<link href="<?php echo base_url(); ?>assets/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="<?php echo base_url(); ?>assets/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<!-- Google-code-prettify -->
	<link href="<?php echo base_url(); ?>assets/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
	<!-- fav and touch icons -->

	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/themes/images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/themes/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/themes/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/themes/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
</head>
<body>
<div id="header">
	<div class="container">
		<div id="welcomeLine" class="row">

		</div>
		<!-- Navbar ================================================== -->
		<div id="logoArea" class="navbar">
			<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<div class="navbar-inner">
				<a class="brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Bootsshop"/></a>
				<form class="form-inline navbar-search" method="post" action="products.html" >
					<input id="srchFld" class="srchTxt" type="text" />
					<select class="srchTxt">
						<option>All</option>
						<option>CLOTHES </option>
						<option>FOOD AND BEVERAGES </option>
						<option>HEALTH & BEAUTY </option>
						<option>SPORTS & LEISURE </option>
						<option>BOOKS & ENTERTAINMENTS </option>
					</select>
					<button type="submit" id="submitButton" class="btn btn-primary">Go</button>
				</form>
				<ul id="topMenu" class="nav pull-right">
					<li class=""><a href="special_offer.html">Specials Offer</a></li>
					<li class=""><a href="normal.html">Delivery</a></li>
					<li class=""><a href="contact.html">Contact</a></li>
					<li class="">
						<a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
						<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h3>Login Block</h3>
							</div>
							<div class="modal-body">
								<form class="form-horizontal loginFrm">
									<div class="control-group">
										<input type="text" id="inputEmail" placeholder="Email">
									</div>
									<div class="control-group">
										<input type="password" id="inputPassword" placeholder="Password">
									</div>
									<div class="control-group">
										<label class="checkbox">
											<input type="checkbox"> Remember me
										</label>
									</div>
								</form>
								<button type="submit" class="btn btn-success">Sign in</button>
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>












<!--<body>-->
<!--	<div id="wrapper">-->
<!--		<div class="header">-->
<!--            <div class="banner">-->
<!--				<div class="site_name"><a href="--><?php //echo base_url(); ?><!--"><img src="--><?php //echo base_url(); ?><!--assets/images/logo.png" ></a></div>-->
<!--				<div class="banner_right">-->
<!--					<div class="top_right_nav">-->
<!--					<a href="--><?php //echo base_url(); ?><!--home/user" class="top_nav_account">Account</a> | -->
<!--					<a href="--><?php //echo base_url(); ?><!--cart" class="top_nav_cart">Cart</a>-->

