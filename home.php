<?php

ob_start();

$title = 'Home';

include __DIR__ . '/templates/home.html.php';

$output = ob_get_clean();


include __DIR__ . '/templates/layout.html.php';