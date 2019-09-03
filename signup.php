<?php 
	include_once'signupdetails.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>SIGNUP</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="signup.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
		<form  method="post" action="signupdetails.php">
			<div class="row">
				<h1> SIGN UP</h1>
			</div>
			<div class="row">
      			<div class="col-25">
        			<label for="firstname">First Name</label>
      			</div>
      			<div class="col-75">
				     <input type="text" name="firstname" placeholder="First Name" required>
      			</div>
    		</div><!--firstname-->
			<div class="row">
      			<div class="col-25">
        			<label for="Last Name">Last Name</label>
      			</div>
      			<div class="col-75">
				        <input type="text" name="lastname" placeholder="lastname" required>
      			</div>
    	   </div><!--lastname-->
        <div class="row"> 
      			<div class="col-25">
        			<label for="User Name">User Name</label>
      			</div>
      			<div class="col-75">
				       <input type="text" name="username" placeholder="username" required>
      			</div>
    		</div><!--username-->
	   		<div class="row">
      			<div class="col-25">
        			<label for="Email">Email</label>
      			</div>
      			<div class="col-75">
				         <input type="email" name="email" placeholder="email" required>
      			</div>
    		</div><!--email-->
	   		
			<div class="row">
      			<div class="col-25">
        			<label for="password">Password</label>
      			</div>
      			<div class="col-75">
				        <input type="text" name="password" placeholder="Password" required>
      			</div>
			</div><!--password-->
			<div class="row">
      			<div class="col-25">
        			<label for="conpass">Confirm Password</label>
      			</div>
      			<div class="col-75">
				       <input type="text" name="conpass" placeholder="Confirm Password"required>
      			</div>
			</div><!--con_pass-->
			
			<div class="row">
				<input type="checkbox" value="" required>terms and condition<br><br>
			</div><!--confirmation-->
			<div class="row">
				<div class="submit">
      		    	 <a href="index.php" class="btn1" value="">HOME</a>	
      			
      				 <a href="signin.php" class="btn2">SUBMIT</a>	
      			</div>

				<!--  <button><a href="index.php" class="btn1" value="Submit" name="HOME" >HOME</a> </button>
				
				<input type="submit" class="btn2" value="Submit" name="save" onclick="validate()"> --> 
			</div><!--submit-->
		</form>
	</div><!--close container-->
	
	<!--script for cheaking passwor and confirmpassword are same-->
	<script>
        function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("conpass").value;
            if (a!=b){
               alert("Passwords do not match");
               return false;
            }
        }
	</script>
	
</body>
</html>