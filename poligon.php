<?php
require('start_set.php'); // выводить все ошибки и кодировка UTF-8
/*

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

echo accretion('какого?');

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
?>
