<?php

require_once("class/db.class.php");

$con = new Database();
$link = $con->getConexao();

$smtm = $link->prepare("select * from principal");
$smtm->execute();

$data = $smtm->fetchAll();

print_r($data);

?>