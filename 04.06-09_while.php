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
        background-color: lightgray;
        border: 1px solid white;
        min-width: 30px;
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


//оформление
/* задача 04.06
Выведите столбец чисел от 1 до 100.*/
TaskBlock('begin');
echo TaskName(TaskNumber(__FILE__)); //номер задачи



$counter = 0;
while ($counter < 100) {
  if ($counter % 25 == 0) {
    AnswerBlock('begin');
    echo ++$counter . '<br>';
  } elseif (($counter + 1) % 25 == 0) {
    echo ++$counter . '<br>';
    AnswerBlock('end');
  } else {
    echo ++$counter . '<br>';
  }
}
TaskBlock('end');
/* задача 04.07
Выведите столбец чисел от 11 до 33.*/
//оформление

TaskBlock('begin');
echo TaskName(TaskNumber(__FILE__)); //номер задачи
$counter = 11;
while ($counter <= 33) {
  echo $counter++ . '<br>';
}
TaskBlock('end');
/* задача 04.08
Выведите столбец четных чисел в промежутке от 0 до 100. */

TaskBlock('begin');
echo TaskName(TaskNumber(__FILE__)); //номер задачи
$counter = 0;
while ($counter < 100) {
  if ($counter % 50 == 0) {
    AnswerBlock('begin');
      $counter += 2;
    echo $counter . '<br>';
  } elseif (($counter + 2) % 50 == 0) {
    $counter += 2;
    echo $counter . '<br>';
    AnswerBlock('end');
  } else {
    $counter += 2;
    echo $counter . '<br>';
  }
}
TaskBlock('end');
/* задача 04.09
С помощью цикла найдите сумму чисел от 1 до 100.
*/
TaskBlock('begin');
echo TaskName(TaskNumber(__FILE__)); //номер задачи
$counter = 1;
$result = 0;
while ($counter <= 100) {
  $result += $counter++;

}
echo $result;
TaskBlock('end');
?>
