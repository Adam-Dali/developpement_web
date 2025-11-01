<?php

namespace td4Et5Et7\loader;

class Autoloader
{
    private string $prefix;
    private string $baseDir;

    public function __construct(string $p, string $b)
    {
        $this->prefix = $p;
        $this->baseDir = rtrim($b, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
    }

    public function loadClass(string $nomClasse): void
    {
        // Vérifier si le nom de la classe commence par le prefixe
        if (strpos($nomClasse, $this->prefix) !== 0) {
            return;
        }

        // Retirer le préfixe du nom de la classe
        $relativeClass = substr($nomClasse, strlen($this->prefix));

        // Remplacer les \ par des / et ajouter .php
        $file = $this->baseDir . str_replace('\\', DIRECTORY_SEPARATOR, $relativeClass) . '.php';

        // Charger le fichier si il existe
        if (is_file($file)) {
            require_once $file;
        }
    }

    public function register(): void
    {
        spl_autoload_register([$this, 'loadClass']);
    }

}