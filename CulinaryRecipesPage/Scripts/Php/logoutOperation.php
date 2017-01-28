<?php
session_start(); 
mysql_connect("127.0.0.1","root","root123");
mysql_select_db("mysql");
 
if (isset($_SESSION['login']))
{
    $_SESSION['signIn'] = FALSE;
    $_SESSION['login'] = '';

    echo 'Wylogowywanie..';

    echo '<meta http-equiv="refresh" content="1; URL=../../Pages/index.php">';
}
?>