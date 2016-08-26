<?php 
require_once 'bootstrap.php';
session_start();

if (!empty($_POST)) {
	$dirtyData = [
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'message' => $_POST['message'],
	];

	$policy = new Policy;

	try {
		$policy->checkCookie();
	} catch (Exception $e) {
		$alert = new Alert('danger', 'Spamvédelmi okokból nem lehet csak 20 percenként új üzenetet küldeni.');
		$_SESSION['message'] = $alert->getErrors();
	}

	try {
		$cleanData = new Validate($dirtyData);
	} catch (Exception $e) {
		$alert = new Alert('danger', 'A megadott emailcím formátuma nem érvényes!');
		$_SESSION['message'] = $alert->getErrors();
	}

	
		if ($policy->checkCookie()) {
			$mail = new SendMail($cleanData->getValidData());
			// Elhelyezi a cookie -t
			$policy->setCookieIfMessageSent();
			$alert = new Alert('success', 'Üzenet elküldve, sikeres kapcsolatfelvétel!');
			$_SESSION['message'] = $alert->getErrors();
			$redirect = new Redirect();
		} else {
			$alert = new Alert('danger', 'Email küldés nem sikerült, kérem lépjen máshogy kapcsolatba velünk!');
			$_SESSION['message'] = $alert->getErrors();
			$redirect = new Redirect();
		}

} else {
	$_SESSION['message'] = '';
}


// require_once 'view/contact_form.php';
$redirect = new Redirect();



