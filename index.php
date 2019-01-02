<?php

require_once 'app/init.php';

$errorHandler = new ErrorHandler;
$validator = new Validator($errorHandler);

$validation = $validator->check($_POST, [
    'dest_1' => [
        'nospecialchars' => true
    ],
    'dest_2' => [
        'nospecialchars' => true
    ],
    'dest_3' => [
        'nospecialchars' => true
    ],
    'name' => [
        'required' => true,
        'minlength' => 5,
        'nospecialchars' => true
    ],
    'plz' => [
        'required' => true,
        'plz' => true,
        'nospecialchars' => true
    ],
    'ort' => [
        'required' => true,
        'nospecialchars' => true
    ],
    'telefon' => [
        'required' => true,
        'telefon' => true
    ]
]);

$app = new FrontController;
$app->check($_POST, $validation);

