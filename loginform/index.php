<?php
    $myemail = "harish@gmail.com";
    $mypass = "Hari";

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $rem = $_POST['remember'];
        if($email == $myemail and $pass == $mypass){
            if(isset($_POST['remember'])){
                setcookie('email', $email, time()+60*60*7);
                setcookieagain("This is again set of cookie");
                header("location:Welcome.php");
            }
        }else{
            echo "Email or Password is Invalid.<br> click here to <a href='login.php'>try again</a>"; 
        }
    }