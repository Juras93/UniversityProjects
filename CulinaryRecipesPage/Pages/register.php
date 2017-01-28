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
	<nav class="navbar navbar-inverse">
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
						<li><a href="index.php">Home</a></li>
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
						<li class="active"><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a href="sign-in.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
					<?php } ?>
				</div>
			</div>
		</nav>
        <div class="container-fluid">
            <div class="row">
				<div class="col-md-4 col-s-12">
					
				</div>
				<div class="col-md-3 col-s-12">
				<?php
				if(isset($_SESSION['signIn']) && $_SESSION['signIn'] == TRUE){
				?>
					<div class="Authorized">
						<div class="loggedAs">
							<center><span>Zalogowany jako <?php echo $_SESSION['login']?></span></center>
						</div>
					</div>
				<?php
				} else {
				?>
				<?php
                    if(isset($_SESSION['registreFailed']))
                    {
                        ?>
                        <center><span class="wrongLogin"><?php echo $_SESSION['registreFailed'] ?></span></center>
                        <?php
                        $_SESSION['registreFailed'] = '';
                    }
                    ?>
					<div class="noAuthorized">
						<form method="POST" class="loginForm form-group" action="../Scripts/Php/registerOperation.php">
							<div class='form-group'>
								<label class="form-check-label">Login*:</label><input name="login" class="form-control" type="text" placeholder="Login">
							</div>
							<div class='form-group'>
								<label class="form-check-label">Hasło*:</label><input name="password1" class="form-control" type="password" placeholder="Password">
							</div>
							<div class='form-group'>
								<label class="form-check-label">Powtórz hasło*:</label><input name="password2" class="form-control" type="password" placeholder="Password">
							</div>
							<div class='form-group'>
								<label class="form-check-label">E-mail:</label><input name="email" class="form-control" type="text" placeholder="E-mail">
								<small class="form-text text-muted">* - wymagane</small>
								</div>
							
							<input value="Zarejestruj" name="register" class="btn btn-primary" type="submit">
						</form>
					</div>
				<?php } ?>
				</div>
				<div class="col-md-4 col-s-12">
					
				</div>
            </div>
        </div>
    </body>
</html>