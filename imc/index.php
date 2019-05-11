<?php
// carregamento das classes
// Pessoa vem antes pq Imc depende dela,
// então carrego primeiro

include 'classes/Pessoa.php';
include 'classes/Imc.php';

// instanciamento dos objetos
$pessoa = new Pessoa(70, 1.70);
$imc = new Imc($pessoa);

// execução do cálculo
echo $imc->calcular();
?>