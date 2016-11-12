<?php require('dbconfig.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $name = $_POST["firstname"];
  $email = $_POST["email"];
  $dept = $_POST["department"];
  $reg = $_POST["registration"];

  // echo $name;
  // echo $email;
  // echo $dept;
  // echo $reg;

  $sql = "INSERT INTO info(name, email, dept, reg) VALUES ('$name', '$email', '$dept', '$reg')";

  if($conn->query($sql) == TRUE){
  	$message = "Your Data has been created Successfully";
  	header('Location: form.php?meg='.$message);
  	}
  	else{
  		$message = "Something went wrong";
  		header('Location: form.php?meg='.$message);
  	}
  	$conn->close();
}
 ?>