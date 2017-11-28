<?php

//Verifie que les champs ne sont pas vide
if(!function_exists('not_empty'))
{
	function not_empty($fields = [])
	{
		if(count($fields) != 0)
		{
			foreach ($fields as $field)
			{
				if(empty($_POST[$field]) || trim($_POST[$field]) == "")
				{
					return false;
				}
			}
			return true;
		}
	}
}

//Echapper les caracteres html
if(!function_exists('safeInput')){
	function safeInput($string){
		if($string){
			return strip_tags($string);
		}
	}
}

//Verifie si un champ existe deja dans le BD.
if(!function_exists('is_already_in_use'))
{
	function is_already_in_use($field, $value, $table)
	{
		global $db;

		$q = $db->prepare("SELECT id FROM $table WHERE $field = ?");

		$q->execute([$value]);

		$count = $q->rowcount();

		$q->closeCursor();

		return $count;
	}
}


//Enregistre des champs en session si l'utilisateur se trompe
if(!function_exists('saveFields'))
{
	function saveFields()
	{
		foreach ($_POST as $key => $value)
		{
			if(strpos($key, 'password') == false)
			{
				$_SESSION['input'][$key] = $value;
			}
		}
	}
}

//Recupere les champs sauvegardes
if(!function_exists('getSaveFields'))
{
	function getSaveFields($key)
	{

		if(!empty($_SESSION['input'][$key]))
		{
			return safeInput($_SESSION['input'][$key]);
		}
		else
		{
			return null;
		}	
	}
}


//Supprime les champs garder en session
if(!function_exists('clearSaveFields'))
{
	function clearSaveFields()
	{
		if(isset($_SESSION['input']))
		{
			$_SESSION['input'] = [];
		}
		
	}
}


//Redirection de page
if(!function_exists('redirect'))
{
	function redirect($page)
	{
		header('Location: '. $page);
		exit();
	}
}