// �������� ����� ����������� 
function checkForm(form){
    if (! (/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/.test(nameForm.mail.value))){
        alert("��������� ������������ �����");
        nameForm.mail.focus();
        return false;};        
    if (nameForm.pass.value.length < 4){
        alert("parol ������ 5 ��������");
        nameForm.pass.focus();
        return false;};   
    if (! (/^[a-zA-Z0-9_\-\!]+$/.test(nameForm.pass.value))){
        alert("������ ������ �������� �� ����, ����, ������ '_', '-', '!'");
        nameForm.pass.focus();
        return false;};     
    return true;}
// �������� ����� ����������� 
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
    if (!(/^[�-��-�a-zA-Z0-9]+$/).test(fnik)){
        alert("Nik ������ �������� ������ �� ����");
        document.forms["nf"]["nik"].focus();
        return false;};
    if (!(/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/.test(fmail))){
        alert("������ ������������ �����");
        document.forms["nf"]["email"].focus();
        return false;};                     
    if (fpass != fpass1){
        alert("�� ��������� ������. ������ ������ ��� ���");
        document.forms["nf"]["pass"].focus();
        return false;};        
    if (!(/^[�-��-�a-zA-Z]+$/).test(fname)){
        alert("��� ������ �������� ������ �� ����");
        document.forms["nf"]["name"].focus();
        return false;};        
    if (!(/^[�-��-�a-zA-Z0-9]+$/).test(feducation)){
        alert("�� ������ ������� �����, �����, '.' � ','");
        document.forms["nf"]["education"].focus();
        return false;};         
    if (!(/^[@ \.,�-��-�a-zA-Z0-9]+$/).test(fcontacts)){
        alert("�� ������ ������� �����, �����, '.' � ','");
        document.forms["nf"]["contacts"].focus();
        return false;};         
    if (!(/^[�-��-�a-zA-Z0-9]+$/).test(fexperience)){
        alert("�� ������ ������� �����, �����, '.' � ','");
        document.forms["nf"]["experience"].focus();
        return false;};         
    if (!(/^[�-��-�a-zA-Z0-9_\-\!\\\.\,]+$/).test(fabout)){
        alert("�� ������ ������� �����, �����, '.' � ','");
        document.forms["nf"]["about"].focus();
        return false;}        
    return true;}
// ��������� ��������� ��� ����������� ������ ������������(������� ����) 
function writeSpanNik(){document.getElementById("span_nik").innerHTML = "<br/>Nik ������ �������� ������ �� ���� � ����";}
function cleanSpanNik(){document.getElementById("span_nik").innerHTML = "";} 
function writeSpanEmail(){document.getElementById("span_email").innerHTML = "<br/>Email ������ �������� ������ �� ���� � ����";}
function cleanSpanEmail(){document.getElementById("span_email").innerHTML = "";}
function writeSpanPass(){document.getElementById("span_pass").innerHTML = "<br/>������ ������ ���� �� ����� 6 ������";}
function cleanSpanPass(){document.getElementById("span_pass").innerHTML = "";}
function writeSpanPass1(){document.getElementById("span_pass1").innerHTML = "<br/>������� ������ ��� ���";}
function cleanSpanPass1(){document.getElementById("span_pass1").innerHTML = "";}
function writeSpanName(){document.getElementById("span_name").innerHTML = "<br/>��� ������ �������� ������ �� ����";}
function cleanSpanName(){document.getElementById("span_name").innerHTML = "";} 
function writeSpanEduc(){document.getElementById("span_educ").innerHTML = "<br/>�������, ��� �� �������, ����� ����� ���������";}
function cleanSpanEduc(){document.getElementById("span_educ").innerHTML = "";} 
function writeSpanContacts(){document.getElementById("span_contacts").innerHTML = "<br/>������� ���� ��������, e-mail, skype, ICQ, ��������� � VK";}
function cleanSpanContacts(){document.getElementById("span_contacts").innerHTML = "";}
function writeSpanExp(){document.getElementById("span_exp").innerHTML = "<br/>��������� ����� ����� ������";}
function cleanSpanExp(){document.getElementById("span_exp").innerHTML = "";} 
function writeSpanAbout(){document.getElementById("span_about").innerHTML = "<br/>�������� ������� � ���, ���� ��������, �����, ����������.";}
function cleanSpanAbout(){document.getElementById("span_about").innerHTML = "";} 
// ��������� ��������� ��� ����������� ������ ������������(���������� ����) 
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