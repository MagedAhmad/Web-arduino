<!DOCTYPE html>
<html>
<head>
	<title>Smart village</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/PrayTimes.js"></script>
</head>
<body>

	<!-- Start of navbar -->
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Smart Village</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="index.php">Led lighting</a></li>
	        <li class="active"><a href="lighting.php">Village lighting<span class="sr-only">(current)</span></a></li>
	        
	      </ul>
	      
	      
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>


	<script type="text/javascript">
			prayTimes.setMethod('Egypt');		
			var times = prayTimes.getTimes(new Date(), [31, 31], +2);
	</script>
	<div class="container" style="margin-top:5%;">
		<div class="row">
			<div class="col-md-6">
				<div class="box">
					<h3>Current Time</h3>
					<p>Time : <?php echo date('H:i') ?></p>
				</div>
				<div class="box">
					<h3>Sunrise Time</h3>
					<p>
						<script type="text/javascript">
						 	document.write('Sunrise : '+ times.sunrise);
						</script>
					</p>
				</div>
				<div class="box">
					<h3>Sunset Time</h3>
					<p>
						<script type="text/javascript">
							document.write('Sunset : '+ times.maghrib);
						</script>
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- open port -->
	
	<?php
		/*$port = fopen("/dev/ttyACM0", "w"); // Arduino port
		sleep(2);
	?>

	<!--get times and save it to php array -->
	<?php  $sunRiseTime = "<script>document.write(times.sunrise)</script>" ?>

	<!-- -->
	<?php
		if($sunRiseTime == date('H:i')) { 
			fwrite($port, "c");
		}

		if($sunSetTime == date('H:i')) {
			fwrite($port, "o");
		}*/
	?>
	
	<footer id="footer" class="orange text-center">
		<p style="margin-top:10px; font-size:14px;">All Rights Reserved Majed ahmed - 2017</p>
	</footer>

	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>

