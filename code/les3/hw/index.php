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

    <h3>Задание 1</h3>
    <p>
        Обработка ошибок. Посмотрите на реализацию функции в файле fwrite-cli.php в исходниках. Может ли пользователь
        ввести некорректную информацию (например, дату в виде 12-50-1548)? Какие еще некорректные данные могут быть
        введены? Исправьте это, добавив соответствующие обработки ошибок.
        Для запуска контейнера:
    <pre>docker run --rm -v ${pwd}/code/les3/hw:/hw php-cli  php /hw/cli-app/index.php</pre>
    Версия composer:
    <pre>docker run --rm php-cli composer -v  </pre>
    </p>
    <h3>Задание 2</h3>
    <p>
        Поиск по файлу. Когда мы научились сохранять в файле данные, нам может быть интересно не только чтение, но и
        поиск по нему. Например, нам надо проверить, кого нужно поздравить сегодня с днем рождения среди пользователей,
        хранящихся в формате:
    <pre>Василий Васильев, 05-06-1992</pre>
    И здесь нам на помощь снова приходят циклы. Понадобится цикл, который будет построчно читать файл и искать
    совпадения в дате. Для обработки строки пригодится функция explode, а для получения текущей даты – date.
    </p>
    <h3>Задание 3</h3>
    <p>Удаление строки. Когда мы научились искать, надо научиться удалять конкретную строку. Запросите у пользователя
        имя или дату для удаляемой строки. После ввода либо удалите строку, оповестив пользователя, либо сообщите о том,
        что строка не найдена.</p>
    <h3>Задание 4</h3>
    <p>Добавьте новые функции в итоговое приложение работы с файловым хранилищем.</p>
</div>
</body>
</html>