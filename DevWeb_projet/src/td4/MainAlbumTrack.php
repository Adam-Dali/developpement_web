<?php

require_once("AlbumTrack.php");
require_once("AlbumTrackRenderer.php");
require_once("PodcastTrack.php");

$piste4 = new AlbumTrack("At the end of my beloved time limit", "./../../../Users/adamd/Music/Trails_through_Daybreak_2_title_theme.mp4", "Kuro no Kiseki II OST", 1);
$piste5 = new AlbumTrack("Silver Will", ".\..\..\..\Users\adamd\Music\Silver Will (SOra).ogg", "Sora no Kiseki OST", 2);

$piste4->artiste = "Falcom Sound Team jdk";
$piste4->annee = 2022;
$piste4->genre = "Bien";
$piste4->duree = 300;
$piste5->artiste = "Falcom Sound Team jdk";
$piste5->annee = 2004;
$piste5->genre = "Bien";
$piste5->duree = 160;

/*echo "Piste 1 : \n";
echo "Titre : " . $piste4->titre . "\n";
echo "Album : " . $piste4->album . "\n";
echo "Durée : " . $piste4->duree . "\n";
echo "Piste 2 : \n";
echo "Titre : " . $piste5->titre . "\n";
echo "Album : " . $piste5->album . "\n";
echo "Durée : " . $piste5->duree . "\n";

echo $piste4 . "\n";
echo $piste5 . "\n";

print_r($piste4);
print_r($piste5);


var_dump($piste4);
var_dump($piste5);
*/
$rendre = new AlbumTrackRenderer($piste5);
echo $rendre->render(2);

$pod = new PodcastTrack("Kurode", "./../../../Users/adamd/Music/Trails_through_Daybreak_2_title_theme.mp4");
echo $pod;

