<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Flight Booking Reservation</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Online Auto Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tags -->
	<!-- Stylesheet -->
	<link href="<?php echo base_url(); ?>assets/tiket/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/tiket/css/jquery-ui.css" />
	<link href="<?php echo base_url(); ?>assets/tiket/css/style.css" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat+Alternates:200,400,500,600,700" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<!--background-->
	<h1> <span>F</span>LIGHT <span>B</span>OOKING</h1>
		<div class="book-appointment">
			<h2>Personal Details</h2>
			<div class="book-agileinfo-form">
				<form action="<?php echo base_url(); ?>reservation/editproses" method="post">
				<?php foreach($editdata as $row): ?>
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
						<input type="hidden" name="id" value="<?php echo $row->id; ?>">
							<input type="text" name="name" placeholder="Full Name" required="">
						</div>
						<div class="agileits-btm-spc form-text2">
							<input type="text" name="honeno" placeholder="Phone number" required="">
						</div>
					</div>
					<div class="agileits-btm-spc form-text">
						<input type="email" name="email" placeholder="Email" required="">
					</div>
					<div class="clear"></div>
					<h2 class="sub-head-w3ls">Booking Details</h2>
					<div class="main-agile-sectns">
					<div class="agileits-btm-spc form-text1">
							<input type="text" name="reservationcode" placeholder="Reservation Code" required="" value="<?php echo $row->reservation_code; ?>">
						</div>
					<div class="agileits-btm-spc form-text2">
							<input id="datepicker" name="reservationat" type="text" placeholder="Reservation At" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
							    required="" value="<?php echo $row->reservation_at; ?>">
						</div>
					</div>
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<input id="datepicker1" name="reservationdate" type="text" placeholder="Reservation Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
							    required="" value="<?php echo $row->reservation_date; ?>">
						</div>
						<div class="agileits-btm-spc form-text1">
							<input type="text" name="seatcode" placeholder="Seat Code" required="" value="<?php echo $row->seat_code; ?>">
						</div>
					</div>
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<input type="text" name="customerid" placeholder="Customer Id" required="" value="<?php echo $row->customer_id; ?>">
						</div>
						<div class="agileits-btm-spc form-text2">
							<input type="text" name="ruteid" placeholder="Rute Id" required="" value="<?php echo $row->rute_id; ?>">
						</div>
					</div>
					<div class="main-agile-sectns">
					<div class="agileits-btm-spc form-text2">
							<input type="text" id="timepicker" name="departat" class="timepicker form-control" placeholder="Depart At" value="" value="<?php echo $row->depart_at; ?>">
						</div>
					<div class="agileits-btm-spc form-text1">
							<input type="text" name="price" placeholder="Price" required="" value="<?php echo $row->price; ?>">
						</div>
					</div>
					<div class="main-agile-sectns">
					<div class="agileits-btm-spc form-text1">
							<input type="text" name="userid" placeholder="User Id" required="" value="<?php echo $row->user_id; ?>">
						</div>
					</div>
					<!-- <div class="main-agile-sectns"> -->
						<!-- <div class="agileits-btm-spc form-text1"> -->
							<!-- <select id="country1" onchange="change_country(this.value)" class="frm-field required sect"> -->
												<!-- <option value="">No.of Passengers</option> -->
												<!-- <option value="">1</option> -->
												<!-- <option value="">2</option> -->
												<!-- <option value="">3</option>          -->
												<!-- <option value="">4</option> -->
												<!-- <option value="">5</option> -->
											<!-- </select> -->
						<!-- </div> -->
						<!-- <div class="agileits-btm-spc form-text2"> -->
							<!-- <select id="country" onchange="change_country(this.value)" class="frm-field required"> -->
												<!-- <option value="">Direction</option> -->
												<!-- <option value="">Only One Way</option> -->
												<!-- <option value="">Return</option>        -->
											<!-- </select> -->
						<!-- </div> -->
					
					<input type="submit" value="Submit" style="width:1285.95px;">
					<div class="clear"></div>
					<?php endforeach; ?>
				</form>
			</div>

		</div>
	</div>
	<!--copyright-->
	<div class="">
		<p></a>			</p>
	</div>
	<!--//copyright-->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/tiket/js/jquery-2.2.3.min.js"></script>
	<!-- Time -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/tiket/js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({
			twentyFour: false
		});
	</script>
	<!--// Time -->
	<!-- Calendar -->
	<script src="<?php echo base_url(); ?>assets/tiket/js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->

</body>

</html>