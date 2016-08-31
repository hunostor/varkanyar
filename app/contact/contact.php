<?php
require 'classes/Alert.php';
require 'classes/Validate.php';


$dirtyDataArray = [
	'name'    => $_POST['name'],
	'email'   => $_POST['email'],
	'message' => $_POST['message'],
];


try {
	$validData = new Validate($dirtyDataArray);
} catch (Exception $e) {
	$alert = new Alert('danger', $e->getMessage());
	echo $alert->getAlert();
	die();
}


// A kuldes rendben sikerult
$alert = new Alert('success', 'Az üzenetedet rendben elküldted!');
echo $alert->getAlert();