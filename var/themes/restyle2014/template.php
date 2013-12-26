<?PHP 
// Restyle Template

REQUIRE_ONCE dirname(__FILE__).'/etc/config/system.php'; 
?>


<!doctype html>
<html class="no-js" lang="en">

  <head>
  <?PHP incldue = "./head.php"; ?>
  </head>

	<body>
        <header>
              <?PHP incldue = "./header.php"; ?>
        </header>

        <section id="middle">
              <?PHP incldue = "./middle.php"; ?>
        </section>
        
        <footer>
              <?PHP incldue = "./footer.php"; ?>
        </footer>

    <script>
      $(document).foundation();
    </script>
    </body>
</html>
