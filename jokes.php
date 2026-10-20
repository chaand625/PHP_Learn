<?php

try {
    $pdo = new PDO('mysql:host=mysql;dbname=ijdb;charset=utf8mb4', 'ijdbuser', 'mypassword');
    $sql = 'SELECT `joketext`, `id` FROM `joke`';
    $result = $pdo->query($sql);
    // while ($row = $result->fetch()) {
    //     $jokes[] = ['joketext' => $row['joketext'], 'id' => $row['id']];
    // }

    // this is more efficient than the upper one
    // while ($row = $result->fetch()) {
    //     $jokes[] = $row;
    // }

    // even better
    foreach($result as $row){
        $jokes[] = $row;
    }

    // even more better
    $jokes = $result;

    // even more more better
    $jokes = $pdo->query($sql);

    $title = 'Joke list';
    ob_start();
    include __DIR__ . '/templates/jokes.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage() . ' in ' .
        $e->getFile() . ':' . $e->getLine();
}

include
    __DIR__ . '/templates/layout.html.php';
