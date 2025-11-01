<?php

namespace td4Et5\render;
interface Renderer
{
    public const COMPACT = 1;
    public const LONG = 2;

    public function render(int $selecteur): string;
}