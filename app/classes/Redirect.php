<?php 

define('BASE_URL', 'http://var.app:8000/');

/**
 * Atiranyitas class, meg kell adni az url-t, hogy hova  iranyitson $url
 */
class Redirect
{
	public function __construct($url = null)
	{
		return header('Location: ' . BASE_URL . $url);
	}
}