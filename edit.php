<?php 
	session_start();
    //incluse database connection  value
    include_once'connection.php';

    $db=mysqli_connect($servername,$username,$dbname,$password);

    //check connection
    if ($db->connect_error) 
    {
        die("connection failed:".$db);
    }
  /*  else{
        echo'connected';
    }*/
    
    if(isset($_SESSION['id'])){
        $id=$_SESSION['id'];
        $edit_state=true;
        $rec = mysqli_query($db,"SELECT * FROM publish WHERE id=$id");
        $record =mysqli_fetch_array($rec);
        $title=$record['title'];
        $information=$record['information'];
        $link=$record['link'];
        $email=$record['email'];
        $image=$record['image'];
      
     //   $id=$record['id'];   

        mysqli_query($db,$query);
        header('location:index.php');
    }
?>