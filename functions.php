<?php

function task1($array = [], $bool = false)
{
    if ($bool) {
        $result = implode(' ', $array);
        return $result;
    }
    foreach ($array as $value) {
        echo "<p>$value</p>";
    }
}

function task2()
{
    $operator = func_get_arg(0);
    $operands = array_slice(func_get_args(), 1);
    switch ($operator) {
        case '+':
            $result = 0;
            foreach ($operands as $value) {
                $result += $value;
            }
            echo $result;
            break;
        case '-':
            //Вычитаем все последующие элементы передаваемого массива из первого элемента
            $result = $operands[0];
            $operands = array_slice($operands, 1);
            foreach ($operands as $value) {
                $result -= $value;
            }
            echo $result;
            break;
        case '*':
            $result = 1;
            foreach ($operands as $value) {
                $result *= $value;
            }
            echo $result;
            break;
        case '/':
            // Делим первый элемент передаваемого массива на все последующие элементы
            $result = $operands[0];
            foreach ($operands as $value) {
                if ($value == 0) {
                    echo 'Деление на ноль';
                    continue (2);
                } else {
                    $result /= $value;
                }
            }
            break;
        default:
            echo 'Неправильный ввод!<br>Введите вторым аргументом знак, обозначающий арифметическое действие,
            <br>которое нужно выполнить со всеми элементами массива';
    }
}

function task3($integer1, $integer2)
{
    if (gettype($integer1) === 'integer' and $integer1 > 0 and gettype($integer2) === 'integer' and $integer2 > 0) {
        echo '<table>';
        for ($i = 1; $i <= $integer1; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $integer2; $j++) {
                echo "<td align='center'>";
                $n = $i * $j;
                echo $n;
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Неправильный ввод! Аргументы должны быть целыми числами и больше 0';
    }
}
