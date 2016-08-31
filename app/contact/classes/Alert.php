<?php

class Alert
{
	// Hibauzenetek type string
	private $message;

	/**
	 * kiir egy boostrap alert uzenetet http://getbootstrap.com/components/#alerts
	 * @param  string $type a kovetkezo ertekei lehetnek
	 *                      'danger', 'warning', 'info', 'success'
	 * @param  [type] $text az uzenet szovege
	 * @return string       message
	 */
	public function __construct($type, $alert_message)
	{
			$type_array = [
			'danger',
			'warning',
			'info',
			'success',
		];
		if (in_array($type, $type_array)) {
			$this->message = '<div class="alert alert-' . $type . '" role="alert">' . $alert_message  . '</div>';
		} else {
			$this->message = 'Nem jelenik meg megfeleloen az uzenet mert hibas type erteket adtal meg';
		}
	}

	public function getAlert()
	{
		return $this->message;
	}
}