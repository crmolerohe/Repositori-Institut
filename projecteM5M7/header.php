<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="/projecteM5M7/js/kickstart.js"></script> <!-- KICKSTART -->
	<link rel="stylesheet" href="/projecteM5M7/view/css/kickstart.css" media="all" /> <!-- KICKSTART -->
	<style> @import url('http://fonts.googleapis.com/css?family=Open+Sans'); 
	html {
		font-family: 'Open Sans';
	}
	</style>
</head>
<body>
	<div class="grid flex" id="master" style="width:70%; margin: 0 auto">
		<header>
			<div class="col_2">
				<img src="/projecteM5M7/view/images/logo.jpg" width="120px" height="80px" />
			</div>

			<nav  class="col_10">
				<!-- Menu Horizontal -->
				<ul class="menu grid flex">
					<li class="current"><a href="">Item 1</a></li>
					<li><a href="">Item 2</a></li>
					<li><a href=""><i class="icon-inbox"></i> Item 3</a>
						<ul>
							<li><a href=""><i class="icon-cog"></i> Sub Item</a></li>
							<li><a href=""><i class="icon-envelope-alt"></i> Sub Item</a>
								<ul>
									<li><a href=""><i class="icon-wrench"></i> Sub Item</a></li>
									<li><a href=""><i class="icon-camera-retro"></i> Sub Item</a></li>
									<li><a href=""><i class="icon-coffee"></i> Sub Item</a></li>
									<li><a href=""><i class="icon-twitter"></i> Sub Item</a></li>
								</ul>
							</li>
							<li class="divider"><a href=""><i class="icon-trash"></i> li.divider</a></li>
						</ul>
					</li>
					<li><a href="">Item 4</a></li>
					<?php
					if(isset($_SESSION['loguejat'])) {
						?>
						<li><a href="/projecteM5M7/controller/logout.php">Logout</a></li>
						<?php
					} else {
						?>
						<li><a href="/projecteM5M7/view/login.php">Login</a></li>
						<?php
					}
					?>
				</ul>

			</nav>
		</header>
