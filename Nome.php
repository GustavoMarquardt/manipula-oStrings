<?php


        class Nome{

            private string $nome;
            private string $sobreNome;

            public function __construct(string $nome)
            {
                // o 2 ali é para saber em quantas partes foi dividido o nome
                if(!$this->verificaValidadeNome($nome)){
                    $this->nome = 'nome invalido';
                    echo "Nome: $this->nome".PHP_EOL;
                    return;
                }
                $nomes =  explode(' ', $nome, 2);
                    $this->nome = $nomes[0];
                    $this->sobreNome = $nomes[1];
                    echo "Nome: $this->nome".PHP_EOL;
                    echo "Sobrenome: $this->sobreNome".PHP_EOL;
                    return;
            }

            private function verificaValidadeNome($nome): bool
            {
                // verifica se o nome é valido
                if(strlen($nome) < 3) {
                    return false;
                }
                return filter_var($nome, FILTER_VALIDATE_REGEXP,
                 array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")));
            }
}