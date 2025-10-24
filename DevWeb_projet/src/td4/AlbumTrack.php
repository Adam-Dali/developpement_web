<?php

require_once("AudioTrack.php");

class AlbumTrack extends AudioTrack {
    public string $artiste;
    public string $album;
    public int $numPiste;
    public int $annee;

    public function __construct(string $titre, string $chemin, string $album, int $numPiste){
        parent::__construct($titre, $chemin);
        $this->album = $album;
        $this->numPiste = $numPiste;
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