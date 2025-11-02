<?php

use td4Et5Et7\audio\tracks\AlbumTrack;

require_once 'src/td4Et5Et7/loader/Autoloader.php';

$loader = new td4Et5Et7\loader\Autoloader("td4Et5Et7\\", "src/td4Et5Et7");
$loader->register();

$vie_cookie = time() + (2 * 60 * 60);

$aby = new AlbumTrack("At the End of my Beloved Time Limit", "C:\Users\adamd\Music\Trails_through_Daybreak_2_title_theme.mp4", "Kuro no Kiseki II OST", 1);
if (isset($_COOKIE["Kourode"])) {
    // Lire et désérialiser le cookie
    $piste_serial = $_COOKIE["Kourode"];
    $piste = unserialize($piste_serial);
    $piste->setAlbum("Kuro no Kiseki II OST");
    $piste->setAnnee("2022");
    $piste->setNumPiste(1);
    $piste->setArtiste("Falcom Sound Team jdk");
    $piste->setDuree(220);

    echo "<strong>Lecture du cookie Kurode :</strong><br>";
    echo $piste;
} else {
    // Créer un nouvel objet AlbumTrack
    $piste = new AlbumTrack("At the End of my Beloved Time Limit", "C:\Users\adamd\Music\Trails_through_Daybreak_2_title_theme.mp4", "Kuro no Kiseki II OST", 1);
    $aby->album("Kuro no Kiseki II OST");
    $aby->setAnnee("2022");
    $aby->setNumPiste(1);
    $aby->setArtiste("Falcom Sound Team jdk");
    $aby->setDuree(220);

    // Sérialiser et stocker dans le cookie
    $piste_serial = serialize($piste);
    setcookie("Kourode", $piste_serial, $vie_cookie, "/");

    echo "Cookie Kurode créé avec un objet AlbumTrack.";
}