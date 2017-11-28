<?php

include("Public/filters/guest_filter.php");
require("Public/includes/custom_functions.php");


//Verifie si la requete a ete soumis.
if(isset($_POST['register']))
{
	
	//Verifie si tous les champs sont remplis.
	if(not_empty(['orgName','userName','email','telephone','secteurActivite',
		'adresse','langue','password','confirmPassword']))
	{
		$errors = [];//Tableaux des erreurs.

		extract($_POST);

		//Verifie si le nom de l'utilisateur fait au moins 6 caracteres.
		if(mb_strlen($userName) < 6)
		{
			$errors[] = "Pseudo trop court!(Minumum 6 caractères).";
		}

		//Verifie si l'adresse email est valide
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$errors[] = "Adresse email invalide.";
		}

		//Verifie si le mot de passe fait au moins 6 caracteres.
		if(mb_strlen($password) < 6)
		{
			$errors[] = "Cette chaîne est trop courte!(Minimum 6 caractères).";
		}
		else
		{
			//Verification de mot de passe
			if ($password != $confirmPassword) 
			{
				$errors[] = "Les deux mots de passe devrait être identique.!";
			}
		}


		if(is_already_in_use('orgName',$orgName,'users'))
		{
			$errors[] = "Organisation déja enregister !";
		}

		if(is_already_in_use('email',$email,'users'))
		{
			$errors[] = "Adrresse E-mail déja utilisé!";
		}

		//S'il n'y a pas d'erreur envoye le mail d'activation
		if(count($errors) == 0)
		{

			$errors[] = "Mail d'activation envoye!";

			$q = $db->prepare('INSERT INTO users(name,orgName,email, phone,secteurActivite,adresse,langue, password, created_at)
				VALUES(:name,:orgName,:email,:phone,:secteurActivite,:adresse,:langue,:password,NOW())');

			$q->execute([

				'name' => $userName,
				'orgName' => $orgName,
				'email' => $email,
				'phone' =>$telephone,
				'secteurActivite' => $secteurActivite,
				'adresse' => $adresse,
				'langue' => $langue,
				'password' => sha1($password)
				
				]);
		}else{
			//Methode call pour sauvegarder les champs remplis par le user, s'il a fait une erreur.
			saveFields();
		}

	}else{
		$errors[] = "Veuillez s'il vous plait remplir tous les champs!";
		saveFields();
	}
}
else
{
	//Methode call pour effacer les champs pre-remplis, si l'utilisateur viens d'arriver sur la page
	clearSaveFields();
}




require("Views/register_view.php");

