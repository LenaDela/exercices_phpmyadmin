<?php

require_once("connexion.php");

$request = $pdo->prepare("DELETE FROM tasks WHERE id = 16");
$request->execute();

$request = $pdo->prepare("SELECT * FROM tasks");
$request->execute();

$rows = $request->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row) {
    echo $row["title"], " ";
    echo $row["id"], " ";
    echo $row["description"], " ", "<br />";
   }
  