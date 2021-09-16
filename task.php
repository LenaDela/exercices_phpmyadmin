<?php

require_once("connexion.php");

$request = $pdo->prepare("SELECT * FROM tasks WHERE id = 6"); 

$request->execute();

$row = $request->fetch(PDO::FETCH_ASSOC);
    echo $row["title"], " ", $row["id"], " ", $row["description"], " ", "<br />";