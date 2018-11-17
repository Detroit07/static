<?php

require('db.php');
session_start();
// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: detroitworldaccount.php");
		exit;
    }



// If form submitted, insert values into the database.
if(isset($_GET['btn-login']) ) {
        // removes backslashes
	$email = trim($_GET['email']);
	$pass = $_GET['pass'];

	
			
			
			$sql="select * from  detroitworld where email='$email'";
	
            
            $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $real_pass=$row["password"];
    }
} else {
    echo "";
}

            if($real_pass==$pass)
            {
                $_SESSION['email']=$email;
                header("location: detroitworldaccount.php");
            }
                
			
			 else{
                
                ?>
<script>

alert("wrong id password ");
</script>
<?php
                
            
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
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="#"class="navbar-brand">THE DETROIT WORLD</a></div>

<!--Menu-->
<div class="collapse navbar-collapse" id="mainNavBar">
<ul class="nav navbar-nav">
<li><a href="#box2">Projects</a></li>
<li><a href="customer.php">Queries & Reviews</a></li>
<li><a href="#footer">Contact Us</a></li>
</ul>
    
    
    
    
    
<!--right align-->
<ul class="nav navbar-nav navbar-right">
<button type="button" class="btn  btn-success " data-toggle="modal" data-target="#popUpWindow"> Log In</button>
<div class="modal fade" id="popUpWindow">
<div class="modal-dialog">
<div class="modal-content">
<!--header-->
<div class="modal-header">
<button type="button" class="close"data-dismiss="modal">&times;</button>
<h3 class="modal-tittle">Log In</h3>
</div>
<!--body(form)-->
<div class="modal-body">
<form  method="get" >
<div class="form-group">
<input type="email" class="form-control" placeholder="Email" name="email">
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="password" name="pass">
</div>

<!--button-->
<div class="modal-footer">
<button class="btn btn-primary btn-block" type="submit" name="btn-login" value="1">Submit</button>
    </form>
<br>
<center>New to The Detroit World? click <a href="detroitworldsignupform.php" target="_blank">here</a> to sign in.
</div>
</div>
</div>
</div>
</ul>
</div>
</nav>
<div class="container">
<div class="row">
<div class="col-md-12 jumbotron">
<div class="text-center">
<h1>WE BUILD<br> WEBSITES FOR<br> THE PEOPLE</H1>
<a href="detroitworldlearnmore.php" class="btn btn-lg btn-primary">Learn More</a>
</div>
<div class=" text-center">
<span class="label label-info">HTML 5</span>
<span class="label label-success">CSS 3</span>
<span class="label label-default">JavaScript</span>
<span class="label label-danger">PHP</span>
<span class="label label-primary">Bootstrap</span></div></div></div></div>
<br>
<br>

<div id="box1">
<h2 align=center>&nbspYou want a website? Do you want someone to build a website for you?A blog?<br>
 Do you have no idea what to do? With so many options, how are you supposed to know which option is best?
 First and foremost, what are web developers? They are the people  that design and develop your own website through coding languages such as html,css 
 javascript,php and many more. You can produce a beautiful and functional website without having to understand
 technicalities like code, even for your online shop. With your own website, you can have your very own space on the Internet, 
 whether to write a blog, start an eCommerce business, or sell your antique collection.<br>
<br>
&nbsp&nbspSo how do you start and what do you look for? Depending on your wants, needs, and website goals, we The Detroit World work hard in order to provide 
you the website that you deserve.So what are you waiting for? Just conatct us and get the website you want ready in a week at  an affordable price.</h2> </div>
<br>
<br>
<div class="container" id="box2">
<h1 style="font-size:60px;color:royalblue">Projects</h1>
<br>
<table class="table table-striped course-list">
<tr>
<th>Customer</th>
<th>Project Name</th>
<th>Use</th>
<th>Status</th>
</tr>
<tr>
<td>Naveen Sharma</td>
<td>The Himalyan Resorts</td>
<td>Personal Use</td>
<td>Completed</td>
</tr>
<tr>
<td>Vikas</td>
<td>Uwpms</td>
<td>Personal Use</td>
<td>Delivered</td>
</tr>
<tr>
<td>Aman Raturi</td>
<td>The Detroit World</td>
<td>Business Purpose</td>
<td>Working</td>
</tr>
<tr>
<td>Tushar Tyagi</td>
<td>Offline Booking System</td>
<td>Personal Use</td>
<td>Delivered</td>
</tr>
<tr>
<td>Vinay Maurya</td>
<td>The Foody People</td>
<td>Personal Use</td>
<td>Delivered</td>
</tr><tr>
<td>Sajan Singh Bisht</td>
<td>TravelBookings.com</td>
<td>Personal Use</td>
<td>Working</td>
</tr>
</table>
</div>
</div>
<br>
<br>
<br>
<br>
<div class="container-fluid" id="footer">
<img src="img/me.jpg" class="img-circle"  border="10px" width="200" height="200" align=left>
<h3 align=center>Hello! I am Aman Raturi,a college student currently persuing graduation ,who is passionate about web development and love to build websites.
You can directly contact me on the information given below regarding website development or if you have any other queries.</h3>
<br>
<h3 align=center><img  class="img-rounded" border="0" src="img/whatsapp.png" width="40" height="40">+918979183827<br>
aman.amanraturi.raturi7@gmail.com</h3>
<br>
<a href="https://www.linkedin.com/in/aman-raturi-811703ab/"> 
<img  class="img-rounded"border="0" src="img/lnkdin.png" width="30" height="30" align=right></a>&nbsp
<a href="https://www.facebook.com/aman.amanraturi.raturi7"> 
<img  class="img-rounded"border="0" src="img/fb.png" width="30" height="30" align=right></a>&nbsp
<a href="https://plus.google.com/u/0/108715126289343572594"> 
<img  class="img-rounded"border="0" src="img/gglplus.png" width="30" height="30" align=right></a>&nbsp
    <center><div class="f">2017 (C) | THE DETROIT WORLD | All Rights Reserved</div></center>
<br>
</body>
</html>