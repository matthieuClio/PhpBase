<?php
	
	$url = '';

	if (isset($_GET['url']) )
	{
		$url = explode('/', $_GET['url']);
	}

	// Home page
	if ($url == '')
	{
		require('../src/controller/home.php');
	}

	// Exemple other page
	/*
	else if ($url[0] === 'exemple')
	{
		rrequire('../src/controller/home.php');
	}
	*/
	
	// Error page
	else 
	{
		//require('../src/controller/');
	}
?>