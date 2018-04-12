<?php
function TaskNumber($FileName) {
  #$FileName = substr(__FILE__, strlen(__DIR__) + 1);
  if (!defined("TASK_NUMBER")) {
    define("TASK_NUMBER", (int) substr($FileName, 3, 2));
  }
  return (int) substr($FileName, 0, 2);
}

function TasksName($part) {
  static $counter = TASK_NUMBER;
  echo "<br><b>Задание $part." . ($counter++) . "</b><br>";
}
