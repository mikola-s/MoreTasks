<?php
function TaskNumber($file) {
  $NumForPart = substr(strrchr($file, "\\"), 1, 2); // 47 for mac
  $NumForTask = substr(strrchr($file, "\\"), 4, 2); // 47 for mac
  if  (is_numeric($NumForPart) && is_numeric($NumForTask)) {
    if (!defined('TASK_NUMBER')) {
      define ('TASK_NUMBER', (int) $NumForTask);
    }
    static $TaskNumber = TASK_NUMBER;
    $NumForPart = (int) $NumForPart;
    return $NumForPart . '.' . $TaskNumber++;
  } else {
    echo <<<_TEXT
    <br>
    <hr>
    <b>Внимание!</b><br>
    для корректного отображения номера задания имя исполняемого фала<br>
    должно иметь маску
    <span style="color: blue">"##.##любые_символы.php"</span>
    , где # -- это цифра.<br> $file <br> $NumForPart <br> $NumForTask <hr>

_TEXT;
  }
}

function TaskName($TaskNumber) {
  if ($TaskNumber != 0) {
    echo "<hr><b>Задание $TaskNumber</b><br>";
  }
}
