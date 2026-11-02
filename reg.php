<?php 

 	$fullname = $_POST['fullname'];
 	$email = $_POST['email'];
 	$password = $_POST['password'];
 	$confirmPassword = $_POST['confirmPassword'];
 	$phone = $_POST['phone'];
 	$gender = $_POST['gender'];

 	// database connection

 	$conn = new mysqli('localhost','root','','test');
 	if($conn -> connect_error){
 		echo "$conn->connect_error";
 		die("connection failed:" . $conn<-connect_error);
 	}else{
 		$stmt = $conn-> prepare("Insert into registration (fullname,email,password,confirmPassword,phone,gender) values(?,?,?,?,?,?) ");

 		$stmt-> bind_param("sssssi", $fullname,$email,$password,$confirmPassword,$phone,$gender);

 		$execval = $stmt-> execute();
 		echo $execval;
 		echo "Registration successfully.............";
 		$stmt ->close();
 		$conn -> close();
 	}












 ?>