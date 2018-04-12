<?php
// начальные установки
ini_set('error_reporting', -1); //задает отображение всех ошибок
ini_set('display_errors', 1); //вывод ошибок на экран
ini_set('display_startup_errors', 1); //вывод стартовых ошибок
header('Content-Type: text/html; charset=utf-8', false); // добавляет в <head> кодировку utf-8

require 'TasksName.php'; //для вывода номера задания

/*Работа с условными операторами #13
Если переменная $var равна true, то выведите 'Верно', иначе выведите 'Неверно'.
Проверьте работу скрипта при $var, равном true, false.
Напишите два варианта скрипта - с короткой записью и с длинной.*/
echo TasksName(TaskNumber(substr(__FILE__, strlen(__DIR__) + 1))); //задание №

$arrVar = array(TRUE, FALSE);
foreach ($arrVar as $var) {
  # длинная форма
  echo 'неочевидная длинная форма'."<br>";
    echo 'при $var = ' . ($var ? 'TRUE' : 'FALSE') . ' условие $var = TRUE — ';
  if ($var) {
    echo "верно<br>";
  } else {
    echo "неверно<br>";
  }

  #короткая форма
  echo 'неочевидная короткая форма'."<br>";
  echo 'при $var = ' . ($var ? 'TRUE' : 'FALSE') . ' условие $var = TRUE — ';
  echo $var ? "TRUE<br>" : "FALSE<br>";
}


/*Работа с условными операторами #14
Если переменная $var НЕ равна true, то выведите 'Верно', иначе выведите 'Неверно'.
Проверьте работу скрипта при $var, равном true, false.
Напишите два варианта скрипта - с короткой записью и с длинной.*/
echo TasksName(TaskNumber(substr(__FILE__, strlen(__DIR__) + 1))); //задание №

foreach ($arrVar as $var) {
  # длинная форма
  echo 'неочевидная длинная форма'."<br>";
    echo 'при $var = ' . ($var ? 'TRUE' : 'FALSE') . ' условие $var != TRUE — ';
  if ($var != TRUE) {
    echo "верно<br>";
  } else {
    echo "неверно<br>";
  }

  #короткая форма
  echo 'неочевидная короткая форма'."<br>";
  echo 'при $var = ' . ($var ? 'TRUE' : 'FALSE') . ' условие $var != TRUE — ';
  echo !$var ? "TRUE<br>" : "FALSE<br>";
}


?>
