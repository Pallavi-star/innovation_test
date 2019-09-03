<?php

	session_start();
	include'connection.php';
	$db=mysqli_connect($servername,$username,$password,$dbname);
//delete post
	$post_id=$_GET['id'];
    mysqli_query($db,"DELETE FROM  publish WHERE id=$post_id");
    header('location:index.php');
        
//edit post

?>


		
