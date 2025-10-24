<?php

require_once("AlbumTrack.php");

class AlbumTrackRenderer
{
    public AlbumTrack $albumTrack;

    function __construct(AlbumTrack $at){
        $this->albumTrack = $at;
    }

    public function render(int $selector): string
    {
        switch ($selector) {
            case 1:
                return $this->renderCompact();
            case 2:
                return $this->renderLong();
            default:
                return "<p>Mode d'affichage inconnu.</p>";
        }
    }

    // --- Méthode privée : affichage compact ---
    private function renderCompact(): string
    {
        return "
        <div class='track compact'>
            <p><strong>{$this->albumTrack->titre}</strong> - {$this->albumTrack->artiste}</p>
            <audio controls preload='none'>
                <source src='{$this->albumTrack->nomFichAudio}' type='audio/mpeg'>
                Votre navigateur ne supporte pas la balise audio.
            </audio>
        </div>
        ";
    }

    // --- Méthode privée : affichage long ---
    private function renderLong(): string
    {
        return "
        <div class='track long'>
            <h2>{$this->albumTrack->titre}</h2>
            <p><b>Artiste :</b> {$this->albumTrack->artiste}</p>
            <p><b>Album :</b> {$this->albumTrack->album}</p>
            <p><b>Année :</b> {$this->albumTrack->annee}</p>
            <p><b>Genre :</b> {$this->albumTrack->genre}</p>
            <p><b>Durée :</b> {$this->albumTrack->duree} secondes</p>
            <audio controls>
                <source src='{$this->albumTrack->nomFichAudio}' type='audio/mpeg'>
                Votre navigateur ne supporte pas la balise audio.
            </audio>
        </div>
        ";
    }
}