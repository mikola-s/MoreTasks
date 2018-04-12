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
    define ("TASK_NUMBER", (int) substr($FileName, 3, 2));
  }
  return (int) substr($FileName, 0, 2);
}

function TasksName($part) {
  static $counter = TASK_NUMBER;
  echo "<br><b>Задание $part." . ($counter++) . "</b><br>";
}

/*Работа с массивами #11
Создайте многомерный массив $arr.
С его помощью выведите на экран слова 'joomla', 'drupal', 'зеленый', 'красный'.
$arr = [
 'cms'=>['joomla', 'wordpress', 'drupal'],
 'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];*/
echo TasksName(TaskNumber());
$arr = array(
  'cms'=> array('joomla', 'wordpress', 'drupal'),
  'colors'=> array(
    'blue'=>'голубой',
    'red'=>'красный',
    'green'=>'зеленый'
  )
);
echo "{$arr['cms'][0]}<br>";
echo "{$arr['cms'][2]}<br>";
echo "{$arr['colors']['red']}<br>";
echo "{$arr['colors']['green']}<br>";

/*Работа с массивами #12
Создайте двухмерный массив.
Первые два ключа - это 'ru' и 'en'. Пусть первый ключ содержит элемент,
являющийся массивом названий дней недели по-русски, а второй - по-английски.
Выведите с помощью этого массива понедельник по-русски и среду по английски
(пусть понедельник - это первый день). */
echo TasksName(TaskNumber());
$lang = array(
  'ru' => array('понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'),
  'en' => array('Monday', 'Tusday', 'Wensday', 'Thusday', 'Friday', 'Saturday', 'Sunday')
);
echo "{$lang['ru'][0]}<br>";
echo "{$lang['en'][2]}<br>";


/*Работа с массивами #13
Пусть теперь в переменной $lang хранится язык
(она принимает одно из значений или 'ru', или 'en' - либо то, либо то),
а в переменной $day - номер дня. Выведите словом день недели,
соответствующий переменным $lang и $day.
То есть: если, к примеру, $lang = 'ru' и $day = 3 - то выведем 'среда'. */
echo TasksName(TaskNumber());
$WeekDay = array(
  'ru' => array('' ,'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'),
  'en' => array('' ,'Monday', 'Tusday', 'Wensday', 'Thusday', 'Friday', 'Saturday', 'Sunday')
);
$lang = 'ru';
$day = d;
echo "{$WeekDay[$lang][$day]}<br>";

?>
