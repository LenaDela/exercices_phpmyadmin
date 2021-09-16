<?php

require_once("connexion.php");



$request = $pdo->prepare("INSERT INTO  tasks (title, description) VALUES ('Cook Meal', 'jsfljdflffsdj')");

$request->execute();
// ("Do The Laundry", "ezkhsdlhldgdgl")