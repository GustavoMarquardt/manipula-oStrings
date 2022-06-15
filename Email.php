<?php


class Email
{
    private string $email;

    public function __construct(string $email)
    {
        if(!$this->verificaValidadeEmail($email)){
            $this->email = 'email invalido';
            echo "Email: $this->email".PHP_EOL;
            return;
        }
        $this->email = $email;
        echo "Email: $this->email".PHP_EOL;
    }

    private function verificaValidadeEmail($email): bool
    {
        // verifica se o email é valido
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}