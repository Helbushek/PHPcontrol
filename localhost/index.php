<?php 
    $title = "Login form";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="icon.png">
    <title><?=$title?></title>
    <script src="app.js" defer></script>
</head>
<body>
    <!-- контейнер -->
    <article class="container">
        <!-- внутренний контейнер -->
        <div class="block">

            <section class="block__item block-item">
                <h2 class="block-item__title"> У вас уже есть аккаунт?</h2>
                <button class="block-item__btn signin-btn">Войти</button>
            </section>
            <section class="block__item block-item">
                <h2 class="block-item__title">У вас нет аккаунта?</h2>
                <button class="block-item__btn signup-btn">Зарегистрироваться</button>
            </section>

        </div>

        <!-- блок формы -->
        <div class="form-box">

            <!-- форма входа -->
            <form action="check_post/login_check_post.php" method="post" class="form form_signin">
                <hr width="100%" color="#102670" size="2px"/>
                <h3 class="form__title">Вход</h3>

                <p>
                    <input type="text" name="username" class="form__input" placeholder="Логин">
                </p>
                <p>
                    <input type="password" name="password" class="form__input" placeholder="Пароль">
                </p>
                <p>
                    <input type="submit" class="form__btn"></input>
                </p>
            </form>

            <!-- форма регистрации -->
            <form action="check_post/register_check_post.php" class="form form_signup">
                <hr width="100%" color="#f43648" size="2px"/>
                <h3 class="form__title">Регистрация</h3>

                <p>
                    <input type="login" class="form__input" placeholder="Логин">
                </p>
                <p>
                    <input type="email" class="form__input" placeholder="Email">
                </p>
                <p>
                    <input type="password" class="form__input" placeholder="Пароль">
                </p>
                <img src="C:\Users\Мишок\Downloads\free-icon-lock-5953216.png">
                <p>
                    <input type="password" class="form__input" placeholder="Подтвердите пароль">
                </p>
                <p>
                    <button class="form__btn form__btn_signup">Зарегистрироваться</button>
                </p>
            </form>
        </div>

    </article>
</body>
</html>