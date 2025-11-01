<?php

namespace td4Et5\audio\lists;

class Playlist extends AudioList
{
    public function addTrack(AudioTrack $track): void
    {
        $this->pistes[] = $track;
        $this->nbPistes++;
        $this->dureeTotale += $track->__get('duree');
    }

    public function retirerPistes(int $index): void
    {
        if (isset($this->pistes[$index])) {
            $this->dureeTotale -= $this->pistes[$index]->__get('duree');
            unset($this->pistes[$index]);
            $this->pistes = array_values($this->pistes);
            $this->nbPistes--;
        }
    }

    public function ajouterPistes(array $p): void
    {
        foreach ($p as $t) {
            if (!in_array($t, $this->pistes, true)) {
                $this->addTrack($t);
            }
        }
    }

}