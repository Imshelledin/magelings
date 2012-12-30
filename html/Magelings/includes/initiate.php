<?php
	ini_set('display_errors',1); 
 	error_reporting(E_ALL);

	require_once('/var/www/lib/autoloader.php');
	require_once(__DIR__ . '/functions.php');
	require_once(__DIR__ . '/globals.php');


	/*
	 * Open DB Connection
	 */
	Magelings\Entities\DB::connect();

	ini_set('display_errors', 1);
	error_reporting(E_ALL);