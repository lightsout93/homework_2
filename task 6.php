<?php
$file = "text.txt";
if (!file_exists($file)) {
    $fp = fopen($file, "w");
    fclose($fp);
} else {
    echo 'Файл уже существует';
}
