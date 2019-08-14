<?php

include 'connection.php';

$photosSql =
    'SELECT id, img
    FROM photos';


$query = $pdo->prepare($photosSql);
$query->execute();
$photos = $query->fetchAll();
