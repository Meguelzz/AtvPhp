<?php

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function falar() {
        return $this->nome . ' está falando';
    }

}

    $pessoa1 = new Pessoa('João', 30);
echo $pessoa1->falar() . "/n";


?>