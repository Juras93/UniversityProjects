<?php
session_start(); 
mysql_connect("127.0.0.1","root","root123");
mysql_select_db("mysql");
function filtruj($zmienna)
{
    if(get_magic_quotes_gpc())
        $zmienna = stripslashes($zmienna); // usuwamy slashe
 
	// usuwamy spacje, tagi html oraz niebezpieczne znaki
    return mysql_real_escape_string(htmlspecialchars(trim($zmienna)));
}
 
if (isset($_POST['signingOperation']))
{
	$login = filtruj($_POST['login']);
	$password = filtruj($_POST['password']);
	$ip = filtruj($_SERVER['REMOTE_ADDR']);
 
	// sprawdzamy czy login i hasło są dobre
	if (mysql_num_rows(mysql_query("SELECT login, haslo FROM uzytkownicy WHERE login = '".$login."' AND haslo = '".md5($password)."';")) > 0)
	{
		// uaktualniamy date logowania oraz ip
		mysql_query("UPDATE `uzytkownicy` SET (`logowanie` = '".time().", `ip` = '".$ip."'') WHERE login = '".$login."';");
 
		$_SESSION['signIn'] = TRUE;
		$_SESSION['login'] = $login;

		echo 'Logowanie...';

		echo '<meta http-equiv="refresh" content="1; URL=../../Pages/index.php">';
	}
	else
	{
		echo 'Logowanie...';

		$_SESSION['signInError'] = "Zly login lub hasło";
		echo '<meta http-equiv="refresh" content="1; URL=../../Pages/sign-in.php">';
	}
}
?>