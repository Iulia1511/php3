<!DOCTYPE html> 
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Веб-страница</title>
    <style>
        /* Стили для хедера, навигации, контента и футера */
        header, footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav {
            background-color: #555;
            color: white;
            padding: 5px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
        }
        main {
            padding: 20px;
        }
        section {
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        img {
            width: 300px; /* Установите здесь нужную ширину */
            height: auto; /* Автоматическая высота для поддержки соотношения сторон */
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Заголовок</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </nav>
    <main>
        <section>
        
            <?php // 1.5
            // Задаем путь к папке с изображениями
            $dir = 'image/';

            // Сканируем содержимое директории
            $files = scandir($dir);

            // Если нет ошибок при сканировании
            if ($files !== false) {
                for ($i = 0; $i < count($files); $i++) {
                    // Пропускаем текущий каталог и родительский
                    if (($files[$i] != ".") && ($files[$i] != "..")) {
                        // Получаем путь к изображению
                        $path = $dir . $files[$i];

                        // Выводим картинку на экран
                        echo "<img src=\"$path\" alt=\"{$files[$i]}\">";
                    }
                }
            }
            ?>
        </section>
    </main>
    <footer>
        <p>Copyright &copy; 2024</p>
    </footer>
</body>
</html>
