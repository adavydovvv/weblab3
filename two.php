<?php
$currentPage = 'two'
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
    <title>Форма обратной связи</title>
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
            <li>
                    <a href="<?php
                    $name = 'Вход в систему';
                    $link = 'two2.php';
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
        </ul>
        </nav>
</header>
    <main>
        <div class="container">
            <h1>Форма обратной связи</h1>
            <form action="https://httpbin.org/post" method="post">

                <div>
                <label for="name">ФИО:</label>
                <input type="text" id="name" name="name" required>
                </div>

                <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                </div>

                <div>
                <label>Откуда узнали о нас:</label>
                </div>
                <div class="radio-buttons">
                    <input type="radio" id="radio1" name="source" value="Реклама">
                    <label for="radio1">Реклама</label>
                    <input type="radio" id="radio2" name="source" value="Социальные сети">
                    <label for="radio2">Социальные сети</label>
                    <input type="radio" id="radio3" name="source" value="Другое">
                    <label for="radio3">Другое</label>
                </div>
        
    
                <div>
                <label for="type">Тип обращения:</label>
                


                <select id="type" name="type">
                    <option value="Жалоба">Жалоба</option>
                    <option value="Предложение">Предложение</option>
                </select>
                </div>


                <div>
                <label for="message">Текст сообщения:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                
                <div>
                <label for="attachments">Вложения:</label>
                <input type="file" id="attachments" name="attachments">
                </div>

                <div>
                <label for="consent">Согласие на обработку персональных данных:</label>
                <input type="checkbox" id="consent" name="consent" required>
                </div>
                
                <button type="submit">Отправить</button>
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
