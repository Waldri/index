<?php
	
	//requer arquivo de conexao
	require("conectdb.php");
	
	//variavel que seleciona a tabela
	$td = "SELECT * FROM td_mural";
	
	//limite
	$limite = mysql_query("$td");
	
	
	//comando para exibir
	while ($td = mysql_fetch_array($limite) ) {
		$id_msg = $tb["id_msg"];
		$nome	= $td["nome"];
		$msg	= $td["msg"];
		$data	= $td["data"];
		$hora	= $td["hora"];
		
		echo "$id_msg <br> De: $nome <br> Mensagem: <br> $msg";
		echo "<br> data: $data e hora: $hora <br> <br>";

	//fim do while
	}
	
?>