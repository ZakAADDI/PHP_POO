<?php

namespace App\Animals; // Dossier dans lequel se trouve la classe que j'écris (ici c'est Fish)

    class Fish extends Animal //Extension de Animal par Fish
    {

        protected function getNoise():string
        {
            return 'The '.$this->getName.'does bloubloublou';
        }
        }

