<?PHP
// Core 

/**
* 
*/
class CoreClass
{
	
	function __construct()
	{
		# code...
	}

		function require_login()
		{
			if(!isset($_SESSION['logon']))
			{
				$_SESSION['redirect_to'] = $_SERVER['REQUEST_URI'];
				header("Location: $url/login");
				exit;
			}
		}


		function limit_text($text, $limit) 
		{
		      if (str_word_count($text, 0) > $limit) 
			{
		          $words = str_word_count($text, 2);
		          $pos = array_keys($words);
		          $text = substr($text, 0, $pos[$limit]) . '.....';
			}
		      return $text;
		}


		// Dommert Enterprises ID Generator
		public function id_gen($min,$max) {

		  $id_length = rand($min,$max);
		  
		  // Allowed Characters
		  $characters = 'BCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		  unset($string);
		    for ($i = 0; $i < $id_length; $i++) {
		      $string .= $characters[rand(0, strlen($characters) - 1)];
		    }
		  return $string;
		  }



		function permalink($str)
		{
			if($str !== mb_convert_encoding( mb_convert_encoding($str, 'UTF-32', 'UTF-8'), 'UTF-8', 'UTF-32') )
				$str = mb_convert_encoding($str, 'UTF-8', mb_detect_encoding($str));
			$str = htmlentities($str, ENT_NOQUOTES, 'UTF-8');
			$str = preg_replace('`&([a-z]{1,2})(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i', '\\1', $str);
			$str = html_entity_decode($str, ENT_NOQUOTES, 'UTF-8');
			$str = preg_replace(array('`[^a-z0-9]`i','`[-]+`'), '-', $str);
			$str = strtolower( trim($str, '-') );
			return $str;
		}

}
?>
