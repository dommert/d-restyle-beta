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


echo '<h3>' . $url.$uri. ' Page </h3><hR>'; // Should be page address


 // Connect to Database, Lookup URL request for match
db_connect();
$query = "SELECT * FROM url WHERE uri = '$uri' LIMIT 1";
$result = $mysqli->query($query) 
  OR die($mysqli->error.__LINE__);
$numrow = $result->num_rows;  // Number of Rows returned
  //print_r($result); echo '<BR><BR>'; 
echo $numrow . " rows found <BR>"; 

 // Match then lookup the page.pgid data   
IF ($numrow == 1) 
{
  echo 'URL Data: ';
  $row = $result->fetch_assoc();
  echo "<HEAD> " . $row['head'] . "</HEAD>";
  echo "<BODY> Public: " . $row['public'] . ", PgID: " . $row['pgid'];
  echo "<BR> Page-ID: " . $row['pgid'] . "<BR>";

   // Lookup Page Information
  $query2 = "SELECT * FROM page WHERE pgid = '$row[pgid]'";
  $result2 = $mysqli->query($query2);
    //print_r($result2);
  $row2 = $result2->fetch_assoc(); 
   //Display Page Information
  echo "Title: " . $row2['title'] . 
  "<BR>Content: " . $row2['content']; 
}

ELSE // Else display default message
  { echo "404!! Page Not Found <BR> For Help email You_Suck@Life.com"; }

 // Clear Results
$result->free();
$result2->free();
 // Always Close Connection !
$mysqli->close();
?>