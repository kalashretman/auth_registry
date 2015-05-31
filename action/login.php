<? 
    session_start();
    require_once "Z:/home/test.webshops.club/www/action/func.php";
?>
<!DOCTYPE html>
    <html>
    <head> 
        <link href="/css/style.css" rel="stylesheet" type="text/css" />
        <script src="/js/code.js"></script>
        <title></title>
    </head>
    <body>  
        <div id="top"> <!--  login or registration -->
            <? top();?>
        </div>               
        <div id="forms_log"> 
        <!--   Login's form  -->
        <form name = "nameForm" method="post" onsubmit="return checkForm(this)" action="http://test.webshops.club/action/login_test.php" >
            <table>
                <tr>
                    <td>
                        Ваша почта:
                    </td>  
                    <td>          
                        <input name="mail" type="text" maxlength="25" size="20"/>
                    </td>
                </tr>
                <tr>
                    <td>                   
                        Пароль
                    </td>
                    <td>
                        <input name="pass" type="password" maxlength="25" size="20"/>
                    </td>
                </tr>
            </table>
            <div id="log">
            <input type="submit" name="login" value="Login" /></div>
        </form>
        </div>
    </body>
</html>