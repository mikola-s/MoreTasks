<?php
// начальные установки
ini_set('error_reporting', -1); //задает отображение всех ошибок
ini_set('display_errors', 1); //вывод ошибок на экран
ini_set('display_startup_errors', 1); //вывод стартовых ошибок
header('Content-Type: text/html; charset=utf-8', false); // добавляет в <head> кодировку utf-8

//для вывода номера задания
function TaskNumber() {
  $FileName = substr(__FILE__, strlen(__DIR__)++);
  if (!defined("TASK_NUMBER")) {
    define ("TASK_NUMBER", (int) substr($FileName, 3, 2));
  }
  return (int) substr($FileName, 0, 2);
}

function TasksName($part) {
  static $counter = TASK_NUMBER;
  echo "<br><b>Задание $part." . ($counter++) . "</b><br>";
}

/*Работа с массивами #6
Создайте массив $arr. Выведите на экран элемент с ключом 'c'.
$arr = ['a'=>1, 'b'=>2, 'c'=>3];*/
echo TasksName(TaskNumber());
$arr = array(
  'a' => 1,
  'b' => 2,
  'c' => 3);
echo '$arr[\'c\'] = ', $arr['c'];

/*Работа с массивами #7
Создайте массив $arr. Найдите сумму элементов этого массива.
$arr = ['a'=>1, 'b'=>2, 'c'=>3];*/
echo TasksName(TaskNumber());
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$counter = 0;
foreach ($arr as $key) {
  $counter += $key;
}
echo $counter;

/*Работа с массивами #8
Создайте массив заработных плат $arr. Выведите на экран зарплату Пети и Коли.
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];*/
echo TasksName(TaskNumber());
$arr = array(
  'Коля'=>'1000$',
  'Вася'=>'500$',
  'Петя'=>'200$');
echo "{$arr['Коля']}<br>";
echo "{$arr['Петя']}<br>";

/*Работа с массивами #9
Создайте ассоциативный массив дней недели. Ключами в нем должны служить
номера дней от начала недели (понедельник - должен иметь ключ 1, вторник - 2 и т.д.).
Выведите на экран текущий день недели.*/
echo TasksName(TaskNumber());
$ArrDay = array(
  '1' => 'понеділок',
  '2' => 'вівторок',
  '3' => 'середа',
  '4' => 'четвер',
  '5' => 'п’ятниця',
  '6' => 'субота',
  '7' => 'неділя');
if (date('w') == 0) {
  echo "{$ArrDay['7']}<br>";
}
else {
  echo "{$ArrDay[date('w')]}<br>";
}

/*Работа с массивами #10
Пусть теперь номер дня недели хранится в переменной $day, например там лежит число 3.
Выведите день недели, соответствующий значению переменной $day. */
echo TasksName(TaskNumber());
$day = (int) date('w');
echo $ArrDay[$day];

?>
