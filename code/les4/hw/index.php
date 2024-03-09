<?php

require_once 'classes/Book.php';
require_once 'classes/PhysicBook.php';
require_once 'classes/DigitalBook.php';


function debug($obj)
{
    echo "<pre>";
    print_r($obj);
    echo "</pre>";
}


$book1 = new PhysicBook("Мастер и Маргарита", "М.А.Булгаков", 1024, "Самовывоз");
$book2 = new DigitalBook("Война и мир", "Л.Н.Толстой", 960, "https://www.litres.ru/book/lev-tolstoy/voyna-i-mir-kniga-1-171746/");


?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 4. ООП</title>
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        h4 {
            margin-bottom: 5px;
        }

        pre {
            background-color: aliceblue;
        }

        input {
            margin: 20px;
        }

        summary {
            transition: all 0.5s ease-out;
        }

        details:hover {
            cursor: pointer;
        }

        footer {
            margin-bottom: 100px;
        }
    </style>
</head>
<body>

<div class="container">

    <header>
        <h1>Урок 4. ООП</h1>
        <nav>
            <ul>
                <li><a href="../../index.php">На главную</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <p>Для запуска контейнера:
        <pre>docker compose up </pre>
        </p>

        <section>
            <h3>Задание 1</h3>
            <p>
                Придумайте класс, который описывает любую сущность из предметной области библиотеки: книга, шкаф,
                комната и
                т.п.
            </p>
        </section>

        <section>
            <h3>Задание 2</h3>
            <p>
                Опишите свойства классов из п.1 (состояние).
            </p>
        </section>

        <section>
            <h3>Задание 3</h3>
            <p>Опишите поведение классов из п.1 (методы).</p>
        </section>


        <section>
            <h3>Задание 4</h3>
            <p>Придумайте наследников классов из п.1. Чем они будут отличаться?</p>
        </section>

        <section>
            <h3>Задание 5</h3>
            <p>Создайте структуру классов ведения книжной номенклатуры.</p>
            <ul>
                <li>Есть абстрактная книга.</li>
                <li>Есть цифровая книга, бумажная книга.</li>
                <li>У каждой книги есть метод получения на руки.</li>
            </ul>
            <p>У цифровой книги надо вернуть ссылку на скачивание, а у физической – адрес библиотеки, где ее можно
                получить.
                У
                всех книг формируется в конечном итоге статистика по кол-ву прочтений.
                Что можно вынести в абстрактный класс, а что надо унаследовать?</p>
        </section>


        <section>
            <h3>Задание 6</h3>
            <p>Дан код:</p>
            <pre>
        class A {
            public function foo() {
            static $x = 0;
            echo ++$x;
            }
        }

        $a1 = new A();
        $a2 = new A();
        $a1->foo();
        $a2->foo();
        $a1->foo();
        $a2->foo();
        </pre>

            <p>Что он выведет на каждом шаге? Почему?</p>
            <p>Немного изменим п.5</p>
            <pre>
        class A {
            public function foo() {
            static $x = 0;
            echo ++$x;
            }
        }


        class B extends A {
        }

        $a1 = new A();
        $b1 = new B();
        $a1->foo();
        $b1->foo();
        $a1->foo();
        $b1->foo();
    </pre>

            <p>Что он выведет теперь?</p>
        </section>


        <section>
            <h3>Решение:</h3>
            <details>
                <summary>Исходный код:</summary>
                <?php
                debug($book1);
                debug($book2);

                echo $book1->AboutBook();
                echo $book2->AboutBook();
                ?>
            </details>
        </section>
    </main>

    <footer></footer>
</div>
</body>
</html>