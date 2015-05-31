// Проверка формы авторизации 
function checkForm(form){
    if (! (/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/.test(nameForm.mail.value))){
        alert("Проверьте правильность почты");
        nameForm.mail.focus();
        return false;};
    if (nameForm.pass.value.length < 4){
        alert("parol меньше 5 символов");
        nameForm.pass.focus();
        return false;};
    if (! (/^[a-zA-Z0-9_\-\!]+$/.test(nameForm.pass.value))){
        alert("Пароль должен состоять из букв, цифр, знаков '_', '-', '!'");
        nameForm.pass.focus();
        return false;};
    return true;}
// Проверка формы регистрации 
function validate(){
    var fnik = document.forms["nf"]["nik"].value;
    var fmail = document.forms["nf"]["email"].value;
    var fpass = document.forms["nf"]["pass"].value;
    var fpass1 = document.forms["nf"]["pass1"].value;
    var fname = document.forms["nf"]["name"].value;
    var feducation = document.forms["nf"]["education"].value;
    var fcontacts = document.forms["nf"]["contacts"].value;
    var fexperience = document.forms["nf"]["experience"].value;
    var fabout = document.forms["nf"]["about"].value;
    if (!(/^[а-яА-Яa-zA-Z0-9]+$/).test(fnik)){
        alert("Nik должно состоять только из букв");
        document.forms["nf"]["nik"].focus();
        return false;};
    if (!(/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/.test(fmail))){
        alert("Введен некорректный емейл");
        document.forms["nf"]["email"].focus();
        return false;};
    if (fpass != fpass1){
        alert("Не совпадают пароли. Ведите пароли ещё раз");
        document.forms["nf"]["pass"].focus();
        return false;};
    if (!(/^[а-яА-Яa-zA-Z]+$/).test(fname)){
        alert("ФИО должно состоять только из букв");
        document.forms["nf"]["name"].focus();
        return false;};
    if (!(/^[а-яА-Яa-zA-Z0-9]+$/).test(feducation)){
        alert("Вы можете вводить буквы, цифры, '.' и ','");
        document.forms["nf"]["education"].focus();
        return false;};
    if (!(/^[@ \.,а-яА-Яa-zA-Z0-9]+$/).test(fcontacts)){
        alert("Вы можете вводить буквы, цифры, '.' и ','");
        document.forms["nf"]["contacts"].focus();
        return false;};
    if (!(/^[а-яА-Яa-zA-Z0-9]+$/).test(fexperience)){
        alert("Вы можете вводить буквы, цифры, '.' и ','");
        document.forms["nf"]["experience"].focus();
        return false;};
    if (!(/^[а-яА-Яa-zA-Z0-9_\-\!\\\.\,]+$/).test(fabout)){
        alert("Вы можете вводить буквы, цифры, '.' и ','");
        document.forms["nf"]["about"].focus();
        return false;}
    return true;}
// выведение подсказок при регистрации нового пользователя(русский язык) 
function writeSpanNik(){document.getElementById("span_nik").innerHTML = "<br/>Nik должен состоять только из букв и цифр";}
function cleanSpanNik(){document.getElementById("span_nik").innerHTML = "";}
function writeSpanEmail(){document.getElementById("span_email").innerHTML = "<br/>Email должен состоять только из букв и цифр";}
function cleanSpanEmail(){document.getElementById("span_email").innerHTML = "";}
function writeSpanPass(){document.getElementById("span_pass").innerHTML = "<br/>Пароль должен быть не менее 6 знаков";}
function cleanSpanPass(){document.getElementById("span_pass").innerHTML = "";}
function writeSpanPass1(){document.getElementById("span_pass1").innerHTML = "<br/>Введите пароль ещё раз";}
function cleanSpanPass1(){document.getElementById("span_pass1").innerHTML = "";}
function writeSpanName(){document.getElementById("span_name").innerHTML = "<br/>ФИО должно состоять только из букв";}
function cleanSpanName(){document.getElementById("span_name").innerHTML = "";}
function writeSpanEduc(){document.getElementById("span_educ").innerHTML = "<br/>Укажмте, где вы учились, какие курсы проходили";}
function cleanSpanEduc(){document.getElementById("span_educ").innerHTML = "";}
function writeSpanContacts(){document.getElementById("span_contacts").innerHTML = "<br/>Укажите Ваши телефоны, e-mail, skype, ICQ, страничка в VK";}
function cleanSpanContacts(){document.getElementById("span_contacts").innerHTML = "";}
function writeSpanExp(){document.getElementById("span_exp").innerHTML = "<br/>Последние места Вашей работы";}
function cleanSpanExp(){document.getElementById("span_exp").innerHTML = "";}
function writeSpanAbout(){document.getElementById("span_about").innerHTML = "<br/>Напишите немного о Вас, Ваши интересы, хобби, достижения.";}
function cleanSpanAbout(){document.getElementById("span_about").innerHTML = "";}
// выведение подсказок при регистрации нового пользователя(английский язык) 
function writeSpanNik(){document.getElementById("span_nik_en").innerHTML = "<br/>Nick must contains only letters and numbers";}
function cleanSpanNik(){document.getElementById("span_nik_en").innerHTML = "";}
function writeSpanEmail(){document.getElementById("span_email_en").innerHTML = "<br/>Email must contains only letters and numbers";}
function cleanSpanEmail(){document.getElementById("span_email_en").innerHTML = "";}
function writeSpanPass(){document.getElementById("span_pass_en").innerHTML = "<br/>Password should be not less than 6 signs";}
function cleanSpanPass(){document.getElementById("span_pass_en").innerHTML = "";}
function writeSpanPass1(){document.getElementById("span_pass1_en").innerHTML = "<br/>Enter your password again";}
function cleanSpanPass1(){document.getElementById("span_pass1_en").innerHTML = "";}
function writeSpanName(){document.getElementById("span_name_en").innerHTML = "<br/>Name must contains only letters";}
function cleanSpanName(){document.getElementById("span_name_en").innerHTML = "";}
function writeSpanEduc(){document.getElementById("span_educ_en").innerHTML = "<br/>Type where you studied, which courses you studied";}
function cleanSpanEduc(){document.getElementById("span_educ_en").innerHTML = "";}
function writeSpanContacts(){document.getElementById("span_contacts_en").innerHTML = "<br/>Type your phones, e-mail, skype, ICQ, VK profile";}
function cleanSpanContacts(){document.getElementById("span_contacts_en").innerHTML = "";}
function writeSpanExp(){document.getElementById("span_exp_en").innerHTML = "<br/>Last places of work";}
function cleanSpanExp(){document.getElementById("span_exp_en").innerHTML = "";}
function writeSpanAbout(){document.getElementById("span_about_en").innerHTML = "<br/>Write about you, your interests, hobbies, achievements";}
function cleanSpanAbout(){document.getElementById("span_about_en").innerHTML = "";}