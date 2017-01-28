<?php
session_start();
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
		if ($password1!='' && ($password1 == $password2)) 
		{
			mysql_query("INSERT INTO `uzytkownicy` (`login`, `haslo`, `email`, `rejestracja`, `logowanie`, `ip`)
				VALUES ('".$login."', '".md5($password1)."', '".$email."', '".time()."', '".time()."', '".$ip."');");
 
			echo 'Tworzenie konta...';

			echo '<meta http-equiv="refresh" content="1; URL=../../Pages/sign-in.php">';
		}
		else
		{
			echo 'Tworzenie konta...';
			$_SESSION['registreFailed'] = 'Hasła nie są takie same';
			echo '<meta http-equiv="refresh" content="1; URL=../../Pages/register.php">';
		}
	}
	else
	{ 
		echo 'Tworzenie konta...';
		$_SESSION['registreFailed'] = 'Podany login już istnieje';
		echo '<meta http-equiv="refresh" content="1; URL=../../Pages/register.php">';
	}
}
?>