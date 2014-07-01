<!DOCTYPE html>
<html lang="en">
<head>
	<title>About Cesar Zavala</title>
	<meta charset="utf-8">
	<!-- Bootstrap CDN additions -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>		
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- End of Bootstrap additions -->
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="icon" type="image/ico" href="images/favicon.ico">
	<!-- jQuery accordion -->

  	<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>


</head>
<body class="container-fluid">
		<header class="jumbotron">
			<div class="row">
				<h1>Cesar Zavala Mesta</h1>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<img class="profile-picture img-responsive" alt="Cesar's picture" src="images/Cesar.jpg">
				</div>
				<div class="col-sm-8">
					<div id="accordion">
						<?php include 'content.html' ?>
					</div>
				</div>
			</div>
		</header>
		<?php include 'content.html' ?>
		<script>
		  $(function() {
		    $( "#accordion" ).accordion({
		    	heightStyle: "content"
		    });

		  });
 		</script>

</body>
</html>