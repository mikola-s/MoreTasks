<?php
require('start_set.php'); // выводить все ошибки и кодировка UTF-8
require('TasksName_2.php'); // функции для вывода имени задания
require('accretion.php'); // падежное приращение для числительных

function TaskBlock($BeginEnd) {
  $color = array(
    'LightCoral' =>	'#F08080',
    'LightSalmon' => '#FFA07A',
    'Tomato' => '#FF6347',
    'DarkKhaki'	=> '#BDB76B',
    'MediumPurple' =>	'#9370DB',
    'Tan'	=> '#D2B48C',
    'Lime' =>	'#00FF00',
    'Silver' => '#C0C0C0'
  );
  switch ($BeginEnd) {
    case 'begin':
      echo '<div style="
        display:inline-block;
        text-align: center;
        vertical-align: text-top;
        background-color:'.array_rand($color).';
        padding-left: 10px;
        padding-right: 10px;
        width: 20%;
      ">';
      break;
    case 'end':
      echo '</div>';
      break;
    default:
      echo 'введите значение "start" или "end"';
      break;
  }
}
function AnswerBlock($BeginEnd) {
  switch ($BeginEnd) {
    case 'begin':
      echo '<div style="
        display:inline-block;
        text-align: center;
        margin-left: -2px;
        vertical-align: text-top;
        background-color: silver;
        border: 1px solid white;
        min-width: 30px;
      ">';
      break;
    case 'end':
      echo '</div>';
      break;
    default:
      echo 'введите значение "begin" или "end"';
      break;
  }
}

//оформление
/* задача 04.06
Выведите столбец чисел от 1 до 100.*/
TaskBlock('begin');
echo TaskName(TaskNumber(__FILE__)); //номер задачи
for ($counter = 1; $counter <= 100; ++$counter) {
  if (($counter - 1) % 25 == 0) {
    AnswerBlock('begin');
    echo $counter . '<br>';
  } elseif (($counter) % 25 == 0) {
    echo $counter . '<br>';
    AnswerBlock('end');
  } else {
    echo $counter . '<br>';
  }
}
TaskBlock('end');

/* задача 04.07
Выведите столбец чисел от 11 до 33.*/
//оформление

TaskBlock('begin');
echo TaskName(TaskNumber(__FILE__)); //номер задачи
for ($counter=11; $counter <= 33 ; $counter++) {
  echo $counter . '<br>';
}
TaskBlock('end');
/* задача 04.08
Выведите столбец четных чисел в промежутке от 0 до 100. */

TaskBlock('begin');
echo TaskName(TaskNumber(__FILE__)); //номер задачи
for ($counter = ($start = 0); $counter <= ($condition = 100); $counter += ($step = 2)) {
  if ($counter == $start) {//начало первого блока
    AnswerBlock('begin');
    echo $counter . '<br>';
  } elseif ($counter == $condition) { //конец крайнего блока
    echo $counter . '<br>';
    AnswerBlock('end');
  } elseif //средние блоки
    ((($counter-$step) % 50 == 0) &&
    (($counter > $start+$step) && ($counter < $condition))){
      AnswerBlock('end');
      AnswerBlock('begin');
      echo $counter . '<br>';
  } else {
  echo $counter . '<br>';
  }
}
TaskBlock('end');
/* задача 04.09
С помощью цикла найдите сумму чисел от 1 до 100.
*/
TaskBlock('begin');
echo TaskName(TaskNumber(__FILE__)); //номер задачи

$result = 0;
for ($counter=0; $counter <= 100; $counter++) {
  $result += $counter;
}
echo $result;
TaskBlock('end');
?>
