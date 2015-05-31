<?
session_start();
require_once "Z:/home/test.webshops.club/www/action/func.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="/css/style.css" rel="stylesheet" type="text/css" />

    <script src="/js/code.js"></script>
</head>
<body>
<div id="top">
    <? top(); ?>
</div>
<div id="forms">
    <div id="lang">
        <a href="http://test.webshops.club/action/registr-en.php">en</a>|<a href="http://test.webshops.club/action/registr.php">ru</a>
    </div>

    <h3>Введите информацию о себе для регистрации</h3><br />

    <form name = "nf" method = "post" onsubmit='return validate()'
          action = "http://test.webshops.club/action/auth.php" enctype="multipart/form-data">

        <table id="log_f">
            <tr>
                <td>
                    Ваш ник на сайте:
                </td>
                <td>
                    Ваша почта:
                </td>
            </tr>
            <tr>
                <td>
                    <input class="feeld" name="nik" type="text" maxlength="25" onclick="writeSpanNik()" onblur="cleanSpanNik()"/>
                    <span class="error" id="span_nik"></span>
                </td>
                <td>
                    <input class="feeld" name="email" type="text" maxlength="25" onclick="writeSpanEmail()" onblur="cleanSpanEmail()"/>
                    <span class="error" id="span_email"></span>
                </td>
            </tr>
            <tr>
                <td>
                    Введите пароль:
                </td>
                <td>
                    Введите пароль ещё раз:
                </td>
            </tr>
            <tr>
                <td>
                    <input class="feeld" name="pass" type="password" maxlength="25" onclick="writeSpanPass()" onblur="cleanSpanPass()"/>
                    <span class="error" id="span_pass"></span>
                </td>
                <td>
                    <input class="feeld" name="pass1" type="password" maxlength="25" onclick="writeSpanPass1()" onblur="cleanSpanPass1()"/>
                    <span class="error" id="span_pass1"></span>
                </td>
            </tr>
            <tr>
                <td>
                    ФИО:
                </td>
                <td>
                    Дата рождения:
                </td>
            </tr>
            <tr>
                <td>
                    <input class="feeld" name="name" type="text" maxlength="25" onclick="writeSpanName()" onblur="cleanSpanName()"/>
                    <span class="error" id="span_name"></span>
                </td>
                <td>
                    <input class="feeld" name="birth" type="date" maxlength="25"/>
                </td>
            </tr>
            <tr>
                <td>
                    Страна проживания:
                </td>
                <td>
                    Пол:
                </td>
            </tr>
            <tr>
                <td>
                    <select class="select" name="city">
                        <option>Украина</option>
                        <option>Казахстан</option>
                        <option>Росиия</option>
                        <option>Белорусия</option>
                    </select>
                </td>
                <td>
                    <input class="radio" name="sex" type="radio" value="sex1"/> М
                    <input class="radio" name="sex" type="radio" value="sex2"/> Ж
                </td>
            </tr>
            <tr>
                <td>
                    Образование:
                </td>
                <td>
                    Контакты:
                </td>
            </tr>
            <tr>
                <td>
                    <textarea name="education" rows="3" onclick="writeSpanEduc()" onblur="cleanSpanEduc()"></textarea>
                    <span class="error" id="span_educ"></span>
                </td>
                <td>
                    <textarea name="contacts" rows="3" onclick="writeSpanContacts()" onblur="cleanSpanContacts()"></textarea>
                    <span class="error" id="span_contacts"></span>
                </td>
            </tr>
            <tr>
                <td>
                    Опыт работы:
                </td>
                <td>
                    Дополнительные сведения о себе:
                </td>
            </tr>
            <tr>
                <td>
                    <textarea name="experience" rows="3" onclick="writeSpanExp()" onblur="cleanSpanExp()"></textarea>
                    <span class="error" id="span_exp"></span>
                </td>
                <td>
                    <textarea name="about" rows="3" onclick="writeSpanAbout()" onblur="cleanSpanAbout()"></textarea>
                    <span class="error" id="span_about"></span>
                </td>
            </tr>
            <tr>
                <td>
                    Ваше фото:
                </td>
                <td>
                    <input class="file" name="filename" type="file"/>
                </td>
            </tr>

            <tr>
                <td>
                </td>
                <td>
                    <input class="reg" type="submit" name="login" value="Зарегистрироваться"/>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>