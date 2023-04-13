<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppDev</title>
    <link rel="icon" href="assets/smartphone.png">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="header_style.css">
</head>

<body>
    <input class="side-menu" type="checkbox" id="side-menu" />
    <div class="header">
        <img src="assets/smartphone.png" alt="logo">
        <div class="logo-flex">
            <h1>AppDev</h1>

            <label class="hamb" for="side-menu"><img src="assets/menu-hambuger.svg" alt=""></label>
            <ul>
                <li>
                    <a href="http://localhost/web_laba4/">
                        <p>Головна</p>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/web_laba4/?page=about_us">
                        <p>Про нас</p>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/web_laba4/?page=portfolio">
                        <p>Портфоліо</p>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/web_laba4/?page=contacts">
                        <p>Контакти</p>
                    </a>
                </li>
                <a href="http://localhost/web_laba4/?page=form">
                    <div class="reg-button">
                        <p><?php
                            $name = $_COOKIE['user'] ?? false;
                            if($name){
                                echo "Вітаємо, $name";
                            }else{
                                echo "Зареєструватись";
                            }
                            ?></p>
                    </div>
                </a>
            </ul>
        </div>
    </div>



</body>

</html>