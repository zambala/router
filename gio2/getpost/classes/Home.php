<?php
declare(strict_types=1);
namespace classes;

class Home
{
	
	public static function index() : string
	{
		echo "<pre>";
	    var_dump($_GET);
		echo "</pre>";

        echo "<pre>";
		var_dump($_POST);
		echo "</pre>";

		return 'Home';
	}
}