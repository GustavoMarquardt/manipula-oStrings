<?php


        class CPF {
            
            private string $cfp;
            
            public function __construct(string $cpf) {
                if(!$this->verificaValidadeCPF($cpf)){
                    $this->cfp = 'cpf invalido';
                    echo "CPF: $this->cfp".PHP_EOL;
                    return;
                }
                $this->cfp = $cpf;
                echo "CPF: $this->cfp".PHP_EOL;
            }


            private function verificaValidadeCPF($cpf): bool {
                // verifica se o cpf é valido
                return filter_var($cpf, FILTER_VALIDATE_REGEXP,
                 array("options"=>array("regexp"=>"/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/")));
            }
        }