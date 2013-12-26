<?
// ADD Page Test
REQUIRE_ONCE dirname(__FILE__).'/etc/config/system.php';  

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
		
<!DOCTYPE html>



<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8">

<title>wysihtml5 - Advanced Demo</title>

<style>
  body {
    font-family: Verdana;
    font-size: 11px;
  }
  
  h2 {
    margin-bottom: 0;
  }
  
  small {
    display: block;
    margin-top: 40px;
    font-size: 9px;
  }
  
  small,
  small a {
    color: #666;
  }
  
  a {
    color: #000;
    text-decoration: underline;
    cursor: pointer;
  }
  
  #toolbar [data-wysihtml5-action] {
    float: right;
  }
  
  #toolbar,
  textarea {
    width: 850px;
    padding: 5px;
    -webkit-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  
  textarea {
    height: 280px;
    border: 2px solid green;
    font-family: Verdana;
    font-size: 11px;
  }
  
  textarea:focus {
    color: black;
    border: 2px solid black;
  }
  
  .wysihtml5-command-active {
    font-weight: bold;
  }
  
  [data-wysihtml5-dialog] {
    margin: 5px 0 0;
    padding: 5px;
    border: 1px solid #666;
  }
  
  a[data-wysihtml5-command-value="red"] {
    color: red;
  }
  
  a[data-wysihtml5-command-value="green"] {
    color: green;
  }
  
  a[data-wysihtml5-command-value="blue"] {
    color: blue;
  }
</style>

<h1>wysihtml5 - Advanced Editor Example</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Title: <input type='text' name='title'><BR>
	URL: <?echo$url;?><input type='test' name='uri'><BR>
	<!-- Content: <textarea name='content'></textarea><BR> -->
	

  <div id="toolbar" style="display: none;">
    <a data-wysihtml5-command="bold" title="CTRL+B">bold</a> |
    <a data-wysihtml5-command="italic" title="CTRL+I">italic</a> |
    <a data-wysihtml5-command="createLink">insert link</a> |
    <a data-wysihtml5-command="insertImage">insert image</a> |
    <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1">h1</a> |
    <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2">h2</a> |
    <a data-wysihtml5-command="insertUnorderedList">insertUnorderedList</a> |
    <a data-wysihtml5-command="insertOrderedList">insertOrderedList</a> |
    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red">red</a> |
    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green">green</a> |
    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue">blue</a> |
    <a data-wysihtml5-command="insertSpeech">speech</a>
    <a data-wysihtml5-action="change_view">switch to html view</a>
    
    <div data-wysihtml5-dialog="createLink" style="display: none;">
      <label>
        Link:
        <input data-wysihtml5-dialog-field="href" value="http://">
      </label>
      <a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
    </div>
    
    <div data-wysihtml5-dialog="insertImage" style="display: none;">
      <label>
        Image:
        <input data-wysihtml5-dialog-field="src" value="http://">
      </label>
      <label>
        Align:
        <select data-wysihtml5-dialog-field="className">
          <option value="">default</option>
          <option value="wysiwyg-float-left">left</option>
          <option value="wysiwyg-float-right">right</option>
        </select>
      </label>
      <a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
    </div>
    
  </div>
  <textarea id="textarea" placeholder="Enter text ..." name="content"></textarea>
  <br><input type="reset" value="Reset form!"><input type="submit" name='submit' value='Submit'>
</form>

<h2>Events:</h2>
<div id="log"></div>

<small>powered by <a href="https://github.com/xing/wysihtml5" target="_blank">wysihtml5</a>.</small>
<script src="/wysi/simple.js"></script>
<script src="/wysi/wysihtml5-0.3.0.js"></script>
<script>
  var editor = new wysihtml5.Editor("textarea", {
    toolbar:      "toolbar",
    stylesheets:  "/wysi/css/stylesheet.css",
    parserRules:  wysihtml5ParserRules
  });
  
  var log = document.getElementById("log");
  
  editor
    .on("load", function() {
      log.innerHTML += "<div>load</div>";
    })
    .on("focus", function() {
      log.innerHTML += "<div>focus</div>";
    })
    .on("blur", function() {
      log.innerHTML += "<div>blur</div>";
    })
    .on("change", function() {
      log.innerHTML += "<div>change</div>";
    })
    .on("paste", function() {
      log.innerHTML += "<div>paste</div>";
    })
    .on("newword:composer", function() {
      log.innerHTML += "<div>newword:composer</div>";
    })
    .on("undo:composer", function() {
      log.innerHTML += "<div>undo:composer</div>";
    })
    .on("redo:composer", function() {
      log.innerHTML += "<div>redo:composer</div>";
    });
</script>