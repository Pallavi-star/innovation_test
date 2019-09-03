<?php 
    include_once 'publishdetails.php';
    include_once 'edit.php';
    if(isset($_SESSION['post_id'])){
        $id=$_SESSION['post_id'];
        //echo $id;
        $edit_state=true;
        $rec = mysqli_query($db,"SELECT title,information,link,image,email FROM publish WHERE id=$id");
        $record =mysqli_fetch_array($rec);
        $title=$record['title'];
        $information=$record['information'];
        $link=$record['link'];
        $image=$record['image'];
        $email=$record['email'];
        //$id=$record['id'];   
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>MANAGE PUBLICATIONS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="publish.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <div class="nav">
            <div class="col-sm-12">
                <div class=nav__links>
                <a href="index.php">HOME</a>
                <a href="publish.php">PUBLISH</a>
                <a href="#">LOGOUT</a>
            </div>
            </div>  
            
        </div> 

    <div class="container1">
        <div class="header">
                <h2>PUBLISH</h2>
        </div>
        <form  method="post" action="publishdetails.php" enctype="multipart/form-data">

            <?php if(isset($_SESSION['msg'])):?>
                <div class="input">
                    <?php
                        echo $_SESSION['msg'];
                       // unset($_SESSION['msg']);
                    ?>
                </div>
            <?php endif ?>
           

            <div class="input">
                <p>Title</p>
                <input type="text" name="title"  placeholder="Enter title" value="">
            </div>  
            <div class="input">          
                    <p>Information</p>
                        <textarea name="information" placeholder="Information" ></textarea>
            </div>
            
            <div class="input">
                <p>Image Link</p>
                <input type="text" name="link" id="fileSelect" >
            </div>

            <div class="input">
                <p>Email</p>
                <input type="email" name="email">
            </div>

            <div class="input">
                <p>Image</p>
                <input type="file" name="image" id="fileSelect" >
            </div>

             <div class="input">
                    <input class="btn1" type="submit" name="update" value="Edit">

                    <input class="btn3" type="submit" name="DELETE" value="DELETE">

            </div>
		</form>
    </div>
    </div>
</body>
</html>