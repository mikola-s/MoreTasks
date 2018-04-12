<?php
require('start_set.php'); // выводить все ошибки и кодировка UTF-8
require('TasksName_2.php'); // функции для вывода имени задания
require('accretion.php'); // падежное приращение для числительных

/* задача 04.01
Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик. Показать решение.*/
echo TaskName(TaskNumber(__FILE__)); //номер задачи
$arr = array('html', 'css', 'php', 'js', 'jq');
foreach ($arr as $key => $val) {
  echo "\$arr[$key] = $val <br>";
}
/* задача 04.02
Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result. Показать решение.
*/
echo TaskName(TaskNumber(__FILE__)); //номер задачи
$arr = array(1, 2, 3, 4, 5);
$result = 0;
foreach ($arr as $key) {
  $result += $key;
}
echo "сумма элеменов массива $result";


/* задача 04.03
Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result. Показать решение.
*/
echo TaskName(TaskNumber(__FILE__)); //номер задачи
$arr = array(1, 2, 3, 4, 5);
$result = 0;
foreach ($arr as $key) {
  $result += $key * $key;
}
echo "сумма квадратов элеменов массива $result";

/* задача 04.04
Дан массив $arr. С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'.
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
*/
echo TaskName(TaskNumber(__FILE__)); //номер задачи
$arr = array(
  'green'=>'зеленый',
  'red'=>'красный',
  'blue'=>'голубой');
foreach ($arr as $key => $val) {
    echo "$key - $val <br>";
}



/* задача 04.05
Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' и с элементами '200', '300', '400'. С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля - зарплата 200 долларов.'. Показать решение.
*/
echo TaskName(TaskNumber(__FILE__)); //номер задачи
$arr = array(
  'Коля'=>'200',
  'Вася'=>'300',
  'Петя'=>'400');
foreach ($arr as $key => $val) {
    echo "$key - зарплата $val долларов <br>";
}





?>