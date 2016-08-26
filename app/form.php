<?php 

require 'bootstrap.php';

header('Content-Type: text/html; charset=utf-8');

if (!empty($_POST)) {
	// $_POST adatok tombbe gyujtve
	$dirtyData = [
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'message' => $_POST['message'],
	];
	$cleanData = new Validate($dirtyData);
	
	$mail = new SendMail($cleanData->getValidData());

	// vissszairanyit a kezdo oldalra
	$redirect = new Redirect();

	
} else {
	die('Nincsennek bekuldott adatok');
}




