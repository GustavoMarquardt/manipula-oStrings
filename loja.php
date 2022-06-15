<?php

include 'Email.php';
include 'CPF.php';
include 'Nome.php';
include 'Telefone.php';

$nome = new Nome('Gustavo Siqueira Marquardt');
$email = new Email('gustavo.marquardt@unifei.edu.br');
$cpf = new CPF('123.456.789-00');
$telefone = new Telefone('35 99836-4569');