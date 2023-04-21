<?php
$dsn = "mysql:host=localhost;dbname=lab3";
$user = 'root';
$pass = 'root';

try {
    $dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $ex) {
    echo $ex->GetMessage();
}
