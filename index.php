<?php
require('functions.php');

echo 'Задание №1<br>';
echo task1(['один', 'два', 'три'], true) . '<br>';

echo '<br>Задание №2<br>';
echo task2('/', 1, 2, 3, 0, 5) . '<br>';

echo '<br>Задание №3<br>';
task3(5, 5);
