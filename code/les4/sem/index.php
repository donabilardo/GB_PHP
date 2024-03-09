<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Основы PHP (семинары)</title>
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
    <h3>Задание 1</h3>
    <p>
        Сделайте класс Сотрудник, в котором будут следующие private поля:
    </p>
    <ul>
        <li>name (имя)</li>
        <li>age (возраст)</li>
        <li>salary (зарплата)</li>
    </ul>
    и следующие public методы:
    <ul>
        <li>setName</li>
        <li>getName</li>
        <li>setAge</li>
        <li>getAge</li>
        <li>setSalary</li>
        <li>getSalary</li>
    </ul>
    <p>Создайте 2 объекта этого класса:</p>
    <ul>
        <li>'Олег', возраст 25, зарплата 1000</li>
        <li>'Мария', возраст 26, зарплата 2000</li>
    </ul>
    <p>Выведите на экран сумму зарплат Олега и Марии. Выведите на экран более
        старшего сотрудника из двух</p>

    <a href="task1/index.php">Решение</a>
</div>


</body>
</html>