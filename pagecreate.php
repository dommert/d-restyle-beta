<?
// ADD Page Test
REQUIRE_ONCE dirname(__FILE__).'/etc/config/system.php';  
?>
<!doctype html>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Title: <input type='text' name='title'><BR>
	URL: <?echo$url;?><input type='test' name='uri'><BR>
	Content: <textarea name='content'></textarea><BR>
	<input type="submit" name='submit' value='Submit'>
</FORM>

<?
// Form Logic
if (isset($_POST['submit'])&& !empty($_POST['uri']))
{
	echo "DataSubmit:";
	$fURI = strtolower($_POST['uri']);
	$content = $_POST['content'];
	db_connect();
	// Insert data into URL table
	$sql = "INSERT INTO page (content, title) VALUES ('$content', '$_POST[title]')";
  $mysqli->query($sql);
  $page_id = $mysqli->insert_id;

	// Then Write into Page Table
$sql2 = "INSERT INTO url (pgid,uri) VALUES ('$page_id', '$_POST[uri]')";
$mysqli->query($sql2);
	// Close the Database
$mysqli->close();
	// Finish Message
echo "Done Writing....";
	
}

?>
		
