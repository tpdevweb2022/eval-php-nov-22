<?php

// EXERCICE 3 (3 points)
// Après avoir consulté cette variable :

$request = "SELECT ALL FORM 'myTable' WHERE id IS EQUAL TO 12 LIMIT 12 ORDER BY ASCEND";

// Réécrivez cette requête SQL correctement

$request = "SELECT * FROM myTable WHERE id = 12 ORDER BY id ASC LIMIT 12";