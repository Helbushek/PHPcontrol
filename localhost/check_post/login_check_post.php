<?php
    print_r($_POST);
    $name = $_POST['username'];
    $password = $_POST['password'];
    echo "$name";
    if(trim($name)=="") {
        echo "Name cannot be empty. <br>" ;
    }
    else if(strlen(trim($name))<=1) {
        echo "Name should be longer than 1 symbol. <br>";
    } else
    if (strlen($password) <= 6) {
        echo "Password should be longer than 6 characters";
    } else {
    $_POST['password'] = md5(trim($password));
    echo "<br> <h1>Your data:</h1>";
    foreach($_POST as $key => $value) {
     echo "<p>$key: $value</p>";
    
    header("Location: ../after_login.php");
    exit();
    }

    }