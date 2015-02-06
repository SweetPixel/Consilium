<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><img style="width: auto; height: 90px;" src="img/Consilium.svg"></a>
		</div>
		<div class="collapse navbar-collapse" id="collapsable-nav">
			<ul class="nav navbar-nav navbar-right">
				<li class="what-we-do-nav"><a href="what-we-do.php"><span>What we do</span></a></li>
				<li class="wwb-nav"><a href="who-will-benefit.php">Who will benefit</a></li>
				<li class="offering-nav"><a href="offerings.php">Our offerings</a></li>
				<li class="features-nav"><a href="features-videos.php">Features & Videos</a></li>
				<li class="wwa-nav"><a href="who-we-are.php">Who we are</a></li>
				<li class="contact-us-nav"><a href="contact.php">Contact us</a></li>
			</ul>
			<!-- <ul class="nav navbar-nav navbar-right">
				<?php if( isset( $_SESSION['username'] ) ) { ?>

				<li><a href="admin-panel.php"><?php echo $_SESSION['username'];	 ?></a></li>
				<li><a href="logout.php">Logout</a></li>

				<?php } else { ?>

				<li class="dropdown"><a href="member-login.php">Members</a></li>

				<?php } ?>
			</ul> -->
		</div>
	</div>
</nav>