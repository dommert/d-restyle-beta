<?PHP
/********************************************
*	Dommert Enterprises Inc (C) 2013-14		*
*	DUMS Database Module [MySQL]			*
*	Version 1.0								*
*			./lib/module/db.php				*
*********************************************/

// Connect to Database
function db_connect()
{
	$mysqli = $GLOBALS['mysqli'] = new mysqli($GLOBALS['db_info']['addy'], $GLOBALS['db_info']['user'], $GLOBALS['db_info']['password'], $GLOBALS['db_info']['name']);
	if ($mysqli->connect_errno) 
	{
	    ECHO "<BR>Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	//echo $mysqli->host_info . "\n";
			
}

function db_test()
{
	$mysqli = $GLOBALS['mysqli'] = new mysqli($GLOBALS['db_info']['addy'], $GLOBALS['db_info']['user'], $GLOBALS['db_info']['password'], $GLOBALS['db_info']['name']);
	if ($mysqli->connect_errno) 
	{
	    ECHO "<BR>Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	echo $mysqli->host_info . "\n";
}

?>

