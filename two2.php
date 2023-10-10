<?php
$currentPage = 'two2'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Аутентификация</title>
</head>
<body>
<header>
        <nav>
        <ul>
            <li>
                    <a href="<?php
                    $name = 'Главная';
                    $link = 'index.php';
                    $current_page = false;

                    echo $link;

                    ?>">
                    <?php
                    if ($current_page) {
                        echo '<span class="selected_menu">' . $name . '</span>';
                    } else {
                        echo $name;
                    }
                    ?>
                </a>
            </li>
           
            <li>
                    <a href="<?php
                    $name = 'Обратная связь';
                    $link = 'two.php';
                    $current_page = false;

                    echo $link;

                    ?>">
                    <?php
                    if ($current_page) {
                        echo '<span class="selected_menu">' . $name . '</span>';
                    } else {
                        echo $name;
                    }
                    ?>
                </a>
            </li>
            <li>
                    <a href="<?php
                    $name = 'Вход в систему';
                    $link = 'two2.php';
                    $current_page = true;

                    echo $link;

                    ?>">
                    <?php
                    if ($current_page) {
                        echo '<span class="selected_menu">' . $name . '</span>';
                    } else {
                        echo $name;
                    }
                    ?>
                </a>
            </li>
        </ul>
        </nav>
</header>
<main>
    <div class="authentication-container">
        <h1>Вход в систему</h1>

        <div>
            <form action="https://httpbin.org/post" method="post">
            <label for="login">Логин:</label>
            <input type="text" id="login" name="login" required>
        </div>

        <div>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
        </div>


            <label for="remember">Запомнить меня:</label>
            <input type="checkbox" id="remember" name="remember">

        <div>
            <button type="submit">Войти</button>
        </div>
        
        </form>
    </div>
</main>
<footer>
        <p>Контакты</p>
        <p>Телефон: +7(495)-755-75-75<p>
        <p>Почта: land@rover.ru<p>
        <p>&copy; 2023 Jaguar Land Rover</p>
    </footer>
</body>
</html>
