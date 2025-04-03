<?php
class professor extends pessoa {
    function __construct(nome, idade){
        parent::__construct(nome,idade);}

    function falar(){
        echo "dando aula...";}
}
?>
