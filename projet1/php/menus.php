<?php

include 'connection.php';

// Drinks Card
$menusDrinksSql =
    'SELECT *
    FROM menus_drinks';


$query = $pdo->prepare($menusDrinksSql);
$query->execute();
$menusDrinks = $query->fetch();

// Foods Card
$menusFoodsSql =
    'SELECT *
    FROM menus_foods';


$query = $pdo->prepare($menusFoodsSql);
$query->execute();
$menusFoods = $query->fetch();


// Dishes
$dishesSql =
    'SELECT *
    FROM dishes';


$query = $pdo->prepare($dishesSql);
$query->execute();
$dishes = $query->fetchAll();


// Draught Beer
$draughtBeerSql =
    'SELECT *
    FROM draught_beers';


$query = $pdo->prepare($draughtBeerSql);
$query->execute();
$draughtBeers = $query->fetchAll();


// Salads
$saladsSql =
    'SELECT *
    FROM salads';


$query = $pdo->prepare($saladsSql);
$query->execute();
$salads = $query->fetchAll();


// Whiskeys
$whiskeysSql =
    'SELECT *
    FROM whiskeys';


$query = $pdo->prepare($whiskeysSql);
$query->execute();
$whiskeys = $query->fetchAll();


// Wines
$winesSql =
    'SELECT *
    FROM wines';


$query = $pdo->prepare($winesSql);
$query->execute();
$wines = $query->fetchAll();


// Burgers
$burgersSql =
    'SELECT *
    FROM burgers';


$query = $pdo->prepare($burgersSql);
$query->execute();
$burgers = $query->fetchAll();