<?php

$cookie_lifetime = time() + (2 * 60 * 60); // 2 heures

if (isset($_COOKIE["Paibite"])) {
    $valeur = intval($_COOKIE["Paibite"]);
    $new_valeur = $valeur + 1;

    setcookie("Paibite", $new_valeur, $cookie_lifetime, "/");

    echo "Valeur actuelle du cookie Paibite : $new_valeur";
} else {
    setcookie("Paibite", 1, $cookie_lifetime, "/");
    echo "Paibite (cookie) créé avec la valeur 1.";
}