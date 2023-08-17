<?php
//servidor (host) onde esta rodando o php
$hostname = 'localhost';
//usuario
$username = 'root';
//senha haha aqule lembra
$senha = 'zxw123';
//banco de dados
$banco = 'dark';
//concexao
$db = mysql_connect($hostname, $username, $senha);
//selecioar banco de dados
mysql_select_db($banco, $db);
?>
