<?php require('dbconfig.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Workshop</title>

	<link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

<div class = "container">
	<h2>All Student Data</h2><br>
	<a class="btn btn-success" href="form.php">Add</a>

	<table class = "table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Department</th>
				<th>Registration No.</th>
			</tr>
		</thead>
		<tbody>

<?php
// <!-- getting data from database start -->
	$sql = "SELECT * FROM info";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		// output data of each row
		while($row = $result->fetch_assoc()){
			echo '<tr class="success">
				<td>'.$row["name"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["dept"].'</td>
				<td>'.$row["reg"].'</td>

				</tr>';
		}
	}
	else{
		echo "0 results";
	}
	$conn->close();
?>
	</tbody>
</div>
</body>
</html>