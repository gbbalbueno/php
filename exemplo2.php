<?php
/*
$anoNascimento = 1990;

$nomeCompleto = "";
//Na linha de baixo temos uma variavel com número no nome
*/
$nome1 = "João"
$sobrenome = "Pedro"
//concatenar variavel
$nomeCompleto = $nome1 ." ". $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;
//quebra de linha
echo "<br/>";
//limpa a variavel
unset($nome1);
//se ele existir
if(isset($nome1)){
	
	echo $nome1;

}

?>