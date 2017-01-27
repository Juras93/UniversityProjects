<?php
mysql_connect("127.0.0.1","root","root123");
mysql_select_db("mysql");
 
function filtruj($dataToFilter)
{
    if(get_magic_quotes_gpc())
        $dataToFilter = stripslashes($dataToFilter);
 
    return mysql_real_escape_string(htmlspecialchars(trim($dataToFilter)));
}
 
if (isset($_POST['register']))
{
	$login = filtruj($_POST['login']);
	$password1 = filtruj($_POST['password1']);
	$password2 = filtruj($_POST['password2']);
	$email = filtruj($_POST['email']);
	$ip = filtruj($_SERVER['REMOTE_ADDR']);
 
	
	if (mysql_num_rows(mysql_query("SELECT login FROM uzytkownicy WHERE login = '".$login."';")) == 0)
	{
		if ($password1 == $password2) 
		{
			mysql_query("INSERT INTO `uzytkownicy` (`login`, `haslo`, `email`, `rejestracja`, `logowanie`, `ip`)
				VALUES ('".$login."', '".md5($password1)."', '".$email."', '".time()."', '".time()."', '".$ip."');");
 
			echo "Konto zostało utworzone!";
		}
		else echo "Hasła nie są takie same";
	}
	else echo "Podany login jest już zajęty.";
}
?>