<?php

if(isset($errors) && count($errors) !=0)
{
	foreach ($errors as $error)
	{
		if($error == "Mail d'activation envoye!")
		{
			echo '<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
			echo $error;
			echo '</div>';
		}
		else
		{
			echo '<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
			echo $error.'<br/>';
			echo '</div>';
		}
	}
}