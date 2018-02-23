<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flight Booking</title>

	<!-- Bootstrap -->
	<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
	<link rel="<?php echo base_url(); ?>stylesheet" href="css/animate.css">
	<link rel="<?php echo base_url(); ?>stylesheet" href="css/font-awesome.min.css">
	<link rel="<?php echo base_url(); ?>stylesheet" href="css/jquery.bxslider.css">
	<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>
  	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  		<div class="container">
  			<!-- Brand and toggle get grouped for better mobile display -->
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
  					<span class="sr-only">Toggle navigation</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a class="navbar-brand" href="index.html"><span>Flight Booking</span></a>
  			</div>
  			<div class="navbar-collapse collapse">							
  				<div class="menu">
  					<ul class="nav nav-tabs" role="tablist">
  						<li role="presentation"><a href="<?php echo base_url(); ?>Loginadmin/tampilindex">Home</a></li>
  						<li role="presentation"><a href="<?php echo base_url(); ?>Loginadmin/tampilform">Booking</a></li>
  						<li role="presentation"><a href="<?php echo base_url(); ?>Loginadmin/tampilpesanan">Cek Pemesanan</a></li>
  						<li role="presentation"><a href="<?php echo base_url(); ?>Login">Login</a></li>
  						<li role="presentation"><a href="<?php echo base_url(); ?>Loginadmin/tampilcontact">Contact</a></li>						
  					</ul>
  				</div>
  			</div>			
  		</div>
  	</nav>

	<!-- <div class="overlay">
		<div class="masthead">			
				<img src="img/pesawat1.jpg" alt="">								
		</div>	
	</div> -->
	<div class="slider">
		<div class="img-responsive">
			<img src="<?php echo base_url(); ?>img/pesawat1.jpg" alt="" style="width:1349px;background-size:cover;overlay-y:hidden;height:450.98px;">

			<!-- <!-- <ul class="bxslider">	 -->
			<!-- <img src="img/pesawat1.jpg" alt="" style="width:cover;background-size:cover;overlay-y:hidden;" />			 -->
				<!-- <li></li>								
				<li><img src="img/9.jpg" alt=""/></li>	
				<li><img src="img/7.jpg" alt=""/></li> -->			
				<!-- </ul> -->
			</div>	
		</div>
		<div class="container">
			<form role="form" method="get" class="form-dropdown" action="<?php echo base_url('carihome/search');?>">
				<div class="form-group">
					<label for="departure">Departure</label>
					<select class="form-control" name="departure">
						<?php
						$x="";
						foreach ($rute as $r) {
							if($r->rute_from !== $x){
								?>
								<option><?php echo $r->rute_from; ?></option>
								<?php $x = $r->rute_from;
							}
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="destination">Destination</label>
					<select class="form-control" name="destination">
						<?php
						$y="";
						foreach ($rute as $r){
							if($r->rute_to !==$y){
								?>
								<option><?php echo $r->rute_to; ?></option>
								<?php $y = $r->rute_to;
							}
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="departat">Depart At</label>
					<input type="date" class="form-control" name="departat" placeholder="Depart at">
				</div>

				<input type="submit" value="Search" class="btn btn-default">
			</form>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url(); ?>js/jquery-2.1.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>js/wow.min.js"></script>
		<script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
		<script src="<?php echo base_url(); ?>js/jquery.bxslider.min.js"></script>
		<script src="<?php echo base_url(); ?>js/jquery.isotope.min.js"></script>
		<script src="<?php echo base_url(); ?>js/fancybox/jquery.fancybox.pack.js"></script>
		<script src="<?php echo base_url(); ?>js/functions.js"></script>
		<script>
			wow = new WOW(
			{

			}	) 
			.init();
		</script>
	</body>
	</html>