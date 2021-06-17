<?php

    $dsn = 'mysql:host=localhost;dbname=elemini';
    $username='root';
    $password='';

    try {
        $db = new PDO($dsn, $username, $password);
        
    } catch (PDOException $e) {
        $error = $e -> getMessage();
        echo '<p> En error ocurred while connecting to the database: '.$error;
        exit();
    }

    


?>