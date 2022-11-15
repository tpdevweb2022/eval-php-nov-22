<?php

// EXERCICE 2 (3 points)
// Recevant le tableau suivant :

$array = [
    "name"      => "John Doe",
    "age"       => 12,
    "hobbies"   => [
        "Football",
        "Chess",
        "Aqua Poney"
    ]
];

// 2.1. Ajouter dans un premier temps un hobby à John Doe, la 'Air Guitar' (1 point)
$array["hobbies"][] = "Air Guitar";
var_dump($array);

// 2.2. Faites en sorte de supprimer le Football de la liste des hobbies (1 point)
unset($array["hobbies"][0]);
var_dump($array);

// 2.3. Ajouter une nouvelle valeur de type tableau ayant comme clé 'skills' et comme
// valeurs : "Windows 95, le Kamoulox et les crêpes au nutella" (2 points)
$array["skills"] = [
    "Windows 95",
    "Kamoulox",
    "Crêpes au nutella"
];
var_dump($array);