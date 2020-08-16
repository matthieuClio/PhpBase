<?php

	class Home {

		// Property
		// ...

		// Constructor
		// ...

	    // Function
		// ...
	    public function display()
	    {
	    	// Load the view
	    	require('../src/view/frontView/homeView.php');
	    }

	} // End class Home


	// Object
	$objectHome = new Home();

	// Operation
	$objectHome->display();