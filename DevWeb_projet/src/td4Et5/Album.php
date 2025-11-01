<?php

namespace td4Et5;

class Album extends AudioList
{
    protected string $artiste;
    protected string $dateSortie;

    public function __construct(string $nom, array $pistes)
    {
        parent::__construct($nom, $pistes);
        $this->artiste = '';
        $this->dateSortie = '';
    }

    public function setArtiste(string $artiste): void
    {
        $this->artiste = $artiste;
    }

    public function setDateSortie(string $date): void
    {
        $this->dateSortie = $date;
    }

}