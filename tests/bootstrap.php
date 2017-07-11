<?php
// Get autoloader
require __DIR__ . '/../vendor/autoload.php';

// Initialise twig
$loader = new Twig_Loader_Filesystem(__DIR__ . '/../src');
$twig = new Twig_Environment($loader);

// Get tests
require __DIR__ . '/../functions/PigLatin.php';
require __DIR__ . '/../functions/Numbers.php';
