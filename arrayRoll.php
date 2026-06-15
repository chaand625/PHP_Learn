<?php
$englishArray = [
    1 => 'one',
    2 => 'two',
    3 => 'three',
    4 => 'four',
    5 => 'five',
    6 => 'six'
];

$roll = rand(1, 6);

echo 'You rolled a ' . $englishArray[$roll];

if($roll == 6){
    echo '<br> You won! <br>';
}
else {
    echo '<br> You lost <br>';
}

?>