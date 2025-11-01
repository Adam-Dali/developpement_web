<?php

namespace td4Et5Et7\render;
use td4Et5Et7\audio\tracks\PodcastTrack;

class PodcastTrackRenderer extends AudioTrackRenderer
{

    public PodcastTrack $podcastTrack;

    public function __construct(PodcastTrack $pt)
    {
        $this->podcastTrack = $pt;
    }

    // --- Méthode privée : affichage compact ---
    public function renderCompact(): string
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
    public function renderLong(): string
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