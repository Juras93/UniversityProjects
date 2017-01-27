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
        <div class="container-fluid">
			<div class="row">
				<div class="col-md-3 col-s-12 col-xs-12 logo">
					<img src="../Graphics/przepisyWysmienite.png"></img>
				</div>
				<div class="col-md-9 col-s-12 col-xs-12 navigationBar">
					<a href="index.php">Strona Glowna</a>
					<a href="">O nas</a>
					<a href="">Zakupy</a>
					<a href="">Kontakt</a>
					<a href="">!Praca!</a>
				</div>
			</div>
            <div class="row">
				<div class="col-md-3 col-s-12">
				<?php
				if(isset($_SESSION['signIn'])){
				?>
					<div class="Authorized">
						<div class="loggedAs">
							Zalogowany jako <?php echo $_SESSION['login']?>
						</div>
						<div class="addRecipe">
							<form id="recipeForm">
								<div class="form-group">
									<label class="form-check-label">Nazwa potrawy:</label><input class="formControl form-control" type="text" placeholder="Wpisz nazwe potrawy"><br />
									<label class="form-check-label">Przepis:</label><textarea class="formControlDesc form-control" type="text" form="recipeForm"></textarea><br />
									<button class="btn btn-primary" type="submit">Dodaj przepis</button>
								</div>
							</form>
						</div>
					</div>
				<?php
				} else {
				?>
					<div class="noAuthorized">
						<form method="POST" class="loginForm form-group" action="../Scripts/Php/registerOperation.php">
							<label class="form-check-label">Login:</label><input name="login" class="form-control" type="text" placeholder="Login"><br />
							<label class="form-check-label">Hasło:</label><input name="password1" class="form-control" type="password" placeholder="Password"><br />
                            <label class="form-check-label">Powtórz hasło:</label><input name="password2" class="form-control" type="password" placeholder="Password"><br />
							<label class="form-check-label">E-mail:</label><input name="email" class="form-control" type="text" placeholder="E-mail"><br />
							<input value="Zarejestruj" name="register" class="btn btn-primary" type="submit">
						</form>
					</div>
				<?php } ?>
				</div>
				<div class="col-md-9 col-s-12">
					
				</div>
            </div>
        </div>
    </body>
</html>