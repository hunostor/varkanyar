<?php 

/**
 * Automatikusan validalja a form felol erkezeo array -be gyujtott adatokat
 */
class Validate
{
	// a valid adatokkal visszatero array
	protected $validData;

	public function __construct($dirtyDataArray)
	{	
		foreach ($dirtyDataArray as $key => $value) {
			$this->checkEmptyField($key, $value);
			$this->validData[$key] = $this->removeHtmlTag(($this->removeWhiteSpace($value)));
		}

		$this->validateEmail($dirtyDataArray['email']);

		return $this->validData;
	}

	/**
	 * ures value erteknel dob egy Exception -t, az ures mezo nevevel
	 * @param  string $key   form adat kulcsa
	 * @param  string $value form adata
	 * @return void          Exceptiont dob
	 */
	protected function checkEmptyField($key, $value)
	{
		if ($value == '') {
			throw new Exception($key . ' mezőt is ki kell tölteni!');
			return;
		}
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
	 * @return Exception     throw E. ha nem valid
	 */
	protected function validateEmail($email)
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  throw new Exception('A megadott emailcím formátuma nem érvényes!');
		  return;
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