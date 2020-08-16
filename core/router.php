<?php
	
	$url = '';

	if (isset($_GET['url']) )
	{
		$url = explode('/', $_GET['url']);
	}

	// Home page
	if ($url == '')
	{
		require('../src/controller/front/home.php');
	}

	// LOGIN BACKOFFICE - SET A DEFAULT BACKOFFICE
	// ................

	// Backoffice page
	// else if ($url[0] === 'backoffice' && !empty($_SESSION['pseudoUser']) || $url[0] === 'backoffice' && !empty($_POST['submitConnexion']))
	// {
	// 	require('../src/controller/back/Backoffice.php');
	// }

	// Backoffice connexion page
	// else if ($url[0] === 'backoffice' && empty($_SESSION['pseudoUser']))
	// {
	// 	require('../src/controller/back/BackofficeConnexion.php');
	// }
	
	// Error page
	else 
	{
		//require('../src/controller/');
	}
?>