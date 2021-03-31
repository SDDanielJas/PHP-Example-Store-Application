<?php
    $dsn = 'mysql:host=localhost;dbname=my_DanielJasinski_final';
    $username = 'final_user';
    $password = 'final';

    try {
    $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include 'errors/database_error.php';
        exit;
    }

?>