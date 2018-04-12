<?php
/* возвращает буквенное падежное наращение для цифры
$case -- вопрос к числу
например
(какому?)21-му студенту
(какого?)11-го числа
(какое?)9-е число
и т.п.
*/

function accretion($case) {
  $glasny = 'аеёиоуэыюя'; // гласные
  $soglasny = 'бвгджзйклмнпрстфхцчшщ'; // согласные
  if (mb_substr_count($case, '?') > 0) {
    $case = mb_strstr($case, '?', true);
  }

  $CharR2 = mb_substr($case, mb_strlen($case)-2, 1);
  if (mb_substr_count($soglasny, $CharR2) > 0){
    return "-".mb_substr($case, mb_strlen($case)-2, 2);
  } else {
    return "-".mb_substr($case, mb_strlen($case)-1, 1);
  }

}
