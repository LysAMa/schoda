<?php 
if(isset($_SESSION['user_id']) AND isset($_SESSION['userName']))
{
	header('Location: profile.php');
	exit();
}