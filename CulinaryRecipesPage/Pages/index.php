<?php
session_start();
mysql_connect("127.0.0.1","root","root123");
mysql_select_db("mysql");
 ?>
<html>
    <link rel="stylesheet" href="../Styles/main.css">
	<link href="../Styles/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../Scripts/Javascript/bootstrap/bootstrap.min.js"></script>

    <head>
    </head>
    <body>
		<div>
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
						<a class="navbar-brand" href="#">Przepisy Wyśmienite</a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="#">Page 2</a></li>
							<li><a href="#">Page 3</a></li>
						</ul>
						<?php
						if(isset($_SESSION['signIn']) && $_SESSION['signIn'] == TRUE){
						?>
						<ul class="nav navbar-nav navbar-right">
							<li><a>Zalogowany jako <?php echo $_SESSION['login']?></a></li>
							<li><a href="../Scripts/Php/logoutOperation.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
						<?php
						} else {
						?>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
							<li><a href="sign-in.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						</ul>
						<?php } ?>
					</div>
				</div>
			</nav>
		</div>

        <div class="container-fluid">
            <div class="row">
				<div class="col-md-2 col-s-12"></div>
				<div class="col-md-3 col-s-12">
					<div class="Authorized">
					<?php
					if(isset($_SESSION['signIn']) && $_SESSION['signIn'] == TRUE){
					?>
						<div>
							<div class="addRecipe">
								<form id="recipeForm" method="POST" action="../Scripts/Php/addNewRecipe.php">
									<div class="form-group">
										<label class="form-check-label">Nazwa potrawy:</label><input class="formControl form-control" name="Potrawa" type="text" placeholder="Wpisz nazwe potrawy">
									</div>
									<div class="form-group">
										<label class="form-check-label">Przepis:</label><textarea class="formControlDesc form-control" name="Przepis" type="text" form="recipeForm"></textarea>
									</div>
									<button class="btn btn-primary" type="submit">Dodaj przepis</button>
								</form>
							</div>
						</div>
					<?php
					} else {
					?>
						<div class="noAuthorized">
							<span><a class="navbar-link" href="sign-in.php">Zaloguj się</a>, aby dodać nowy przepis</span>
						</div>
					<?php } ?>
					</div>
				</div>
				<div class="col-md-5 col-s-12" >
					<div class="scrollable">
						<?php 
						include("../Scripts/Php/getRecipesOperation.php");
						if(isset($_SESSION['recipes']) && $_SESSION['recipes'] != '') {
							echo $_SESSION['recipes'];
						} else {
							echo "<center><label>Brak przepisów</label></center>";
						}
						?>
					</div>
				</div>
				<div class="col-md-2 col-s-12"></div>
            </div>
        </div>
    </body>
</html>