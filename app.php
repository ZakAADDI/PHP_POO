<?php

namespace App;

require __DIR__ . '/vendor/autoload.php';


use App\Animals\Fish; // use = namespace de la classe + la classe que l'on veut utiliser, appeler.
use App\Animals\Elephant;


// Here comes your code.

$myFish = new Fish('Superfish');
echo $myFish->noise();

$myElephant = new Elephant('Dumbo');
echo $myElephant->noise();