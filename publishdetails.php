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
   /* else{
        echo'connected';
    }*/

    if (isset($_POST['submit'])) {
    	$title=$_POST['title'];
    	$information=$_POST['information'];
    	$link=$_POST['link'];
    	$email=$_POST['email'];

        $image=$_FILES['image']['tmp_name'];

        if(!empty($image)){
            $image=fread(fopen($image,"r"),filesize($image));
            $picture=base64_encode($image);
        }


    	$query="INSERT INTO publish(title,information,link,email,image) VALUES('$title','$information','$link','$email','$picture')";

        mysqli_query($db,$query);
        header('location:index.php');

    }	
   
    if(isset($_POST['Show'])){
        $post_id=$_POST['post_id'];
        $_SESSION['post_id']=$post_id;
        header('location:manage_publish.php');
        //echo $post_id;
    }    
?>