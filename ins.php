<?php
    /**requer o script*/
    require("conectdb.php");



    $data = date('d-m-y');

    $hora = strftime('%H:%M:%S');
    
    $nome = $_POST['nome'];
    
    $msg = $_POST['msg'];


    $sqlinsert = "INSERT INTO td_mural (id_msg, nome, msg, data, hora)
    VALUES ('', '$nome', '$msg', '$data', '$hora')";
    
    
    mysql_query($sqlinsert) or die ("erro");

	echo "$data -|- $hora <BR> Obrigado: $nome a mensagen: <BR> $msg <BR> foi enviada!";
?>
