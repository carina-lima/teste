<?php

require_once 'Inicia.php';
require_once 'Funcoes.php';

$PDO = conecta_bd();

$arrayTipoMovimentacao = $PDO->query('SELECT * FROM tipomovimentacao')->fetchAll();

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">	
	<title>Cadastro de Movimentação</title>
</head>
<body>
	<h2>Cadastro de Movimentação</h2>
	<form action="Inclui_Movimentacao.php" method="post">
		
		<label for="idtipomovimentacao">Tipo de Movimentação:</label>
		<select name="idtipomovimentacao" id="idtipomovimentacao">
			<option value=''>Selecione</option>
			<?php
				foreach( $arrayTipoMovimentacao as $value ){
					echo "<option value='".$value['idtipomovimentacao']."'>".$value['descricao']."</option>";
				}
			?>
		</select> <br><br>

		<label for="Dt_Hora_Inicio">Data e Hora de Início:</label>
		<input type="text" name="Dt_Hora_Inicio" id="Dt_Hora_Inicio"><br><br>

		<label for="Dt_Hora_Fim">Data e Hora de Fim:</label>
		<input type="text" name="Dt_Hora_Fim" id="Dt_Hora_Fim"><br><br>

		<br>
		<input type="submit" value="Incluir">
	</body>
	</html>

