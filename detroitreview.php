<?php
	session_start();
	require_once 'db.php';
// if session is not set this will redirect to home page
	if( !isset($_SESSION['email']) ) {
		header("Location: detroitworldaccount.php");
		
	}

  $email=$_SESSION['email'];  

// If form submitted, insert values into the database.
if(isset($_POST['btn-review']) ) {
        // removes backslashes
	$review =$_POST['review'];
    
    $sql="insert into detroit_review(email,review) values('$email','$review')";
	$res=mysqli_query($con,$sql);
	if(!$res)
	{
		die("query failed".mysqli_errno($con));
		}
		else
		{
			echo"<strong> Submitted Sucessfully.You May Logout Now..!!!
            
            </strong>";
            echo "<script>setTimeout(\"location.href = 'http://localhost/first/detroitworldaccount.php';\",4000);</script>";
            
        }
    
}
mysqli_close($con);
?>
    