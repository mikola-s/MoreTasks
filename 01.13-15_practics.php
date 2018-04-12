<?php
// начальные установки
ini_set('error_reporting', -1); //задает отображение всех ошибок
ini_set('display_errors', 1); //вывод ошибок на экран
ini_set('display_startup_errors', 1); //вывод стартовых ошибок
header('Content-Type: text/html; charset=utf-8', false); // добавляет в <head> кодировку utf-8

function tasks_number() { //выводит номер задания
  static $counter = 13;
  echo "<br><b>Задание " . ($counter++) . "</b><br>";
}
/* Практика #13
Напишите скрипт, который считает количество секунд
в часе, в сутках, в месяце. .
*/

tasks_number();
$hour = 60*60;
$day = $hour*24;
$month = $day*30;
echo 'в часе ' . $hour . ' секунд;' . "<br>";
echo 'в сутках ' . $day . ' секунд;' . "<br>";
echo 'в месяце ' . $month . ' секунд;' . "<br>";

/* Практика #14
Создайте три переменные - час, минута, секунда.
С их помощью выведите текущее время в формате
'час:минута:секунда'. */

tasks_number();
$second = date("s");
$minute = date("i");
$hour = date("H");
echo "$hour:$minute:$second<br>";

/* Практика #15
Создайте переменную, присвойте ей число.
Возведите это число в квадрат (это значит нужно умножить его само на себя).
Выведите его на экран. Показать решение.*/

tasks_number();
$num = 25;
$num *= $num;
echo $num;

?>
