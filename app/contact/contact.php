<?php
require 'classes/Alert.php';
require 'classes/Validate.php';
require 'classes/Sendmail.php';
require 'classes/Policy.php';


$dirtyDataArray = [
	'name'    => $_POST['name'],
	'email'   => $_POST['email'],
	'message' => $_POST['message'],
];


try {
	// Adatok validalasa
	$validData = new Validate($dirtyDataArray);

	// Spamvedo cookie ellenorzese
	$cookies = new Policy;
	$cookies->checkCookie();

	// Email elkuldese az uzenettel
	$send = new SendMail($validData->getValidData());

	// beallitja a cookiet
	$cookies->setCookieIfMessageSent();

} catch (Exception $e) {
	$alert = new Alert('danger', $e->getMessage());
	echo $alert->getAlert();
	die();
}

// A kuldes rendben sikerult
$alert = new Alert('success', 'Az üzenetedet rendben elküldted!');
echo $alert->getAlert();