<? 
    session_start(); 
    require_once "/sata1/home/users/vunderkin/www/test.webshops.club/action/func.php";
?>
<!DOCTYPE html>
    <html>
    <head> 
        <link href="/css/style.css" rel="stylesheet" type="text/css" />
        <script src="/js/code.js"></script>
    </head>
    <body>  
        <div id="top"> <!--   вывод шапки с входом/регистрацией  -->
            <? top();?>
        </div>               
        <div id="forms_log"> 
        <!--   форма входа  -->
        <form name = "nameForm" method="post" onsubmit="return checkForm(this)" action="http://test.webshops.club/action/login_test.php" >
            <table>
                <tr>
                    <td>
                        ¬аша почта:
                    </td>  
                    <td>          
                        <input name="mail" type="text" maxlength="25" size="20"/>
                    </td>
                </tr>
                <tr>
                    <td>                   
                        ѕароль:
                    </td>
                    <td>
                        <input name="pass" type="password" maxlength="25" size="20"/>
                    </td>
                </tr>
            </table>
            <div id="log">
            <input type="submit" name="login" value="¬ход" /></div> 
        </form>
        </div>
    </body>
</html>