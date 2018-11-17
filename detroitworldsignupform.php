<?php
ob_start();
require('db.php');
session_start();
// if session is not set this will redirect to home page
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: detroitworld.php");
		exit;
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

        <style>
            #tt{
                border:1px solid #f1f1f1;
                border-radius: 8px;
                
              width:380px
                  
            }
            
            table{
                width:350px
            }
            
        </style>
		<link rel="stylesheet" href="btstrpexp2.css">
    </head>
    <body>
	<div class="container">

	<center>
	<h4 style="position:relative;color:gray;font-size:40px;">SIGN UP</h4>
	</center>
    <center>
          <form action="detroitworldsignup.php" method="post" enctype="multipart/form-data" >
              <div id="tt">
            <table>
            <tr>
            <td><br><c>Full Name</c><br><input class="form-control" type="text" name="fname" placeholder="Full Name" required></td>
            </tr>              
            <tr><tr><tr><tr><tr>
            <td><c>Address</c><br><input class="form-control"type="text" name="addr"  placeholder="Address" required ></td>
            </tr>
            <tr><tr><tr><tr><tr><tr>
            <td><c> Email Address</c><br><input class="form-control" type="text" name="email" placeholder="Email Address" required><br></td>
            </tr>
            <tr> <tr><tr><tr><tr><tr>
            <td><c>Password</c><br><input class="form-control"type="password" name="pass"  placeholder="Password" required><br></td>
            </tr>
            <tr><tr><tr><tr><tr><tr>
            <td><c>Phone Number</c><br><input class="form-control" type="text" name="num" placeholder="Phone Number" required><br><br></td>
                </tr><tr>
            <td><c>GENDER<input type="radio" name="g1" value="male">Male
            <input type="radio" name="g1" value="female">Female</td>
            </tr>
		    <tr><tr>
            <tr>               
            <td><c>CITY
            <select class="form-control" name="cty">
            <option>Select</option>
            <option>Dehradun</option>
            <option>Haridwar</option>
            <option>Nanital</option>
            <option>Roorkee</option>
            <option>Himachal Pradesh</option>
            <option>Haryana</option>      
			<option>Rishikesh</option>   
			<option>Tehri</option>        
                </select><br></c></td>
            </tr> 
            </table><br><br>
            <input type="submit" value="REGISTER" style="height:35px;width:300px;background-color:royalblue;margin: -110px;color:white;">
                  
              </div>
        </form>     
       
    </center>
	<hr>
	<center><div class="f">2017 (C) | THE DETROIT WORLD | All Rights Reserved |<a href="detroitworld.php" style="text-decoration:none;color:gray;"> Home |</a></div>
	</hr>
	</div>
    </body>
</html>