<?php

namespace App\Animals; // Dossier dans lequel se trouve la classe que j'écris (ici c'est Fish)

use App\Animal;

    class Fish extends Animal //Extension de Animal par Fish
    {
        public function __construct(string $name)
        {
            parent::__construct($name);
        }

        protected function getNoise():string
        {
            return 'The '.$this->getName().' does bloubloublou.';
        }
        }



