<?php

namespace td4Et5Et7\render;

use td4Et5Et7\audio\lists\AudioList;
use td4Et5Et7\render;

class AudioListRenderer implements render\Renderer
{
    private AudioList $list;

    public function __construct(AudioList $list)
    {
        $this->list = $list;
    }

    public function render(int $selector = 0): string
    {
        $html = "<h2>{$this->list->__get('nom')}</h2><ul>";
        foreach ($this->list->__get('pistes') as $p) {
            $html .= "<li>{$p->__get('titre')} - {$p->__get('genre')}</li>";
        }
        $html .= "</ul>";
        $html .= "<p>{$this->list->__get('nbPistes')} pistes, durée totale : {$this->list->__get('dureeTotale')}s</p>";
        return $html;
    }
}