<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 2. Условия, Массивы, циклы, функции</title>
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
    <h1>Урок 2. Условия, Массивы, циклы, функции</h1>
    <ul>
        <li><a href="../../index.php">На главную</a></li>
    </ul>


    <h3>Задание 1 и 2</h3>
    <p>
        Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа,
        третий
        – операция.
        Обязательно использовать оператор return.
    </p>
    <p>
        Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 –
        значения аргументов, $operation – строка с названием операции.
        В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции
        из
        пункта 3) и вернуть полученное значение (использовать switch).
    </p>
    <h4>Решенеие:</h4>
    <?php
    function plus($arg1, $arg2): float|int
    {
        return $arg1 + $arg2;
    }

    function minus($arg1, $arg2): float|int
    {
        return $arg1 - $arg2;
    }

    function multi($arg1, $arg2): float|int
    {
        return $arg1 * $arg2;
    }

    function division($arg1, $arg2): float|int
    {
        return $arg1 / $arg2;
    }


      function mathOperation(float $arg1, float $arg2, $operation):  float|int
    {
        switch ($operation) {
            case '+':
               $result = plus($arg1, $arg2);
                break;
            case  '-':
               $result = minus($arg1, $arg2);
                break;
            case '*':
               $result = multi($arg1, $arg2);
                break;
            case '/':
               $result = division($arg1, $arg2);
                break;
            default:
                $result = 0;
        }
        return $result;
    }

    ?>
<details>
    <summary>Код</summary>
    <pre>
function plus($arg1, $arg2): float|int
    {
        return $arg1 + $arg2;
    }

    function minus($arg1, $arg2): float|int
    {
        return $arg1 - $arg2;
    }

    function multi($arg1, $arg2): float|int
    {
        return $arg1 * $arg2;
    }

    function division($arg1, $arg2): float|int
    {
        return $arg1 / $arg2;
    }


      function mathOperation(float $arg1, float $arg2, $operation):  float|int
    {
        switch ($operation) {
            case '+':
               $result = plus($arg1, $arg2);
                break;
            case  '-':
               $result = minus($arg1, $arg2);
                break;
            case '*':
               $result = multi($arg1, $arg2);
                break;
            case '/':
               $result = division($arg1, $arg2);
                break;
            default:
                $result = 0;
        }
        return $result;
    }
    </pre>
</details>

    <p>
        Результат: <?php echo mathOperation(272, 226, '/'); ?>
    </p>

    <h3>Задание 3</h3>
    <p>
        Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений –
        массивы с названиями городов из соответствующей области.
        Вывести в цикле значения массива, чтобы результат был таким:
        Московская область: Москва, Зеленоград, Клин Ленинградская область: Санкт-Петербург, Всеволожск, Павловск,
        Кронштадт Рязанская область … (названия городов можно найти на maps.yandex.ru).
    </p>
    <h4>Решенеие:</h4>

    <?php
    $regions = [
        'Московская область' => [
            'Москва', 'Зеленоград', 'Клин'
        ],
        'Ленинградская область' => [
            'Всеволожск', 'Павловск',
            'Кронштадт', 'Санкт-Петербург'
        ],
        "Республика Татарстан" => [
            'Казань', 'Набережные Челны', 'Альметьевск'
        ]
    ];
    ?>

    <details>
        <summary>Массив с городами</summary>
        <pre>
        <?php var_dump($regions); ?>
    </pre>
    </details>

    <pre>
                <?php
                echo "<hr>";
                foreach ($regions as $region => $sities) {
                    echo "<strong>" . $region . "</strong><br>";
                    for ($i = 0; $i < count($sities); $i++) {
                        echo $sities[$i];
                        echo '<br>';
                    }
                    echo "<br>";
                }
                echo "<hr>";
                ?>
    </pre>

    <h3>Задание 4</h3>
    <p>
        Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские
        буквосочетания
    <pre> (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).</pre>
    Написать функцию транслитерации строк.
    </pre>

    <?php
    $dict = [
        "а" => "a",
        "б" => "b",
        "в" => "v",
        "г" => "g",
        "д" => "d",
        "е" => "e",
        "ё" => "yo",
        "ж" => "zh",
        "з" => "z",
        "и" => "i",
        "й" => "y",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "o",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "f",
        "х" => "kh",
        "ц" => "c",
        "ч" => "ch",
        "ш" => "sh",
        "щ" => "shh",
        "ь" => "",
        "ы" => "y",
        "ъ" => "",
        "э" => "e",
        "ю" => "yu",
        "я" => "ya",
        "А" => "A",
        "Б" => "B",
        "В" => "V",
        "Г" => "G",
        "Д" => "D",
        "Е" => "E",
        "Ё" => "YO",
        "Ж" => "ZH",
        "З" => "Z",
        "И" => "I",
        "Й" => "Y",
        "К" => "K",
        "Л" => "L",
        "М" => "M",
        "Н" => "N",
        "О" => "O",
        "П" => "P",
        "Р" => "R",
        "С" => "S",
        "Т" => "T",
        "У" => "U",
        "Ф" => "F",
        "Х" => "KH",
        "Ц" => "C",
        "Ч" => "CH",
        "Ш" => "SH",
        "Щ" => "SHH",
        "Ь" => "",
        "Ы" => "Y",
        "Ъ" => "",
        "Э" => "E",
        "Ю" => "YU",
        "Я" => "YA",
        " " => "_"
    ];

    ?>
    <details>
        <summary>Словарь</summary>
        <?php
        echo "<pre>";
        var_dump($dict);
        echo "</pre>";
        ?>
    </details>

    <?php
    /*
if (isset($_POST["translate"])) {
    $translate = rtrim($_POST["translate"]);
    $arr = str_split($translate, 1);
    $arr_result = [];

    foreach ($arr as $key => $value) {
        $mySymbol = $value;
        foreach ($dict as $key => $value) {
            if ($mySymbol == $key) {
                echo "$key" . PHP_EOL;
            }
        }
    }
}
*/
    $translate = '';
    $result = '';
    if (isset($_POST["translate"])) {
        $translate = rtrim($_POST["translate"]);
        $result = strtr($translate, $dict);
    }

    function transliterate($txt)
    {
        global $dict;
        return strtr($txt, $dict);
    }

    ?>
    <form action="index.php" method="post">
        <input type="text" placeholder="Введите строку..." name="translate">
        <button type="submit">Преобразовать</button>
        <br>
        <div class="result"><?php echo transliterate($translate) ?></div>

    </form>

</div>


</body>
</html>