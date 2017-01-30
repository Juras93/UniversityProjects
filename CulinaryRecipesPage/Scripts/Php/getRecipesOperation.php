<?php
mysql_connect("127.0.0.1","root","root123");
mysql_select_db("mysql");

$query = mysql_query("select * from przepisy order by id desc");

$_SESSION['recipes'] = "";

while($rekord = mysql_fetch_array($query))
{
 $_SESSION['recipes'] .= '<enter><div class="recipe row">
                            <div class="title col-md-12">
                                <h4>Nazwa dania: </h4>
                            </div>
                            <div class="title col-md-12" style="margin-left:30px">
                                <t>'.$rekord[1].
                            '</div>
                             <div class="title col-md-12" >
                                <h4>Sposób przygotowania: </h4>
                            </div>
                            <div class="recipePoints col-md-12" style="margin-left:30px">
                                '.$rekord[4].
                            '</div>
                             <div class="title col-md-12">
                                <h4>Dodane przez:  </h4>
                            </div>
                            <div class="author col-md-12" style="margin-left:30px">
                                '.$rekord[3].'    '.$rekord[2].
                            '</div>
                        </div></center>'; 
} 
?>
