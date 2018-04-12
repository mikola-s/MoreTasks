<?php
// начальные установки
ini_set('error_reporting', -1); //задает отображение всех ошибок
ini_set('display_errors', 1); //вывод ошибок на экран
ini_set('display_startup_errors', 1); //вывод стартовых ошибок
header('Content-Type: text/html; charset=utf-8', false); // добавляет в <head> кодировку utf-8

function tasks_number() { //выводит номер задания
  $part = 2;
  static $counter = 1;
  echo "<br><b>Задание $part." . ($counter++) . "</b><br>";
}

/*Работа с массивами #1
Создайте массив $arr=['a', 'b', 'c'].
Выведите значение массива на экран с помощью функции var_dump().*/
tasks_number();
$arr = array('a', 'b', 'c');
var_dump($arr);
echo "<br>";

/*Работа с массивами #2
С помощью массива $arr из предыдущего номера выведите на экран
содержимое первого, второго и третьего элементов. */
tasks_number();
echo '$arr[0] = '."$arr[0] <br>";
echo '$arr[1] = '."$arr[1] <br>";
echo '$arr[2] = '."$arr[2] <br>";

/*Работа с массивами #3
Создайте массив $arr=['a', 'b', 'c', 'd'] и с его помощью
выведите на экран строку 'a+b, c+d'. */
tasks_number();
$arr = array('a', 'b', 'c', 'c');
echo "$arr[0]+$arr[1], $arr[2]+$arr[3] <br>";

/*Работа с массивами #4
Создайте массив $arr с элементами 2, 5, 3, 9.
Умножьте первый элемент массива на второй,
а третий элемент на четвертый.
Результаты сложите, присвойте переменной $result.
Выведите на экран значение этой переменной. */
tasks_number();
$arr = array(2, 5, 3, 9);
$result = $arr[0]*$arr[1]+$arr[2]+$arr[3];
echo "$result <br>";

/*Работа с массивами #5
Заполните массив $arr числами от 1 до 5.
Не объявляйте массив, а просто заполните его присваиванием
$arr[] = новое значение.*/
tasks_number();
$arr = null;
for ($i=1; $i < 6; $i++) {
  $arr[] = $i;
}
var_dump ($arr);

?>
