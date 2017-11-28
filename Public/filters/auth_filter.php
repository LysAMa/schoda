<?php 
session_start();
if(!isset($_SESSION['user_id']) AND !isset($_SESSION['userName']))
{
	header('Location: index.php');
	exit();
}


