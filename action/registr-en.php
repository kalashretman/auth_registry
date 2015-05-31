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
        <div id="top">
            <? top(); ?>
        </div>  
        <div id="forms">
        <div id="lang">
            <a href="http://test.webshops.club/action/registr-en.php">en</a>|<a href="http://test.webshops.club/action/registr.php">ru</a>
        </div>
         
        <h3>Please, write  about yourself for Sing Up</h3><br />
        
        <form name = "nf" method = "post" onsubmit='return validate()'
                action = "http://test.webshops.club/action/auth.php" enctype="multipart/form-data">
                
         <table id="log_f">
            <tr>
                <td>
                    Your Nik: 
                </td>
                <td>
                    Your Email:
                </td>
            </tr>
            <tr>
                <td>
                    <input class="feeld" name="nik" type="text" maxlength="25" onclick="writeSpanNik()" onblur="cleanSpanNik()"/>
                    <span class="error" id="span_nik_en"></span>
                </td>
                <td>
                    <input class="feeld" name="email" type="text" maxlength="25" onclick="writeSpanEmail()" onblur="cleanSpanEmail()"/>
                    <span class="error" id="span_email_en"></span>
                </td>
            </tr>
            <tr>
                <td>
                    Type password:
                </td>
                <td>   
                    Type password again:
                </td>
            </tr>
            <tr>
                <td> 
                    <input class="feeld" name="pass" type="password" maxlength="25" onclick="writeSpanPass()" onblur="cleanSpanPass()"/>
                    <span class="error" id="span_pass_en"></span>
                </td>
                <td>  
                    <input class="feeld" name="pass1" type="password" maxlength="25" onclick="writeSpanPass1()" onblur="cleanSpanPass1()"/>
                    <span class="error" id="span_pass1_en"></span>
                </td>
            </tr>
            <tr>
                <td>
                    First Name/Last Name:
                </td>
                <td>
                    Birth:
                </td>
            </tr>
            <tr>
                <td>
                    <input class="feeld" name="name" type="text" maxlength="25" onclick="writeSpanName()" onblur="cleanSpanName()"/>
                    <span class="error" id="span_name_en"></span>   
                </td>
                <td>
                    <input class="feeld" name="birth" type="date" maxlength="25"/>
                </td>
            </tr>
            <tr>
                <td>
                    Your Country:
                </td>
                <td>
                    Sex:
                </td>
            </tr>
            <tr>
                <td>
                    <select class="select" name="city">
                        <option>Ukraine</option>
                        <option>Kazakhstan</option>
                        <option>Russia</option>
                        <option>Belorussia</option>
                    </select> 
                </td>
                <td>
                    <input class="radio" name="sex" type="radio" value="sex1"/> M
                    <input class="radio" name="sex" type="radio" value="sex2"/> W
                </td>
            </tr>
            <tr>
                <td>
                    Education:
                </td>
                <td>
                    Contacts:
                </td>
            </tr>
            <tr>
                <td>
                    <textarea name="education" rows="3" onclick="writeSpanEduc()" onblur="cleanSpanEduc()"></textarea>
                    <span class="error" id="span_educ_en"></span>
                </td>
                <td>
                    <textarea name="contacts" rows="3" onclick="writeSpanContacts()" onblur="cleanSpanContacts()"></textarea>
                    <span class="error" id="span_contacts_en"></span>
                </td>
            </tr>
            <tr>
                <td>      
                    Experience:
                </td>
                <td>
                    More about you:
                </td>
            </tr>
            <tr>
                <td>
                    <textarea name="experience" rows="3" onclick="writeSpanExp()" onblur="cleanSpanExp()"></textarea>
                    <span class="error" id="span_exp_en"></span>
                </td>
                <td>
                    <textarea name="about" rows="3" onclick="writeSpanAbout()" onblur="cleanSpanAbout()"></textarea>
                    <span class="error" id="span_about_en"></span>
                </td>
            </tr>
            <tr>
                <td>
                    Your photo:
                </td>
                <td>
                    <input class="file" name="filename" type="file"/>
                </td>
            </tr>
  
            <tr>
                <td>
                </td>
                <td>
                    <input class="reg" type="submit" name="login" value="Sing Up"/>
                </td>
            </tr> 
        </table>
        </form>
        </div>
    </body>
</html>