<?php
require '_inc.php';
$errors = [];
$emails = ['contact@youenehanno.fr'];

$validator = new Validator($_POST);
$validator->check('name', 'required');
$validator->check('email', 'required');
$validator->check('email', 'email');
$validator->check('message', 'required');
$errors = $validator->errors();

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: index.php');
} else {
    $_SESSION['success'] = 1;
    $headers = 'FROM: ' . $_POST['email'];
    mail('contact@youenehanno.fr', 'Formulaire de contact de ' . $_POST['name'], $_POST['message'], $headers);
    header('Location: index.php');
}