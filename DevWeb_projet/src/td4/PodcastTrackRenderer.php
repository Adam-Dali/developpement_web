<?php
require_once("Renderer.php");
require_once("PodcastTrack.php");

class PodcastTrackRenderer implements Renderer
{

    public PodcastTrack $podcastTrack;

    public function __construct(PodcastTrack $pt){
        $this->podcastTrack = $pt;
    }

    public function render(int $selecteur): string
    {
        switch ($selecteur) {
            case self::COMPACT:
                return $this->renderCompact();
            case self::LONG:
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
            <p><strong>{$this->podcastTrack->titre}</strong> - {$this->podcastTrack->auteur}</p>
            <audio controls preload='none'>
                <source src='{$this->podcastTrack->nomFichAudio}' type='audio/mpeg'>
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
            <h2>{$this->podcastTrack->titre}</h2>
            <p><b>Auteur :</b> {$this->podcastTrack->auteur}</p>
            <p><b>Date :</b> {$this->podcastTrack->date}</p>
            <p><b>Genre :</b> {$this->podcastTrack->genre}</p>
            <p><b>Durée :</b> {$this->podcastTrack->duree} secondes</p>
            <audio controls>
                <source src='{$this->podcastTrack->nomFichAudio}' type='audio/mpeg'>
                Votre navigateur ne supporte pas la balise audio.
            </audio>
        </div>
        ";
    }

}