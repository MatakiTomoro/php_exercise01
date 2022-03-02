<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

switch ($_GET['operator']) {
    case 'addition':
        $result = $_GET['num1'] + $_GET['num2'];
        $a = '+';
        break;
    case 'subtraction':
        $result = $_GET['num1'] - $_GET['num2'];
        $a = '-';
        break;
    case 'multiplication':
        $result = $_GET['num1'] * $_GET['num2'];
        $a = '*';
        break;
    case 'division':
        $result = $_GET['num1'] / $_GET['num2'];
        $a = '/';
        break;
    default:
        echo '正しい演算子を指定して下さい';
        break;
}