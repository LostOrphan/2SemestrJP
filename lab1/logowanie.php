<?php
  session_start();
  $tekst = $_POST['haslo'];
	$pass1 = 'php';
	if (($tekst==$pass1)) 
	{
		$_SESSION['log'] = true;
		header('location: tajne.php');
  }
  else 
	{
		header('location: formularz.html');
  }
?>