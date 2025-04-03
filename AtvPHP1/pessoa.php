<?php
class pessoa
{
    public nome;
    public idade;

    public function __construct(nome,idade)
    {
        $this->nome =nome;
        $this->idade = idade;}

    public function getNome() {
    return $this->nome;}

public function getIdade() {
    return $this->idade;}
    
    public function falar()
    {
        echo "Falando...";}
}
?>
