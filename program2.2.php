<?php

echo "Enter array elements separated by spaces: ";
$input = trim(fgets(STDIN));


$array = explode(" ", $input);


sort($array);


echo "Sorted array: ";
foreach ($array as $value) {
    echo $value . " ";
}
?>