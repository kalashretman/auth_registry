<?php 
    session_start(); 
    require_once "/sata1/home/users/vunderkin/www/test.webshops.club/action/func.php";
?>
<!DOCTYPE html>
    <html>
    <head>
        <link href="/css/style.css" rel="stylesheet" type="text/css" />
        <title>����� ����������</title>
    </head>
    <body>  
        <div id="top">
            <? top();  ?>
        </div>  
        <div id="content"> 
<?php
    // �������� �� ���������� �����������. ���� ������ ���������������, �� ��������� ���������� � ��� 
	if (!isset($_SESSION['indef'])){
        echo "<h1>����� ���������� �� ����, ����������! ���������������!</h1>";}
    else {get_user();}
?>
        </div>  
    </body>
</html>