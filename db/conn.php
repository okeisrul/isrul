<?php
    $host='remotemysql';
    $db ='Ori3RY1zHI';
    $user ='Ori3RY1zHI';
    $pass = 'QtWFWwEkvD';
    $charset ='utf8mb4';

    $dsn ="mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        
        throw new PDOException(($e->getMessage()));
    }

    require_once'crud.php';
    $crud = new crud($pdo);
?>
