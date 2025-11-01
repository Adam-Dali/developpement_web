<?php

namespace td4Et5;

use Exception;

class AudioList
{
    protected string $nom;
    protected array $pistes;
    protected int $nbPistes;
    protected int $dureeTotale;

    public function __construct(string $nom, array $pistes = [])
    {
        $this->nom = $nom;
        $this->pistes = $pistes;
        $this->nbPistes = count($pistes);
        $this->dureeTotale = array_reduce(
            $pistes,
            fn($acc, $p) => $acc + $p->__get('duree'),
            0
        );
    }

    public function __get(string $attr): mixed
    {
        if (property_exists($this, $attr)) {
            return $this->$attr;
        }
        throw new Exception("invalid property : $attr");
    }

}