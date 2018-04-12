<?php
// начальные установки
ini_set('error_reporting', -1); //задает отображение всех ошибок
ini_set('display_errors', 1); //вывод ошибок на экран
ini_set('display_startup_errors', 1); //вывод стартовых ошибок
header('Content-Type: text/html; charset=utf-8', false); // добавляет в <head> кодировку utf-8

function tasks_number() { //выводит номер задания
  static $counter = 10;
  echo "<br><b>Задание " . ($counter++) . "</b><br>";
}

/* Символы в строке #10
Создайте переменную $text и присвойте ей значение 'abcde'.
Обращаясь к отдельным символам этой строки выведите на экран символ 'a',
символ 'c', символ 'e'.*/

tasks_number();
$text = 'abcde';
echo "$text[0]<br>";
echo "$text[2]<br>";
echo "$text[4]<br>";

/* Символы в строке #11
Дана произвольная строка, например, 'abcde'.
Поменяйте первую букву (то есть букву 'a') этой строки на '!'.*/

tasks_number();
$text = 'abcde';
$text[0] = '!';
echo "$text<br>";

/* Символы в строке #12
Создайте переменную $num и присвойте ей значение '12345'.
Найдите сумму цифр этого числа. Показать решение.*/

tasks_number();
$num = '12345';

for ($i=0, $sum = 0; $i < strlen($num); $i++) {
  $sum += $num[$i];
  //echo '$i ', $i, ' $num[', $i, '] ', $num[$i], "<br>";
}
echo $sum;
?>d
