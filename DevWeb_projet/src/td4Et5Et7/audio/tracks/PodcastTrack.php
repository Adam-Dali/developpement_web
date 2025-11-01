<?php

namespace td4Et5Et7\audio\tracks;

require_once("AudioTrack.php");

class PodcastTrack extends AudioTrack
{
    protected string $auteur;
    protected string $date;

    public function __construct(string $titre, string $chemin)
    {
        parent::__construct($titre, $chemin);
        $this->auteur = "Moi";
        $this->date = "35/07/2069";
    }

    public function __toString(): string
    {
        return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
    }
}