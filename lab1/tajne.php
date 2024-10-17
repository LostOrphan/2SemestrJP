<!DOCTYPE html>
<html>
<head lang="pl">
	<meta charset="utf-8">
</head>
<body>
  <?php
	  session_start();
    if (isset($_SESSION['log'])==true) {
      echo "Strona z tajnymi danymi dostepnymi<br>";
			echo "tylko po poprawnym zalogowaniu do<br>";
			echo "czasu wylogowania z sesji.<br><br>";
		}
  ?>
	<a href="index.html">Strona poczatkowa</a><br>
	<?php
	if(isset($_SESSION['log'])==true){
	echo'<a href="wylogowanieSpecial.php">Wylogowanie</a><br>';
	}
	?>
</body>
</html>