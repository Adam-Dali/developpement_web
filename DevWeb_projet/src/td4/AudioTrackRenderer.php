<?php
require_once("Renderer.php");

abstract class AudioTrackRenderer implements Renderer
{
    public AudioTrack $track;

    public function __construct(AudioTrack $track){
        $this->track = $track;
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

    public abstract function renderCompact(): string;
    public abstract function renderLong(): string;

}