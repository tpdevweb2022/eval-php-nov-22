<?php

// EXERCICE 5 (3 points)
// Créer une fonction qui va récupérer une date au format string YYYY-MM-DD en paramètre,
// et qui pourra afficher les formats suivants si le second paramètre est défini.

function formatDate($string, $format = "default"){
    $date = match ($format){
        "normal"    => date_format(new DateTime($string), "d/m/Y"),
        "long"      => date_format(new DateTime($string), "d F Y"),
        "small"     => date_format(new DateTime($string), "d/m"),
        "full"      => date_format(new DateTime($string), "D m F Y"),
        "default"   => $string
    };
    return $date;
}

// La fonction "formatDate" devra retourner les résultats sous la forme suivante
//

echo formatDate("1999-11-02");// 1999-11-02
echo "<br>";
echo formatDate("1999-11-02", "normal");// 02/11/1999
echo "<br>";
echo formatDate("1999-11-02", "long");// 02 novembre 1999
echo "<br>";
echo formatDate("1999-11-02", "small");// 02/11
echo "<br>";
echo formatDate("1999-11-02", "full");// Jeudi 02 novembre 1999