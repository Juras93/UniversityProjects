<html>
    <link rel="stylesheet" href="../Styles/main.css">
    <head>
    </head>
    <body>
        <div class="site">
            <div class="logo">
                <img src="../Graphics/przepisyWysmienite.png"></img>
            </div>
            <div class="navigationBar">
                <a href="index.php">Strona Glowna</a>
            </div>
            <div class="main">
                <div class="leftDiv">
                    <div class="Authorized">
                        <div class="loggedAs">

                        </div>
                        <div class="addRecipe">
                            <form id="recipeForm">
                                <input class="formControl" type="text" placeholder="Nazwa potrawy"><br />
                                <textarea class="formControlDesc" type="text" form="recipeForm">Przepis</textarea><br />
                                <button type="submit">Dodaj przepis</button>
                            </form>
                        </div>
                    </div>
                    <div class="noAuthorized">
                        <form class="loginForm">
                            <input class="loginControl" type="text" placeholder="Login"><br />
                            <input class="loginControl" type="password" placeholder="Password"><br />
                            <button type="submit">Zaloguj</button>
                            <button>Nie masz konta?</button>
                        </form>
                    </div>
                </div>
                <div class="rightDiv">
                    <!--
                        Here, will be product list generated from database..
                        Should works as scrollable div
                    -->    
                </div>
            </div>
        </div>
    </body>
</html>