<?php
	session_start();
	require_once 'db.php';
	
	// if session is not set this will redirect to home page
	if( !isset($_SESSION['email']) ) {
		header("Location: detroitworld.php");
		
	}
else{
    



$email=$_SESSION['email'];

$sql="SELECT name from detroitworld where email='$email'";
    
         $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $name=$row["name"];
    }
} else {
    echo "0 results";
}



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
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<!--LOGO-->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<ul class="navbar-brand">THE DETROIT WORLD</ul>

</div>
<!--menu-->
<div class="collapse navbar-collapse" id="mainNavbar">
<ul class="nav navbar-nav ">
<li><a href="#">Your Account</a></li>

</ul>
    
    
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#ffffff">Hi <?php echo $email;?>  <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="logout.php" >Logout</a></a></li>
                           
                        </ul>
                    </li>
                </ul>

</div>
    </nav>
    <div class="container">
  <h1>Customer Review</h1>
  <h3><?php echo $name;?></h3>
        
        
        <div class="row">
        <div class="col-sm-1">
   <b>Review:<b>
            </div>
            
            <div class="col-sm-11">
            
            
            <form class="form-inline" method="post" action="detroitreview.php">
    <div >
     
        <textarea type="text" class="form-control" id="review" placeholder="Enter review" name="review" style="width:80%; height:250px" required></textarea>
    </div>
    <br>
      
    
    <button type="submit" class="btn btn-default" name="btn-review" type="submit" value=1>Submit</button>
  </form>
                
            </div>
            
        </div>
</div>
    
    
    </body>
</html>