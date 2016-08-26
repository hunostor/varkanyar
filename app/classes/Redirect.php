<?php 

// define('BASE_URL', 'http://var.app:8000/');

/**
 * Atiranyitas class, meg kell adni az url-t, hogy hova  iranyitson $url
 */
class Redirect
{
	// a felbontott url array
	private $urlParts = [];

	public function __construct($url = null)
	{
		$this->setBaseUrl();
		return header('Location: ' . BASE_URL . $url);
	}

	private function setUrlParts()
	{
		return $this->urlParts = explode('/', $_SERVER['REQUEST_URI']);
	}

	private function setBaseUrl()
	{
		$this->setUrlParts();
		return define('BASE_URL', $this->urlParts[0] . '/');
	}
}