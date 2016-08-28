<?php 

namespace App\Classes;

/**
 * Automatikusan validalja a form felol erkezeo array -be gyujtott adatokat
 */
class Validate
{
	// a valid adatokkal visszatero array
	protected $validData;

	public function __construct($dirtyDataArray)
	{	
		if (! $this->validateEmail ($dirtyDataArray['email'])) {
			throw new Exception('A megadott emailcím formátuma nem érvényes!');			
		}

		foreach ($dirtyDataArray as $key => $value) {
			$this->validData[$key] = $this->removeHtmlTag(($this->removeWhiteSpace($value)));
		}

		return $this->validData;
	}

	/**
	 * kiszedi a html tagokat a stringekbol
	 * @param  string $dirtyData html tagokat is tartalmazhato string
	 * @return string            html tagoktol mentes string
	 */
	protected function removeHtmlTag($dirtyData)
	{
		return strip_tags($dirtyData);
	}

	/**
	 * ellenorzi valoban szabalyos email cimet adtak-e meg
	 * @param  string $email barmi lehet
	 * @return boolen        true ha valid az emailcim
	 *                       false ha nem ervenyes
	 */
	protected function validateEmail($email)
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  return false;
		} else {
			return true;
		}
	}

	/**
	 * torli a string elejerol es a vegerol a szokozoket
	 * @param  string $dirtyData valamilyen sring
	 * @return string            az elejen es a vegen nincsennek szokozok
	 */
	protected function removeWhiteSpace($dirtyData)
	{
		return trim($dirtyData);
	}

    /**
     * Gets the value of validData.
     *
     * @return mixed
     */
    public function getValidData()
    {
        return $this->validData;
    }
}