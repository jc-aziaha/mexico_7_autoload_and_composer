<?php

    // Chargement de l'autoloader de php
    require __DIR__ . "/vendor/autoload.php";

use App\Classes\Chat;
use App\Classes\Chien;
use App\Classes\Souris;

    $chien  = new Chien();
    $chat   = new Chat();
    $souris = new Souris();

    $chien->crier();
    echo "<br/>";
    $chat->crier();
    echo "<br/>";
    $souris->crier();