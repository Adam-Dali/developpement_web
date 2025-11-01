<?php

namespace td4Et5\audio\tracks;

require_once __DIR__ . '/../../exception/InvalidPropertyNameException.php';
require_once __DIR__ . '/../../exception/InvalidPropertyValueException.php';

use td4Et5\exception\InvalidPropertyNameException;
use td4Et5\exception\InvalidPropertyValueException;

class AudioTrack
{
    protected string $titre;
    protected string $genre;
    protected int $duree;
    protected string $nomFichAudio;

    public function __construct($titre, $nom)
    {
        $this->titre = $titre;
        $this->nomFichAudio = $nom;
        $this->duree = 0;
        $this->genre = "";
    }

    /**
     * @throws Exception
     */
    public function __get(string $attr): mixed
    {
        if (property_exists($this, $attr)) {
            return $this->$attr;
        }
        throw new InvalidPropertyNameException("Propriété invalide: $attr");
    }

    public function __set(string $attr, mixed $val): void
    {
        if (in_array($attr, ['titre', 'fichierAudio'])) {
            throw new InvalidPropertyNameException("Propriété invalide: $attr");
        }

        if ($attr === 'duree' && $val < 0) {
            throw new InvalidPropertyValueException("Propriété invalide: duree < 0");
        }

        if (property_exists($this, $attr)) {
            $this->$attr = $val;
        } else {
            throw new InvalidPropertyNameException("Propriété invalide: $attr");
        }
    }

    public function __toString(): string
    {
        return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
    }
}