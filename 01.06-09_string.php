<?php
// начальные установки
ini_set('error_reporting', -1); //задает отображение всех ошибок
ini_set('display_errors', 1); //вывод ошибок на экран
ini_set('display_startup_errors', 1); //вывод стартовых ошибок
header('Content-Type: text/html; charset=utf-8', false); // добавляет в <head> кодировку utf-8

function tasks_number() { //выводит номер задания
  static $counter = 6;
  echo "<br><b>Задание " . ($counter++) . "</b><br>";
}

/* Работа с переменными #6
Создайте переменную $text и присвойте ей значение 'Привет, Мир!'.
Выведите значение этой переменной на экран.*/

tasks_number();
$text = '1 Привет, Мир!'. "<br>";
echo $text;

/*Работа с переменными #7
Создайте переменные $text1='Привет, ' и $text2='Мир!'.
С помощью этих переменных и операции сложения строк выведите на экран фразу
'Привет, Мир!'.*/

tasks_number();
$text1 = 'Привет, ';
$text2 = 'Мир!';
echo '2 ' . $text1 . $text2 . "<br>";
echo '3 ', $text1, $text2, "<br>";

/*Работа с переменными #8
Создайте переменную $name и присвойте ей ваше имя.
Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.*/

tasks_number();
$name = 'mykola';
echo "Привет, $name<br>";

/*Работа с переменными #9
Создайте переменную $age и присвойте ей ваш возраст.
Выведите на экран 'Мне %Возраст% лет!'.*/
tasks_number();
$age = 42;
echo "Мне $age года";

?>