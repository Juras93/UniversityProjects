<?php
mysql_connect("127.0.0.1","root","root123");
mysql_select_db("mysql");

$query = mysql_query("select * from przepisy order by id desc");

$_SESSION['recipes'] = "";

while($rekord = mysql_fetch_array($query))
{
 $_SESSION['recipes'] .= '<div class="recipe"><div class="title">'.$rekord[1].'</div><div class="recipePoints">'.$rekord[4].'</div>
                            <div class="author">Added by:'.$rekord[3].'-'.$rekord[2].'</div></div>'; 
} 
?>
