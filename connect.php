<?php

$user = 'root';
$pass = '123';
$dsn = "mysql:host=localhost;dbname=testsql";
$opt = [
    PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION,
//    PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC,
    PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_CLASS,
    PDO::ATTR_PERSISTENT          => true
];

$conn = new PDO($dsn, $user, $pass, $opt);


