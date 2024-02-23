<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 3. Файлы, подключение кода, Composer</title>
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        pre {
            background-color: aliceblue;
        }

        input {
            margin: 20px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Урок 3. Файлы, подключение кода, Composer</h1>
    <ul>
        <li><a href="../../index.php">На главную</a></li>
    </ul>

    <h3>Задание 1 и 2</h3>
    <p>
        Обработка ошибок. Посмотрите на реализацию функции в файле fwrite-cli.php в исходниках. Может ли пользователь
        ввести некорректную информацию (например, дату в виде 12-50-1548)? Какие еще некорректные данные могут быть
        введены? Исправьте это, добавив соответствующие обработки ошибок.
        Для запуска контейнера:
    <pre>docker run --rm -v ${pwd}/code/les3/hw:/hw php-cli  php /hw/cli-app/index.php</pre>
    </p>
</div>
</body>
</html>