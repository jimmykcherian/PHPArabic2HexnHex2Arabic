<?php

$text= "بب بب";

$output = mb_strtoupper(bin2hex(mb_convert_encoding($text, 'UTF-16BE', 'UTF-8')));

echo $output . '<br>';
//002006280628002006280628

$result = iconv('UTF-16BE', 'UTF-8', hex2bin($output));

echo $result . '<br>';
// بب بب

?>
