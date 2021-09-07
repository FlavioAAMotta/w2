<?php
    class Pessoa{
        private $nome;
        private $CPF;
        private $RG;
        private $email;
        private $nascimento;

        public function __construct(){
            $this->RG = -1;
        }

        public function __set($name, $value){
            $this->$name = $value;
        }

        public function __get($name){
            return $this->$name;
        }
    }
?>