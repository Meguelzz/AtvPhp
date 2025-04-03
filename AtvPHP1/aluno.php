<?php
class aluno extends pessoa {
function __construct(nome, idade){
    parent::__construct(nome,idade);}
function falar(){
    echo "perguntando...";}
}
?>
