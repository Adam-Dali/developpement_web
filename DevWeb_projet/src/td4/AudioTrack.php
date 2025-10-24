<?php

class AudioTrack
{
    public string $titre;
    public string $genre;
    public int $duree;
    public string $nomFichAudio;

    function __construct($titre, $nom){
        $this->titre = $titre;
        $this->nomFichAudio = $nom;
        $this->duree = 0;
        $this->genre = "";
    }
}