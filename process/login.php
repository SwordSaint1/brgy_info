<?php
 include 'conn.php';
 session_start();
 if (isset($_POST['login_btn'])) {
 	$username = $_POST['username'];
 	$password = $_POST['password'];

 	if (empty($username)) {
 		echo 'Please Enter Email Address';
 	}else if(empty($password)){
 		echo 'Please Enter Password';
 	}
    else{

 		$check = "SELECT id FROM user_accounts WHERE BINARY username = '$username' AND BINARY password = '$password'";
 		$stmt = $conn->prepare($check);
 		$stmt->execute();
 		if ($stmt->rowCount() > 0) {
 				$_SESSION['username'] = $username;
 				header('location: page/admin/dashboard.php');
 			
 		}else{
            echo '<script>alert("Wrong Username or Password !!!")</script>';
 		}
 	}
 }
 if (isset($_POST['Logout'])) {
 	session_unset();
 	session_destroy();
 	header('location: ../index.php');
 }


?>