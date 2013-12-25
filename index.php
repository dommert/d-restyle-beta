<?PHP
/* ==========================================
=     Dommert Enterprises Inc				=
=	(c)2013-2014  DommertEnterprises.com	=
=											=
=  Dommert's User Management System [DUMS] 	=
=	Version 0.1.13							=
=  	Updated: Dec 2013  	Created: Oct 2013 	=     										=
============================================*/
// DEV Version 0.1.13.49.C

/*
Project URL: 
Github:

  Authors:
J. Dommert 		[Engineer]  Dommert@Gmail.com						
K. Williams 	[UI/UX]		K.Williams@LilliMedia.com

*/	
//===========================================================/


// Load Setup
REQUIRE_ONCE dirname(__FILE__).'/etc/config/system.php';   
session_start();

$_SESSION['group'] = array ( 
'admin' => array ( 
      'name' => 'admin',
      'read' => '1' ,
      'write' => '0') ,
  'user' => array ( 
      'name' => 'user',
      'read' => '0' ,
      'write' => '1') ,
  'gid01' => array ( 
      'name' => 'group user 1',
      'read' => '0' ,
      'write' => '1')     
);

echo '<PRE>'; print_r($_SESSION['group']); echo '</PRE>';

$admin = $_SESSION['group']['gid01'];

if ($admin['read'] == '1')
  { echo "You " . $admin['name']  . " have rights! <BR>";}
    ELSE {echo 'you ' . $admin['name'] . ' have no rights <BR>';}

$uri= $GLOBALS['uri'];
echo "Testing..... <BR> Striped URL?: ";
var_dump($uri);
echo '<HR><BR>';

switch ($uri)
{
case "":
  echo "Welcome to the Index Page";
  break;
case "/kameron":
  echo "I feel your name is Kameron......<BR> And you love cock..";
  break;
case "/lillimedia":
  echo "Lillimedia, Oh I heard of you guys. You have Dommert the Magnificient as a partner";
  break;
case "/dommert":
  echo "Dommert The Magnificient";
  break;
case "/jch":
  echo "Im in love with the letter Z";
  break;
case "/dangerzone":
 echo "Welcome to the danger zone!";
 break;

case "/google/skynet":
 echo "Google is SkyNet!!!";
 break;

 case "/google-is-skynet":
 echo "Google is SkyNet and they are going to Kill us All";
 break;

 case "/monique":
 echo "You are so amazing!! <3 Im so happy to met you :)";
 break;




default:
  echo "Default URL <BR>... maybe try some others? ";
}

// Load Display & Content
		// Theme & Template
					//BLOCK & Content


// Display Page







echo "<BR> TEST: " . $core->id_gen(4,5);


//mysqli_close();

echo "<HR> THE END!";

?>