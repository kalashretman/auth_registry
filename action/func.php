<?
    function top(){
        if (!isset($_SESSION['indef'])){
            echo "<a id=\"log\" href=\"http://test.webshops.club/action/login.php\">login</a>
            <a id=\"reg\" href=\"http://test.webshops.club/action/registr.php\">registration</a>
            <div id = \"site\"><a href=\"http://test.webshops.club\">our site</a></div>";}
        else {
            echo "hello, dear ".$_SESSION['indef'].
                 "<form action=\"http://test.webshops.club/action/exit.php\" method=\"post\">
                 <input type = \"submit\" name = \"logout\" value = \"logout\">
                 <div id = \"site\"><a href=\"http://test.webshops.club\">��� ����</a></div>";}}

    class ConnToDb{
        var $user;
		var $pass;
		var $host;
		var $db;
        
        function conn_open(){
            $user = "vunderkin_shop";
    		$pass = "p7m6f2Cuf";
    		$host = "db14.freehost.com.ua";
    		$db = "vunderkin_shop";
            
    		$link = mysql_connect($host, $user, $pass) or die("no connect with DB");
    		return mysql_select_db($db, $link);
        }   
        
        function conn_close(){
            
        }
        
             
    }            

    function connect_to_db(){ //connect to dataBase
        $user = "vunderkin_shop";
		$pass = "p7m6f2Cuf";
		$host = "db14.freehost.com.ua";
		$db = "vunderkin_shop";
				
		$link = mysql_connect($host, $user, $pass) or die("no connect with DB");
		mysql_select_db($db, $link) or die("not select DB");}
        
    function add_user(){ //add to DB new user
        ConnToDb::conn_open();
        $name = trim($_POST["name"]);
        $nik = trim($_POST["nik"]);
        $email = $_POST["email"];
        $pass = md5($_POST["pass"]);
        $pass1 = md5($_POST["pass1"]);
        $birth = $_POST["birth"];
        $city = $_POST["city"];
        $sex = $_POST["sex"];

  // checking text before use

        $education = htmlspecialchars($_POST["education"]);
        $experience = htmlspecialchars($_POST["experience"]);
        $contacts = htmlspecialchars($_POST["contacts"]);
        $about = htmlspecialchars($_POST["about"]);

 // checking words by regular expression

        $check_email = preg_match("|^[-a-z0-9_]+@[-0-9a-z^\.]+\.[a-z]{2,6}$|i", $_POST['email']);
        $check_pass = preg_match("|^[-_0-9a-z!]|i", $pass);
        $types = array('image/gif', 'image/png', 'image/jpeg', 'image/jpg');
        $infoimg = @getimagesize($_FILES['filename']['tmp_name']);
        
        $hdr_err_bgn = "<html><head><link href=\"/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
                          </head><body><div id=\"err\">";
        $hdr_err_end = "<br/><br/><a href=\"http://test.webshops.club/action/registr.php\">Пробовать ещё раз!</a></div></body></html>";
        $hdr_err_email = "Некорректно введен емейл. Пробуйте ввести ещё раз";
        $hdr_err_pass = "Пароли не совпалают. Пробуйте ввести ещё раз";
        $hdr_err_chck_pass = "Пароль должен состоять из букв, цифр, знаков '_', '-', '!'";
        $hdr_err_file = "Недопустимый тип файла. Допустимо загружать только изображения: *.gif, *.png, *.jpg'";
        $hdr_err_size = "Необходимо загружать картинку не более 640*480";
        $hdr_success = "<html><head><link href=\"/css/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
                        </head><body><div id=\"err\">Поздравляем с регистрацией!!!<br/><br/>
                          <a href=\"http://test.webshops.club/action/login.php\">Вход!</a></div></body></html>";

        if ($check_email != 1){echo($hdr_err_bgn.$hdr_err_email.$hdr_err_end);}
        elseif ($pass != $pass1){echo($hdr_err_bgn.$hdr_err_pass.$hdr_err_end);}
        elseif ($check_pass != 1){echo($hdr_err_bgn.$hdr_err_chck_pass.$hdr_err_end);}
        elseif (!in_array($_FILES['filename']['type'], $types)){echo($hdr_err_bgn.$hdr_err_file.$hdr_err_end);}
        elseif ($infoimg[0] > 640 || $infoimg[1] > 480){echo($hdr_err_bgn.$hdr_err_size.$hdr_err_end);}
        // при успешной валидации проводим загрузку файла на сервер и запись данных в БД
        else {
            $file = md5($mail).rand(999,100000);
            $filename = "/sata1/home/users/vunderkin/www/test.webshops.club/images/upload/".$file.".jpg";

            move_uploaded_file($_FILES["filename"]["tmp_name"], $filename);

            $sql = "INSERT INTO test (id, nik, name, email, birth, city, sex, education, experience, contacts, about, file, pass)
                    VALUES ('', '$nik', '$name', '$email', '$birth', '$city', '$sex', '$education', '$experience', '$contacts', '$about', '$file', '$pass')";
            $result = mysql_query($sql) or die("not request to DB");
            echo $hdr_success;
            return $result;
        };}

function authorisation(){ // авторизация клиента
    connect_to_db();

    $user = $_POST['mail'];
    $pass = md5($_POST['pass']);

    $sql = "SELECT * FROM test WHERE email = '$user'";
    $res = mysql_query($sql) or die("Upss");
    $result = mysql_fetch_assoc($res);
    if ($result['pass'] == $pass){
        $_SESSION['indef'] = $result['nik'];
        $_SESSION['name'] = $result['id'];
        header("Location: http://test.webshops.club");}
    else{
        echo "<html><head><link href=\"/css/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
                        </head><body><div id=\"err\">Такой логин с паролем не найдены. Авторизуйтесь.<br/><br/>
                          <a href=\"http://test.webshops.club/action/login.php\">Вернуться</a></div></body></html>";}}

function get_user(){ //выводим данные авторизованного клиента
    connect_to_db();
    $user = $_SESSION['name'];
    $sql = "SELECT * FROM test WHERE id = '$user'";
    $res = mysql_query($sql) or die("Upss");
    $result = mysql_fetch_assoc($res);
    echo("
        <table>
            <tr>
                <td><img src = \"http://test.webshops.club/images/upload/".$result['file'].".jpg\"/></td>
                <td>
                    <table>
                        <tr>
                            <td>
                                ФИО:
                            </td>
                            <td>
                                ".$result['name']."
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Дата рождения:
                            </td>
                            <td>
                                ".$result['birth']."
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Страна:
                            </td>
                            <td>
                                ".$result['city']."
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Пол:
                            </td>
                            <td>
                                ".$result['sex']."
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    Образование:
                </td>
                <td>
                    ".htmlspecialchars_decode($result['education'])."
                </td>
            </tr>
            <tr>
                <td>
                    Опыт работы:
                </td>
                <td>
                    ".htmlspecialchars_decode($result['experience'])."
                </td>
            </tr>
            <tr>
                <td>
                    Контакты:
                </td>
                <td>
                    ".htmlspecialchars_decode($result['contacts'])."
                </td>
            </tr>
            <tr>
                <td>
                    О себе:
                </td>
                <td>
                    ".htmlspecialchars_decode($result['about'])."<br/>
                </td>
            </tr>
        </table>
        ");}
?>