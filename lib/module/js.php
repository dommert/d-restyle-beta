<?PHP
/***************************************************
**		Dommert Enterprises Inc 
**		JavaScript Module
**
***************************************************/

class JavaScript 
{
	
	function __construct()
	{
		# code...
	}


	// JQuery Library v1.10	
	function jquery($a)
	{
		switch ($a) {
			case 'cdn';
			echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>';
				break;

			case '2';
			echo '<script src="' . $GLOBALS['dir'] . '/lib/js/jquery/jquery-2.0.3.min.js"></script>'; 
				break;

			case '1.10';
			echo '<script src="' . $GLOBALS['dir'] . '/lib/js/jquery/jquery-2.0.3.min.js"></script>'; 
				break;

			default:
			echo '<script src="' . $GLOBALS['dir'] . '/lib/js/jquery/jquery.js"></script>';
				break;
		}
	}

		// Jquery UI v1.10
		function jquery_ui($a)
	{
		switch ($a) {
			case 'cdn';
			echo '<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>';
				break;
			
			default:
			echo '<script src="' . $GLOBALS['dir'] . '/lib/js/jquery-ui/jquery-1.10.2.min.js"></script>';
				break;
		}
	}

		// Modernizer v
	function modernizer($a)
	{
		switch ($a) {
			case 'cdn';
			echo '';
				break;
			
			default:
			echo '<script src="' . $GLOBALS['dir'] . '/lib/js/custom.modernizr.js"></script>';
				break;
		}
	}

		// Foundation 5
	function foundation($a)
		{
			switch ($a) 
			{
				case 'cdn';
				echo '';
					break;

				case '1';
				echo '';
					break;
				
				case '2';
				echo '';
					break;
				
				default:
				echo '<script src="' . $GLOBALS['dir'] . '/lib/js/foundation/foundation.min.js"></script>';
				
				break;
			}
		}

}

?>
