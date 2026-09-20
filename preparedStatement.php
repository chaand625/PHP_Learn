<?php
$sql = 'INSERT INTO `joke` SET
    `joketext`: joketext';

// prepare returns PDOStatment?(yes the one used in SELECT)
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':joketext',$_POST['joketext']);
// execute vs exec(oh man what a subtle difference)
$stmt->execute();