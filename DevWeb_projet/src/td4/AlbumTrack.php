<?php

class AlbumTrack {
    public string $titre;
    public string $artiste;
    public string $album;
    public int $annee;
    public int $numPiste;
    public int $duree;
    public string $nomFichAudio;

    public function __construct(string $titre, string $chemin, string $album, int $numPiste){
        $this->titre = $titre;
        $this->album = $album;
        $this->numPiste = $numPiste;
        $this->nomFichAudio = $chemin;
        $this->artiste = "Moi";
        $this->annee = 1000;
        $this->genre = "Rock";
        $this->duree = 260;
    }

    public function __toString() : string {
        return "La piste " . $this->numPiste . " - " . $this->titre ." par ". $this->artiste . " dans l'album " . $this->album . " publié en " . $this->annee . " d'une durée de " . $this->duree . "s, et accessible via : " . $this->nomFichAudio . "\n";
    }

    public function turnToString() : string {
        return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
    }
}