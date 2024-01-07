<?php 
    session_start();

    function redirect() {
        header('Location: ../index.php');
        exit();
    }

    $user_name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    
    

    $_SESSION["correct_password"] = true;
    if ($password!=$password2) {
        $_SESSION["correct_password"] = false;
        redirect();
    }
    
    $password = md5($password);
    
    $mysql = new mysqli("localhost", "root", "", "php-mysql");
    $mysql -> query("SET NAMES 'utf8'");

    if ($mysql -> connect_error) {  
        echo 'error number: '. $mysql->connect_errno. "<br>";
        echo "error text: ". $mysql->connect_error;
    }
    else {
        //echo 'Host info: '. $mysql->host_info. '<br>';
        //$mysql->query("DROP TABLE `example`");
        $user_type = 0;
        $mysql->query("INSERT INTO `users` (`name`, `email`, `password`, `type`) VALUES('$user_name', '$email', '$password', $user_type)");
    
    }

    $mysql->close();

