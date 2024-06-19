<?php

if($_SERVER['SERVER_NAME'] == 'localhost')
{	
	/* database config*/
	define ('DBNAME', 'profitprodb');
	define ('DBHOST', 'localhost');
	define ('DBUSER', 'postgres');
	define ('DBPASS', 'gwapome2');
	
	define('ROOT', 'http://localhost/ProfitTracker/public');

	// DO NOT DELETE, USED FOR APP LEVEL REFERENCE.
	define('APP', 'http://localhost/ProfitTracker/app/'); 
	
} else
{
	define('ROOT', 'https://www.yourwebsite.com');
}

/** true means show errors **/
define('DEBUG', true);
