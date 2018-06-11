<?php
$file = "text.txt";
$text = 'Hello again!';
if (!file_exists($file)) {
    $result = file_put_contents($file, $text);
    if ($result === false) {
        echo 'Ошибка записи файла.';
    } else {
        echo 'Файл успешно записан.';
    }
} else {
    $result = file_get_contents($file);
    echo 'Содержимое файла ' . $file .': ' . $result;
}
