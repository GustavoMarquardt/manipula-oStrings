<?php

    class Telefone {

        private string $telefone;

        public function __construct(string $telefone)
        {
            if(!$this->verificaValidadeTelefone($telefone)){
                $this->telefone = 'telefone invalido';
                echo "Telefone: $this->telefone".PHP_EOL;
                return;
            }
            $this->telefone = $telefone;
            echo "Telefone: $this->telefone".PHP_EOL;
        }

        private function verificaValidadeTelefone($telefone): bool
        {
            // verifica se o telefone é valido
            return filter_var($telefone, FILTER_VALIDATE_REGEXP,
            // ^ é para iniciar com o telefone e $ é para terminar com o telefone
            // d2 é para definir que o telefone tem 2 digitos(apenas números), no caso o DD
            // o d{4,5} é para definir que o telefone tem 4 ou 5 digitos(apenas números)
            // os \ \ seriam os valores que estamos esperando no meio delas
             array("options"=>array("regexp"=>"/^\d{2}\ \d{4,5}\-\d{4}$/")));
        }
    }