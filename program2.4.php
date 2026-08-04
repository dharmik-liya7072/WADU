<?php
$str = "hello PHP";

echo"length = " .strlen($str);
echo"<br>";

echo"position of php = " .strpos($str , "PHP");
echo"<br>";

echo"word count = " .str_word_count($str);
echo"<br>";

echo"reverse = " .strrev($str);
echo"<br>";

echo"lowercase = " .strtolower($str);
echo"<br>";

echo"uppercase = " .strtoupper($str);

?>