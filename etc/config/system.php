<?PHP
/********************************************
*	Dommert Enterprises Inc (C) 2013-14		*
*	DUMS - System Configs 					*
*	Version 1.0		Updated: Dec 2103		*
*											*
*********************************************/


 // ********** Site's URL 
// Default: $_SERVER['SERVER_NAME']
	// 'http://www.yoursite.com'
$GLOBALS['url'] = $_SERVER['SERVER_NAME'];
  $url = $GLOBALS['url'];
 // *********** Directory  
// Default: $_SERVER['DOCUMENT_ROOT'] or dirname(__FILE__);
	//  '/dir/site/www' or 'C:/site/www'
$GLOBALS['dir'] = $_SERVER['DOCUMENT_ROOT'];
  $dir = $GLOBALS['dir'];
// *********** Pretty URL 
$GLOBALS['uri'] = strtolower(rtrim($_SERVER['REQUEST_URI'], '/'));
  $uri = $GLOBALS['uri'];
// *********** Template 
$GLOBALS['template'] = $dir . "/var/themes";
  $template = $GLOBALS['template'];

// ********** Site Config

		// Admin Configs
$GLOBALS['admin'] = 
array(
	'name' => 'admin name',  // Admin's Name
	'email' => 'email@domain.com',  // Admin Email
	'title' => 'System Admin',  // Job Title
	'misc' => '',  //Misc Data
	'passwd' => 'G0dM0de!',  // SU Admin Password (CHANGE!!)
	'salt' => 'RestyleSource salt', // Salt (once set dont change)
	'login_attempts' => '4' ,// Admin Login Attempts
);



		// Website Configs
$GLOBALS['site'] =
array(
	'title' => 'REstyleSource | ', // Website Title
	'company' => 'REstyleSource', // Company / Owner Name
	'author' => 'Dommert', // Website Author / Creator
	'description' => 'Short site description can go here', // Short Site Description
	'language' => 'EN', // Sites Default Language
	);


// ************	Database Info
$db_info == $GLOBALS['db_info'] = array(
	'addy' => 'localhost', // Database Address (default: localhost)
	'user' => 'dev', // Database Username
	'password' => 'D3vsql', // Username Password
	'name' => 'test', // Database Name
);

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++

// ************   LIBRARY MODULES    ******************


// ************ Database Module
		REQUIRE_ONCE $dir.'/lib/module/db.php';
// ************ Core Modules 
		REQUIRE_ONCE $dir.'/lib/module/core.php';
// ************ JavaScript Libraries
		REQUIRE_ONCE $dir.'/lib/module/js.php';



// ********** Load Config Token
unset($sys_config);
	$sys_config = '1';

// *********** Initialize Classes & Modules *************

	// Classes - Modules
	$js = NEW JavaScript();  // JavaScript Library
	//$dums = NEW UserManagementSystem(); // DUMS
	$core = NEW CoreClass(); // Core Class Routines


	// Session 
			//Uniques

	// Logs

	// Permissions

	// User Management System

	// CMS

// Boot

// Redirect


?>
