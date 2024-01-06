<?php
    session_start();

    
    unset($_SESSION["user_name"]);
    unset($_SESSION["email"]);
    unset($_SESSION["subject"]);
    unset($_SESSION["message"]);
    unset($_SESSION["correct"]);

    unset($_SESSION["error_username"]);
    unset($_SESSION["error_email"]);
    unset($_SESSION["error_subject"]);
    unset($_SESSION["error_message"]);

    function redirect() {
        header('Location: ../form.php');
        exit();
    }

    $user_name = htmlspecialchars($_POST["username"]);
    $from = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
    
    $_SESSION['user_name'] = $user_name;
    $_SESSION['email'] = $from;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;

    if(strlen($user_name) <=1) {
        $_SESSION['error_username'] = "Input correct name";
        redirect();
    }
    else if(strlen($from)<5 || strpos($from, "@") == false) {
        $_SESSION['error_email'] = "Input correct email";
        redirect();
    }
    else if(strlen($subject) <=5) {
        $_SESSION['error_subject'] = "Input correct message theme";
        redirect();
    }
    else if(strlen($message) <= 15)  {
        $_SESSION['error_message'] = "Input longer message";
        redirect();
    }
    else {
        $_SESSION["correct"] = true;
        redirect();
    }

    
 