<?php

include 'connection.php';

$eventsSql =
    'SELECT *
    FROM events';


$query = $pdo->prepare($eventsSql);
$query->execute();
$events = $query->fetchAll();
