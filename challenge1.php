<?php
for($var = 21; $var <=99 ; $var = $var + 2){
    echo $var . ' ';
} 

echo '<br>';

$nine = 9;
for($var = 1; $var <= 12 ; $var++){
    echo $nine . ' ';
    $nine = $nine + 9;
}

echo '<br>';

$nine = 9;
for($var = 1; $var <= 12 ; $var++){
    echo $var . 'x9 = ' . (9*$var) . '<br>';
    $nine = $nine + 9;
}
?>