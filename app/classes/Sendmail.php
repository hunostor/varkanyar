<?php

class SendMail
{
	// a cim ahova az emailt kuldi, most meg csak egy cim adhato meg, kesobb bovitheto lesz
	private $to = [
		'poroszkai.attila@gmail.com',
	];

	// az uzenet kuldojenek a neve
	private $name;

	// Email subjectje
	private $subject;

	// Email szovege
	private $message;

	public function __construct($cleanData)
	{
		$this->setName($cleanData);
		$this->setSubject();
		$this->setMessage($cleanData);
		$this->goMail();
	}

	/**
	 * beallitja a $this->name attributumot ami a kuldo neve
	 * @param array $cleanData
	 */
	private function setName($cleanData)
	{
		$this->name = $cleanData['name'];
	}

	/**
	 * Beallitja a $this->subject attributumot
	 */
	private function setSubject()
	{
		$this->subject = $this->name . ' emailt küldött neked';
	}

	/**
	 * beallitja a $this->message attributumot
	 * @param array $cleanData
	 */
	private function setMessage($cleanData)
	{
		$this->message = $cleanData['message'];
	}

	/**
	 * [goMail description]
	 * @return void elkuldi az email mail() funkcioval
	 */
	private function goMail()
	{
		return mail($this->to[0], $this->subject, $this->message);
	}
}