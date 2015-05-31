<?
    // User logout
    session_start();
    if (isset($_POST['logout'])){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        session_unset();
        session_destroy();
        header('Location: http://test.webshops.club/');}
?>