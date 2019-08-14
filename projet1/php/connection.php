<?php

$host = "localhost";
$user = "root";
$pass = ""; 
$dbname = "giggs";


try{
    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbname.';charset=UTF8',
        $user,
        $pass,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
}catch(PDOException $e) {
    echo 'Une Erreur est survenue : '.$e->getMessage();
    die;
}