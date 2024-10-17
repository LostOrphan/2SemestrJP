<!DOCTYPE html>
<html>
<head lang="pl">
	<meta charset="utf-8">
</head>
<body>
  <?php
	  session_start();
    if (isset($_SESSION['logTajny'])==true) {
        echo"Druga tajna strona <br>";
		}
  ?>
	<a href="index.html">Strona poczatkowa</a><br>
	<?php
	if(isset($_SESSION['logTajny'])==true){
	echo'<a href="wylogowanieSpecial2.php">Wylogowanie</a><br>';
	}
	?>
</body>
</html>