<?php
$user_name = "root";
$password = "";
$database = "competitiondb";
$server = "127.0.0.1";
/////////////////////////////
session_start ();
try {
    $dbh = new PDO("mysql:host=$server;dbname=$database", $user_name, $password);
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    die( 'FFFFFFFFFFF!');
    return;
    }
?>