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
                <a href="loginPage.html">Zaloguj</a>
                <a href="loginPage.html">Zarejestruj</a>
            </div>
            <div class="main">
                <div class="recipes">
                    <!--
                        Here, will be product list generated from database..
                        Should works as scrollable div
                    -->    
                </div>
                <h1>Takie sobie cos</h1>
                <form id="recipeForm">
                    <input class="formControl" type="text" placeholder="Nazwa potrawy"><br />
                    <textarea class="formControl" type="text" form="recipeForm">Przepis</textarea><br />
                    <button type="submit">Dodaj przepis</button>
                </form>
            </div>
            
        </div>
    </body>
</html>