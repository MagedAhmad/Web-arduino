<!DOCTYPE html>
<html>
<head>
	<title>Smart village</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

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
        <li class="active"><a href="index.php">Led lighting<span class="sr-only">(current)</span></a></li>
        <li><a href="lighting.php">Village lighting</a></li>
        
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- End of navbar -->


<div class="container text-center">
	<h3 class="text-center" style="margin-top:150px;">Turn Led</h3>
<!-- turn led on -->

	<form style="display:inline;" class="form" action="index.php" method="POST">
		<input type="hidden" name="turn" value="on" />
		<input type="Submit" id="on" class="btn btn-success 
			<?php
				if(!empty($_POST['turn'])){
		 			if ($_POST['turn']=="on") echo "btn-lg";
		 		}
		 	?>" value="on">
	</form>

<!-- turn off led -->

	<form style="display:inline;" class="form" action="index.php" method="POST">
		<input type="hidden" name="turn" value="off" />
		<input type="Submit" id="off" class="btn btn-danger <?php
				if(!empty($_POST['turn'])){
		 			if ($_POST['turn']=="off") echo "btn-lg";
		 		}
		 	?>" value="off">
	</form>
</div>



<div class="container text-center">
	<h3 class="text-center" style="">Turn Curtains</h3>
<!-- turn curtains on -->

	<form style="display:inline;" class="form" action="index.php" method="POST">
		<input type="hidden" name="curtains" value="on" />
		<input type="Submit" id="on" class="btn btn-success 
			<?php
				if(!empty($_POST['curtains'])){
		 			if ($_POST['curtains']=="on") echo "btn-lg";
		 		}
		 	?>" value="on">
	</form>

<!-- turn curtains off  -->

	<form style="display:inline;" class="form" action="index.php" method="POST">
		<input type="hidden" name="curtains" value="off" />
		<input type="Submit" id="off" class="btn btn-danger <?php
				if(!empty($_POST['curtains'])){
		 			if ($_POST['curtains']=="off") echo "btn-lg";
		 		}
		 	?>" value="off">
	</form>
</div>

	<?php
	if(!empty($_POST['turn'])) {
		$port = fopen("/dev/ttyACM0", "w"); // Arduino port
		sleep(2);
	}
	?>

	<?php
		
		if(!empty($_POST['turn'])) {
			if ($_POST['turn']=="on"){

				fwrite($port, "n");

			}

			if ($_POST['turn']=="off"){


				fwrite($port, "f");

			}

			fclose($port);
		}

	?>
	<?php

	if(!empty($_POST['curtains'])) {
		$port = fopen("/dev/ttyACM0", "w"); // Arduino port
		sleep(2);
	}
	?>


	<?php
		
		if(!empty($_POST['curtains'])) {
			if ($_POST['curtains']=="on"){

				fwrite($port, "m");

			}

			if ($_POST['curtains']=="off"){


				fwrite($port, "s");

			}

			fclose($port);
		}

	?>
	


	<script type="text/javascript" src="assets/js/PrayTimes.js"></script>
	

	

	<footer id="footer" class="orange text-center">
		<p style="margin-top:10px; font-size:14px;">All Rights Reserved Majed ahmed - 2017</p>
	</footer>

	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>

