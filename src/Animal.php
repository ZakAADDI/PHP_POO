<?php

namespace App;

    abstract class Animal{

        private $name;

        public function __construct(string $name) // Servira lors de l'instanciation d'un objet
        {
            $this->name = $name;
        }

        /**
         * @return string
         */
        public function getName(): string
        {
            return $this->name;
        }

        abstract protected function getNoise() : string; // accessible seulement par les classes enfants

        public function noise() : string // accessibilité par tous y compris app.php
        {
            return $this->getNoise(); // permet de récupérer la fonction getNoise qui est protégée et de l'utiliser
                                    // à partir de d'app.php
        }

        }
