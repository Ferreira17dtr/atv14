<?php

if(isset($_POST['txt_nome']) && isset($_POST['txt_idade'])) {
	$nome = $_POST['txt_nome'];
	$idade = $_POST['txt_idade'];
	echo "Nome:" .$nome. "<br>";
	echo "Idade:" .$idade;

}
else {
	echo "Erro!!!";
}

?>