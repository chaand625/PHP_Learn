<?php

$myArray = [1,2,'onn'];
echo $myArray[2];

$myArray[10] = 'hi';
echo $myArray[10];
echo '<br>';

$myArray[] = 'chotu';
echo $myArray[11];

echo $myArray[5]; // This will output nothing since index 5 is not set
?>