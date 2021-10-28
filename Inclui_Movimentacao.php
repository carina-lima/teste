<?php
require_once 'Inicia.php';

$idcliente = isset ($_POST ['idcliente']) ? $_POST ['idcliente']: null;
$nro_container = isset ($_POST ['nro_container']) ? $_POST ['nro_container']: null;
$tipo = isset ($_POST ['Tipo']) ? $_POST ['Tipo']: null;
$status = isset ($_POST ['Status']) ? $_POST ['Status']: null;
$categoria = isset ($_POST ['Categoria']) ? $_POST ['Categoria']: null;

$PDO =conecta_bd();
$sql = "INSERT INTO container (idcliente, Nro_Container, Tipo, Status, Categoria)
values (:idcliente, :Nro_Container, :Tipo, :Status, :Categoria)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':idcliente', $idcliente);
$stmt->bindParam(':Nro_Container', $nro_container);
$stmt->bindParam(':Tipo', $tipo);
$stmt->bindParam(':Status', $status);
$stmt->bindParam(':Categoria', $categoria);
	

if($stmt->execute()){
	header('Location: Form_Movimentacao.php');
}
else{
	echo "Ocorreu um erro";
	print_r($stmt->errorInfo());
}
?>