<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><?php 
    if($_SESSION["correct"] == true) {
        echo"<div style=\"background-color: green;\">Success</div>";
    }
    else {
        echo"<div style=\"background-color: red;\">Fail</div>";
    }
    ?></div>
    <form action="check_post/check_contact.php" method="post">
    <input type="text" name="username" value="<?=$_SESSION['user_name']?>" placeholder="Input name"><br>
    <div><?=$_SESSION['error_username']?></div>
    <input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="input email"><br>
    <div><?=$_SESSION['error_email']?></div>
    <input type="text" name="subject" value="<?=$_SESSION['subject']?>" placeholder="Theme of message"><br>
    <div><?=$_SESSION['error_subject']?></div>
    <textarea name="message" value="<?=$_SESSION['message']?>" placeholder="Your message"><?=$_SESSION['message']?></textarea><br>
    <div><?=$_SESSION['error_message']?></div>
    <button type="submit">Send</button>
    </form>
</body>
</html>