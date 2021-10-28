<?php

require_once 'Inicia.php';
require_once 'Funcoes.php';

$PDO = conecta_bd();

$clients = $PDO->query('SELECT * FROM cliente')->fetchAll();

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Container</title>
</head>
<body>
	<h2>Cadastro de Container - Inclusao</h2>
	<form action="Inclui_Container.php" method="post">
		
		<label for="Cliente">Cliente:</label>
		<input type="text" name="cliente" id="cliente"><br><br>
		<select name="idcliente" id="idcliente">
			<option value=''>Selecione</option>
			<?php
				foreach( $clients as $value ){
					echo "<option value='".$value['idcliente']."'>".$value['nome']."</option>";
				}
			?>
		</select>

		<label for="nro_container">Nro_Container:</label>
		<input type="text" name="nro_container" id="nro_container"><br><br>

		<label for="Tipo20">Tipo: </label>
		<input type="radio" name="Tipo" id="Tipo20" value="20"> <label for="Tipo20">20</label>
		<input type="radio" name="Tipo" id="Tipo40" value="40"> <label for="Tipo40">40</label> <br><br> 

		<label for="StatusCheio">Status: </label>
		<input type="radio" name="Status" id="StatusCheio" value="Cheio"> <label for="StatusCheio">Cheio</label>
		<input type="radio" name="Status" id="StatusVazio" value="Vazio"> <label for="StatusVazio">Vazio</label> <br><br>

		
		<label for="CategoriaImp">Categoria: </label>
		<input type="radio" name="Categoria" id="CategoriaImp" value="Imp"> <label for="CategoriaImp">Importação</label>
		<input type="radio" name="Categoria" id="CategoriaExp" value="Exp"> <label for="CategoriaExp">Exportação</label> <br>

		<br>
		<input type="submit" value="Incluir">
	</body>
	</html>

