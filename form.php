<!DOCTYPE html>
<html>
<head>
	<title>Workshop</title>

	<link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<div class = "container">
	<h2>Data Collection</h2>
<!-- Mahir Hasan-->
	<?php
	if(!empty($_GET['meg'])){
		echo $_GET['meg']."<br>"."<br>";}
	else{
		echo '';
	}

	?>


	<form class = "form-horizontal" action="form_data.php" method="POST">

		<div class="form-group">
			<label class="control-label col-md-2" for="name">Name:</label>
			<div class = "col-md-6">
  				<input type="text" name="firstname" class="form-control" placeholder="Enter Your Full Name" required></br>
  			</div>
  		</div>

  		<div class="form-group">
			<label class="control-label col-md-2" for="email">Email:</label>
			<div class = "col-md-6">
  				<input type="email" name="email" class="form-control" placeholder="someone@gmail.com" required></br>
  			</div>
  		</div>

  		<div class="form-group">
			<label class="control-label col-md-2" for="department">Department:</label>
			<div class = "col-md-6">
  				<input type="text" name="department" class="form-control" placeholder="E.g. CSE,PME" required></br>
  			</div>
  		</div>

  		<div class="form-group">
			<label class="control-label col-md-2" for="registration">Registration:</label>
			<div class = "col-md-6">
  				<input type="text" name="registration" class="form-control" placeholder="201X331XXX" required></br>
  			</div>
  		</div>

  		<div class="form-group">
			<div class = "col-sm-offset-4 col-md-6">
  				<button type="submit" class="btn btn-primary">Submit</button
  				>
  				<a class="btn btn-success" href="index.php">All Data</a>
  			</div>
  		</div>


	</form>
</div>
</body>
</html>