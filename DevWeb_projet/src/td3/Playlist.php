<?php
//Exercice 3
$piste1 = [
    "titre" => "Resonance of Ray",
    "artiste" => "Jindo",
    "album" => "Kuro no Kiseki OST",
    "annee" => 2021,
    "genre" => "pas mal de choses",
    "numero" => 01,
    "duree" => 260,
];

$piste2 = [
    "titre" => "Full Moon, full Life",
    "artiste" => "Takahashi",
    "album" => "Persona 3 Reload OST",
    "annee" => 2024,
    "genre" => "JPOP",
    "numero" => 02,
    "duree" => 284,
];

$piste3 = [
    "titre" => "Gurenge",
    "artiste" => "LiSA",
    "album" => "Demon Slayer OST",
    "annee" => 2019,
    "genre" => "rock",
    "numero" => 03,
    "duree" => 240,
];

//Exercice 6

$track_list = [
    1 => $piste1,
    2 => $piste2,
    3 => $piste3,
];

function add_track(array $playlist, array $piste) : array {
    $playlist["pistes"].$track_list = $piste;
    return $playlist;
}

//Exercice 1
$playlist = [
    "nom" => "Saiopscure",
    "genre" => "Rock",
    "createur" => "Les meilleurs de l'industrie",
    "date" => "5/12/1004",
    "nbPistes" => 89632134564564,
    "duree" => 12415*10**56,
    "pistes" => $track_list,
];

//Exercice 2
/*function display(array $pl) {
    print "playlist " . $pl["nom"] . " (" . $pl["genre"] . ")" . "\n";
    print "par " . $pl["createur"] . " le " . $pl["date"] . "\n";
    print $pl["nbPistes"] . " pistes pour une durée totale de " . $pl["duree"] . "s" . "\n";
}*/

//print display($playlist);

//Exercice 4
function display_track(array $track, int $affichage) {
    switch ($affichage) {
        case 1:
            print $track["titre"] . " - by " . $track["artiste"] . " (from " . $track["album"] . ")";
            break;
        case 2:
            print $track["numero"] . " -" . $track["titre"] . " - by " . $track["artiste"] . " (from " . $track["album"] . ") - " . $track["duree"] . "s";
            break;
        case 3:
            print $track["numero"] . " -" . $track["titre"] . " - by " . $track["artiste"] . " (from " . $track["album"] . ", " . $track["annee"] . ") - " . $track["duree"] . "s : " . $track["genre"];
            break;
        default :
            print $track["titre"] . " - by " . $track["artiste"] . " (from " . $track["album"] . ")";
    }
}

//print display_track($piste1,3);

//Exercice 5

function play_track(array $track) : void {
    print $track["titre"] . " - ";
    for ($i = 1; $i <= $track["duree"]; $i++){
        print $i . " ";
    }
}

//print play_track($piste3);

function display(array $pl) {
    print "playlist " . $pl["nom"] . " (" . $pl["genre"] . ")" . "\n";
    print "par " . $pl["createur"] . " le " . $pl["date"] . "\n";
    print $pl["nbPistes"] . " pistes pour une durée totale de " . $pl["duree"] . "s" . "\n";
    foreach( $pl["pistes"] as $piste) {
        print display_track($piste, 3);
    }
}

print display($playlist);

//Exercice 8
function play(array $pl) : void {
    foreach( $pl["pistes"][1] as $piste) {
        print play_track( $piste);
    }
}

//Exercice 9
function remove_track(array $pl, int $num){
    unset($pl["pistes"][$num]);
}
?>