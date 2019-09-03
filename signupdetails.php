<?php
	
	//session strat
	session_start();


	include_once'connection.php';
	$db=mysqli_connect($servername,$username,$dbname,$password);

	//check connection
	if ($db->connect_error) 
	{
		die("connection failed:".$db);
	}
	/*else{
		echo'connected';
	}
*/
	if(isset($_POST['save'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$query="INSERT INTO admin_tbl(firstname,lastname,username,email,password) VALUES('$firstname','$lastname','$username','$email','$password')";
		mysqli_query($db,$query);
		//$_SESSION['msg']="Details save";
		header('location:signin.php');

	}

	 

?>