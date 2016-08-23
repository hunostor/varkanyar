<?php 

require 'bootstrap.php';

if (isset($_POST)) {
	// $_POST adatok tombbe gyujtve
	$dirtyData = [
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'message' => $_POST['message'],
	];
}



$cleanData = new Validate($dirtyData);

var_dump($cleanData);
// vissszairanyit a kezdo oldalra
// $redirect = new Redirect();

