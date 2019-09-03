<!DOCTYPE html>
<html>
<head>
	<title>INNOVATIONS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
	    <div class="menu">
			<div class="col-sm-2">
         		<img class="logo" src="logo1.jpeg">
        	</div>
        	<div class="col-sm-7">
				<h1 class="title">It's Time To Think About Innovation Of Information Technology</h1>
			</div>	
			<div class="col-sm-3">
				<img src="icons8-new-post-24.png" class="mail">psagade@gmail.com
				<img src="icons8-phone-24.png" class="number">9096482060
                 
			</div>
	    </div>
	    <div class="nav">
	    	<div class="col-sm-12">
	    		<div class=nav__links>
            	<a href="index.php">HOME</a>
            	<a href="publish.php">PUBLISH</a>
            	<a href="signup.php">SIGN UP</a>
            	<a href="signin.php">LOGIN IN</a>
            </div>
	    	</div>	
	    	
	    </div>
	<div class="slogan">
		<h2>"Life's is Great with Great News"</h2>
	</div>    
	
	<div class="slideshow-container">

		<div class="mySlides fade">
			<div class="numbertext">1 / 4</div>
			   <img src="slide4.png" style="width:100%">
			<div class="text">Caption Text</div>
			</div>

		<!-- 	<div class="mySlides fade">
			  <div class="numbertext">2 / 4</div>
			  <img src="slide.jpg" style="width:100%">
			  <div class="text">Caption Two</div>
			</div> -->

			<div class="mySlides fade">
			  <div class="numbertext">3 / 4</div>
			  <img src="slide6.jpg" style="width:100%">
			  <div class="text">Caption Three</div>
			</div>


			<!-- <div class="mySlides fade">
				<div class="numbertext">4/ 4</div>
			  	<img src="download1.jpeg" style="width:100%">
			  	<div class="text">Caption Three</div>
			</div> -->

			</div>
			<br>

			<div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span>
			  <span class="dot"></span> 
			</div>
	</div>
		<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("dot");
			  for (i = 0; i < slides.length; i++) {
			    slides[i].style.display = "none";  
			  }
			  slideIndex++;
			  if (slideIndex > slides.length) {slideIndex = 1}    
			  for (i = 0; i < dots.length; i++) {
			    dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			  setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
		</script>	

<?php

	include_once'connection.php';
	$db=mysqli_connect($servername,$username,$dbname,$password);

	//check connection
	if ($db->connect_error) 
	{
		die("connection failed:".$db);
	}
	/*else{
		echo'connected';
	}*/


 	$sql=mysqli_query($db,"SELECT * FROM publish");
	$num=mysqli_num_rows($sql);
	if($num==0){
    echo "no post yet";
}else
{
    while($rows=$sql->fetch_assoc()){
        $id=$rows['id'];
        $image=$rows['image'];
        $title=$rows['title'];
        $information=$rows['information'];
        $link=$rows['link'];
        $email=$rows['email'];

       
        echo "<img src=data:image/jpg;base64,$image width=20%>";
        echo "<br>";
        echo"title: $title";
        echo "<br>";
        echo "information:$information";
        echo "<br>";
      	echo "link:$link";
      	echo "<br>";
        echo "email:$email"; 
   		echo "<br>";    
    }
}
 
?>



</body>
</html>