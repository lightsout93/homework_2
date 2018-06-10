<?php
const DATE = '24.02.2016 00:00:00';
echo date("d.m.Y H:i") . '<br>';
$result = time() - strtotime("now") + strtotime(DATE);
echo $result;
