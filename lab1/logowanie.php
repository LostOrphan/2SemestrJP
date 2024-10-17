<?php
  session_start();
  $tekst = $_POST['haslo'];
	$pass1 = 'php';
	$pass2 = 'html';
	$pass3 = 'css';
	if (($tekst==$pass1) ||($tekst==$pass2) || ($tekst==$pass3) ) 
	{
		$_SESSION['log'] = true;
		if(($tekst==$pass3)){
			$_SESSION['logTajny']=true;
		}
		header('location: index.html');
  }
  else 
	{
		//header('location: formularz.html');
		header('location: index.html');
  }
?>