<?php
ob_start();
session_start();
// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: detroitworld.php");
		exit;
    }

session_destroy();

header("location: detroitworld.php");

?>