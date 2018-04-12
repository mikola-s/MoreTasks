<?php
// начальные установки
ini_set('error_reporting', -1); //задает отображение всех ошибок
ini_set('display_errors', 1); //вывод ошибок на экран
ini_set('display_startup_errors', 1); //вывод стартовых ошибок
header('Content-Type: text/html; charset=utf-8', false); // добавляет в <head> кодировку utf-8

//для вывода номера задания
function TaskNumber() {
  $FileName = substr(__FILE__, strlen(__DIR__) + 1);
  if (!defined("TASK_NUMBER")) {
    define("TASK_NUMBER", (int) substr($FileName, 3, 2));
  }
  return (int) substr($FileName, 0, 2);
}

function TasksName($part) {
  static $counter = TASK_NUMBER;
  echo "<br><b>Задание $part." . ($counter++) . "</b><br>";
}

/*Работа с условными операторами #09
Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'.
Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'.*/
echo TasksName(TaskNumber()); //задание №

$arr = array(1, 3, -3, 0, null, true, '', '0');
foreach ($arr as $a) {
  #для красоты
  $quotes = gettype($a) == 'string' ? "'" : null;
  echo 'при $a = ' . "$quotes$a$quotes " . 'условие ($a — пустая) — ';
  if (empty($a)) {
    echo "верно<br>";
  } else {
    echo "неверно<br>";
  }
}

/*Работа с условными операторами #10
Если переменная $a НЕ пустая, то выведите 'Верно', иначе выведите 'Неверно'. */
echo TasksName(TaskNumber()); //задание №

foreach ($arr as $a) {
  $quotes = gettype($a) == 'string' ? "'" : null;
  echo 'при $a = ' . "$quotes$a$quotes " . 'условие ($a — НЕ пустая) — ';
  if (!empty($a)) {
    echo "верно<br>";
  } else {
    echo "неверно<br>";
  }
}

/*Работа с условными операторами #11
Если переменная $a существует, то выведите 'Верно', иначе выведите 'Неверно'.
Проверьте работу скрипта при $a, равном 3 и null. Показать решение.*/
echo TasksName(TaskNumber()); //задание №
$arr = array(3, null);
foreach ($arr as $a) {
  $quotes = gettype($a) == 'string' ? "'" : null;
  echo 'при $a = ' . "$quotes$a$quotes " . 'запрос ($a существует?) — ';
  if (isset($a)) {
    echo "верно<br>";
  } else {
    echo "неверно<br>";
  }
}

/*Работа с условными операторами #12
Если переменная $a НЕ существует, то выведите 'Верно', иначе выведите 'Неверно'. */
echo TasksName(TaskNumber()); //задание №
foreach ($arr as $a) {
  $quotes = gettype($a) == 'string' ? "'" : null;
  echo 'при $a = ' . "$quotes$a$quotes " . 'запрос ($a существует?) — ';
  if (!isset($a)) {
    echo "верно<br>";
  } else {
    echo "неверно<br>";
  }
}

?>
