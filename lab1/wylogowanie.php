<?php
  session_start();
	unset($_SESSION['log']);
	unset($_SESSION['logTajny']);
	header('location: index.html');
?>