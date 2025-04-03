<?php
require_once "pessoa.php";
require_once "professor.php";
require_once "aluno.php";

pessoa = new pessoa("Pedro", "19");

echo pessoa->getNome() . "<br>";
echo pessoa->getIdade() . "<br>";
echo pessoa->falar() . "<br>" . "<br>";



aluno = new aluno ("Lucas", "20");

echo aluno->getNome() . "<br>";
echo aluno->getIdade() . "<br>";
echo aluno->falar() . "<br>" . "<br>";


professor = new professor ("Victor", "19");

echo professor->getNome() . "<br>";
echo professor->getIdade() . "<br>";
echo professor->falar();
?>
