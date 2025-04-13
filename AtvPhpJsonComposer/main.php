<?php

include_once("./model/Aluno.php");

$miguel = new Aluno("Miguel", 18);
$stringJsonMiguel = json_encode($miguel);

echo $stringJsonMiguel;