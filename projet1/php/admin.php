<?php

include 'connection.php';

$adminSql =
    'SELECT id, name, password
    FROM admin';


$query = $pdo->prepare($adminSql);
$query->execute();
$admin = $query->fetchAll();