<?php

require_once 'app/init.php';

$errorHandler = new ErrorHandler;
$validator = new Validator($errorHandler);

$validation = $validator->check($_POST, [
    'ziel1' => [
        'required' => true,
        'nospecialchars' => true
    ],
    'ziel2' => [
        'nospecialchars' => true
    ],
    'ziel3' => [
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

