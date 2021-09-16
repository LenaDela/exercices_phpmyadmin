<?php
echo "hello<br />\n";
define ("DBH","mysql:host=localhost;port=3306;dbname=todolist");
define ("USER", "admin");
define ("PASSWORD", "admin");

try {
    $pdo = new PDO(DBH, USER, PASSWORD);
} catch (PDOException $e) {
    echo "Connexion échouée : " . $e->getMessage();
    }