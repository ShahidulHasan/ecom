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
					<li class=""><a href="<?php echo base_url(); ?>home/special_offer">Specials Offer</a></li>
					<li class=""><a href="<?php echo base_url(); ?>home/delivery">Delivery</a></li>
					<li class=""><a href="<?php echo base_url(); ?>home/contactus">Contact</a></li>
					<li class="">
						<a href="<?php echo base_url(); ?>home/user" role="button" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

