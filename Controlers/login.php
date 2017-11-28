<?php

include("Public/filters/guest_filter.php");
require("database/config/db_connect.php");
require("Public/includes/custom_functions.php");

if(isset($_POST['login']))
{

	if(not_empty(['identifiant','password']))
	{
		extract($_POST);

		$q = $db->prepare("SELECT id,name FROM users 
			WHERE (name=:identifiant OR email=:identifiant)
			AND password=:password
			");


		$q->execute([

			'identifiant' => $identifiant,
			'password' => sha1($password)

			]);

		$userHasBeenFound = $q->rowCount();

		

		if($userHasBeenFound)
		{
			
			$user = $q->fetch(PDO::FETCH_OBJ);

			$_SESSION['user_id'] = $user->id;
			$_SESSION['userName'] = $user->name;
			
			redirect('Controlers/profil.php');

		}
		else
		{
			$errors[] = "User Not Found";
		}


	}
	else{
		$errors[] = "Enter your credentials!";
		saveFields();
	}
}
else{
	//Methode call pour effacer les champs pre-remplis, si l'utilisateur viens d'arriver sur la page
	clearSaveFields();
}



require("Views/login_view.php");




