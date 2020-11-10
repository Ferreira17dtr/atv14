<?php

foreach($_POST as $chave=>$valor)
	echo $chave. ": " .$valor. "<br>";

if(isset($_GET['txt_nome']) && isset($_GET['txt_idade'])) {
	$nome = $_GET['txt_nome'];
	$idade = $_GET['txt_idade'];
	echo "Nome:" .$nome. "<br>";
	echo "Idade:" .$idade;
}
else {
	echo "Erro!!!";
}

?>

