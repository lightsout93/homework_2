<?php

function task1($array = [], $bool = false)
{
    if (!$bool) {
        foreach ($array as $value) {
            echo "<p>$value</p>";
        }
    }
    $result = implode($array);
    return $result;
}

function task2()
{
    $operands = func_get_args();
    $operator = $operands[0];
    unset ($operands[0]);
    $result = $operands[1];
    unset ($operands[1]);
    if ($operator == '/') {
        foreach ($operands as $value) {
            if ($value == 0) {
                return 'Деление на ноль';
            }
        }
    }
    switch ($operator) {
        case '+':
            foreach ($operands as $value) {
                $result += $value;
            }
            break;
        case '-':
            foreach ($operands as $value) {
                $result -= $value;
            }
            break;
        case '*':
            foreach ($operands as $value) {
                $result *= $value;
            }
            break;
        case '/':
            foreach ($operands as $value) {
                $result /= $value;
            }
            break;
        default:
            echo 'Неправильный ввод!<br>Введите вторым аргументом знак, обозначающий арифметическое действие,
            <br>которое нужно выполнить со всеми элементами массива';
    }
    return $result;
}

function task3($integer1, $integer2)
{
    if ($integer1 < 1 or $integer2 < 1) {
        echo 'Неправильный ввод! Аргументы должны быть целыми числами и больше 0';
        return null;
    }
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
}
