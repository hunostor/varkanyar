<?php 

class Validate
{
	protected $validData;

	public function __construct($dirtyDataArray)
	{	
		if (! $this->validateEmail ($dirtyDataArray['email'])) {
			die('Nem ervenyes az emailcim amit megadtal!');
		}

		foreach ($dirtyDataArray as $key => $value) {
			$this->validData[$key] = $this->removeHtmlTag(($this->removeWhiteSpace($value)));
		}

		return $this->validData;
	}

	protected function removeHtmlTag($dirtyData)
	{
		return strip_tags($dirtyData);
	}

	protected function validateEmail($email)
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailErr = "Invalid email format";
		  return false;
		} else {
			return true;
		}
	}

	protected function removeWhiteSpace($dirtyData)
	{
		return trim($dirtyData);
	}
}