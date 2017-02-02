<script type="text/javascript">
	$(document).ready(function(e) {
		$('.tr_name').hide();
		$('.tr_confirm').hide();
		$('a.user_link').hide();
		$('.tr_name input').removeAttr('Required');
		$('.tr_confirm input').removeAttr('Required');
		$('.reset_link').click(function(e) {
			$('.reset_link').hide();
			$('.tr_password').hide();
			$('.tr_confirm').hide();
			$('a.user_link').show();
			$('a.signup_link').show();
			$('.tr_name').show();
			$('h2.cms_title span').text( "Reset Password" );
			$('.tr_password input').removeAttr('Required');
			$('.tr_confirm input').removeAttr('Required');
			$('.tr_name input').attr('Required', true );
			$('.submit_type').val( 'reset' );
		});
		$('.signup_link').click(function(e) {
			$('.signup_link').hide();
			$('.tr_name').show();
			$('.tr_password').show();
			$('.tr_confirm').show();
			$('a.user_link').show();
			$('a.reset_link').show();
			$('h2.cms_title span').text( "New Signup" );
			$('.tr_name input').attr('Required', true );
			$('.tr_password input').attr('Required', true );
			$('.tr_confirm input').attr('Required', true );
			$('.submit_type').val( 'signup' );
		});
		$('.user_link').click(function(e) {
			$('.tr_name').hide();
			$('.tr_confirm').hide();
			$('a.user_link').hide();
			$('.tr_password').show();
			$('a.signup_link').show();
			$('a.reset_link').show();
			$('h2.cms_title span').text( "User Login" );
			$('.tr_name input').removeAttr('Required');
			$('.tr_confirm input').removeAttr('Required');
			$('.tr_password input').attr('Required', true );
			$('.submit_type').val( 'login' );
		});
		<?php if( isset( $submit_type ) && $submit_type != "" ) { if( $submit_type == "login" ) { ?>
		$('.tr_name').hide();
		$('.tr_confirm').hide();
		$('a.user_link').hide();
		$('.tr_password').show();
		$('a.signup_link').show();
		$('a.reset_link').show();
		$('h2.cms_title span').text( "User Login" );
		$('.tr_name input').removeAttr('Required');
		$('.tr_confirm input').removeAttr('Required');
		$('.tr_password input').attr('Required', true );
		$('.submit_type').val( 'login' );
		<?php } else if( $submit_type == "signup" ) { ?>
		$('.signup_link').hide();
		$('.tr_name').show();
		$('.tr_password').show();
		$('.tr_confirm').show();
		$('a.user_link').show();
		$('a.reset_link').show();
		$('h2.cms_title span').text( "New Signup" );
		$('.tr_name input').attr('Required', true );
		$('.tr_password input').attr('Required', true );
		$('.tr_confirm input').attr('Required', true );
		$('.submit_type').val( 'signup' );
		<?php } else if( $submit_type == "reset" ) { ?>
		$('.reset_link').hide();
		$('.tr_password').hide();
		$('.tr_confirm').hide();
		$('a.user_link').show();
		$('a.signup_link').show();
		$('.tr_name').show();
		$('h2.cms_title span').text( "Reset Password" );
		$('.tr_password input').removeAttr('Required');
		$('.tr_confirm input').removeAttr('Required');
		$('.tr_name input').attr('Required', true );
		$('.submit_type').val( 'reset' );
		<?php }} ?>
	});
</script>



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
				<h3> Login</h3>
				<hr class="soft"/>

				<div class="row">
					<div class="span4">
						<div class="well">
							<h5>ALREADY REGISTERED ?</h5>
							<form action="<?php echo base_url();?>home/login_action" method="post" id="form-login">
                                <?php if( isset( $massage )) echo "$massage"; ?>
								<div class="control-group">
									<label class="control-label" for="inputEmail1">Email</label>
									<div class="controls">
										<input class="span3" type="text" name="username" id="inputEmail1" placeholder="Email">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword1">Password</label>
									<div class="controls">
										<input type="password" class="span3" name="password" id="inputPassword1" placeholder="Password">
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<button type="submit" class="btn">Sign in</button>
<!--                                        <a href="forgetpass.html">Forget password?</a>-->
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="span1"> &nbsp;</div>
					<div class="span4">
						<div class="well">
							<h5>CREATE YOUR ACCOUNT</h5><br/>
							<form method="post" action="<?php echo base_url(); ?>home/user" name="user_action">
								<?php if( isset( $error ) && $error != "" ) echo "<span>$error</span>"; ?>
								<div class="control-group">
									<label class="control-label" for="inputEmail0">Enter Your Full Name</label>
									<div class="controls">
										<input class="span3" type="text" name="name" value="" required="required" placeholder="Full Name">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputEmail0">E-mail address</label>
									<div class="controls">
										<input class="span3" type="email" name="email" value="" required="required" placeholder="Email">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputEmail0">Enter A Login Password</label>
									<div class="controls">
										<input class="span3" type="password" name="password" value="" required="required" placeholder="Password">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputEmail0">Confirm Login Password</label>
									<div class="controls">
										<input class="span3" type="password" name="cpassword" value="" required="required" placeholder="Confirm Password">
									</div>
								</div>
								<div class="controls">
									<button type="submit" name="submit" class="btn block">Create Your Account</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div></div>
</div>

<?php //$this->load->view( 'home/right_view' ); ?>