<?php

require_once("connexion.php");

$request = $pdo->prepare("UPDATE tasks SET description = 'To be done quickly' WHERE id = 5");
$request = $pdo->prepare("SELECT * FROM tasks WHERE id = 5");

$request->execute();

$row = $request->fetch(PDO::FETCH_ASSOC);
    echo $row["title"], " ", $row["id"], " ", $row["description"], " ", "<br />";

