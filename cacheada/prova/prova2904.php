<?php
$valor = $_GET["valor"];
$salario = $_GET["salario"];
$anos = $_GET["anos"];
$anos = $anos * 12;
$prestacao = $valor / $anos;
if(($salario * 30 / 100)<$prestacao){
    echo"emprestimo negado";
}
else{
    echo " emprestimo aceito, irá pagar $prestacao por mes";
}
?>