<?php
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
 
		$_SESSION['signIn'] = true;
		$_SESSION['login'] = $login;

		echo "zalogowano";
	}
	else echo "Wpisano złe dane.";
}
?>