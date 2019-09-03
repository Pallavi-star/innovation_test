<?php 
    //include 
    include_once'publishdetails.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
    <div class="title">
        <h2>Publication Form</h2>
    </div>
  
    <form  method="post" action="publishdetails.php">
        <div class="container">
            <div class="row">
                <div class="col-25">
                <label for="publication">Post Id</label>
                </div>
                <div class="col-75">
                    <input type="number" name="post_id">
                </div>
            </div>
            <div class="row">
				<input type="submit" value="SHOW POST" name="Show"> 
			</div>
        </div>
	</form>
</body>
</html>