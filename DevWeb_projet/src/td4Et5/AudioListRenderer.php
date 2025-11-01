<?php

namespace td4Et5;

class AudioListRenderer implements \Renderer
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