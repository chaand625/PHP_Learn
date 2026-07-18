<!-- <?php

// $name = $_GET['name'];
// // echo 'Welcome to our website ' . $name . '!';
// echo 'Welcome to our website ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8')  . '!';

?> -->

<?php
$firstName = $_GET['firstname'];
$lastName = $_GET['lastname'];
echo 'Welcome to our website, ' .
htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
?>