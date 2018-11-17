<?php
ob_start();
require('db.php');
session_start();
// if session is not set this will redirect to home page
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: detroitworld.php");
		exit;
    }

$sql="SELECT * from detroit_review ";
    
         $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    for($i="1";$row = mysqli_fetch_assoc($result);$i++) {
        
        $email[$i]=$row['email'];
        $review[$i]=$row['review'];
        
        
    }
} else {
    echo "";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="detroitworld.css">
	</head>
<body>
    
    <center><h1> Queries & Review</h1></center>
    
    
    <br><br>
    <div class="container">
    <center>
    
     
          
          
          <?php
          
          for($j="1";$j<$i;$j++)
          {
            ?>
        <h5 style="float:left">
          <?php echo $email[$j];?>   
           </h5>
        <br><br>
        <p style="float:left;margin-left:30px">
         
        <?php echo $review[$j];?>
            
        </p><br>
        <hr>
              
            <?php  
          }
        
        ?>
        
        
        
        
        
        
        
    
    </center>
    
    </div>
    </body>
    
</html>