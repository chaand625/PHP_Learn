<?php
try {
    $pdo = new PDO(
        'mysql:host=mysql;dbname=ijdb;charset=utf8mb4',
        'ijdbuser',
        'mypassworde'
    );
    $output = 'Database connection established.';
} catch (PDOException $e) {
    $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in' . $e->getFile() . ':' . $e->getLine();
}


include __DIR__ . '/../templates/output.html.php';