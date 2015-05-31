<?php 
    session_start(); 
    require_once "Z:/home/test.webshops.club/www/action/func.php";
?>
<!DOCTYPE html>
    <html>
    <head>
        <link href="/css/style.css" rel="stylesheet" type="text/css" />
        <title>Добро пожаловать</title>
    </head>
    <body>  
        <div id="top">
            <? top();  ?>
        </div>  
        <div id="content"> 
<?php
    // checking session on existence, if false - please Login or Registry
	if (!isset($_SESSION['indef'])){
        echo "<h1>Добро пожаловать! Войдите или зарегистрируйтесь</h1>";}
    else {get_user();}
?>
        </div>  
    </body>
</html>