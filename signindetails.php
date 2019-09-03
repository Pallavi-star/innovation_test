<?php 
    //incluse database connection  value
    session_start();
    include_once'connection.php';
    $db=mysqli_connect($servername,$username,$dbname,$password);

    //check connection
    if ($db->connect_error) 
    {
        die("connection failed:".$db);
    }
   /* else{
        echo'connected';
    }*/

   if(isset($_POST['Login'])){
		$username=$_POST['username'];
	    $password=$_POST['password'];

        $result = mysqli_query($db,"SELECT username, password,id FROM admin_tbl WHERE username = '$username'");

        mysqli_query($db,$result);
        header('location: publish.php');
        
        }
        
        if(isset($_POST['cancel'])){
            header('location: index.php'); //redirect to home page 
        }
?>