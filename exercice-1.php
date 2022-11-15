<?php

// EXERCICE 1 (3 points)
// Créer une fonction permettant de générer une chaine de caractères unique,
// préfixée de deux lettres puis 30 caractères alphanumériques

function randomPrefix(string $prefix): string{
    return $prefix . bin2hex(random_bytes(15));
}

// Résultat attendu
var_dump(randomPrefix("AB")); // Output : "ABc0uY3XooLzLXwiZKryXU5RLvPTcDIa"
var_dump(randomPrefix("KJ")); // Output : "KJ9wEEmHnny9cb0Y8ToZ1BtmtGTmSq95"


