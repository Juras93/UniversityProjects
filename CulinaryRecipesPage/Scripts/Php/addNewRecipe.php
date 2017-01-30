<?php
session_start();
mysql_connect("127.0.0.1","root","root123");
mysql_select_db("mysql");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$query = mysql_query("insert into przepisy values('','".$_POST['Potrawa']."',now(),'".$_SESSION['login']."','".$_POST['Przepis']."')");
}

echo '<meta http-equiv="refresh" content="1; URL=../../Pages/index.php">';
?>