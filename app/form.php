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
	
	$policy = new Policy;

	if ($policy->checkCookie()) {
		die('Spam megelozesi okokbol csak 1 percenkent kuldhetsz uzenetet');
	} else {
		// Elkuldi az emailt
		$mail = new SendMail($cleanData->getValidData()); 
		// Set policy cookie
		$policy->setCookieIfMessageSent();
	}

	// vissszairanyit a kezdo oldalra
	$redirect = new Redirect();

	
} else {
	die('Nincsennek bekuldott adatok');
}




