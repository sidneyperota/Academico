<?php

	echo "Versao 1.0.01";
	echo "Iniciar Conexao";

	include 'banco.php';

   	$conexao = conectar();

   	$sql = 'SELECT * FROM movimento_caixa';

	$resultado = mysqli_query($conexao, $sql );

	$lancamento = array();

	echo "<h1> Movimento do Caixa </h1>";

	echo "<table border='1'>";
	echo "<tr> <td>Id</td>  <td>Data</td>  <td>Conta</td> <td> Operacao </td> <td> Histórico </td> <td> Valor </td> </tr>";

	while ($lancamento = mysqli_fetch_assoc($resultado)) {
		$lancamentos[] = $lancamento;
		echo "<tr>";
		echo "<td>".$lancamento['id']."</td>";
		echo "<td>".$lancamento['data']."</td>";
		echo "<td>".$lancamento['conta']."</td>";
		echo "<td>".$lancamento['operacao']."</td>";
		echo "<td>".$lancamento['historico']."</td>";
		echo "<td>".$lancamento['valor']."</td>";
		echo "</tr>";
	}

	echo "</table>";

	echo "<br>";
	echo "<a href=\"index.php\"> Retornar </a>";
	echo "Finalizado a conexao!"; 

?>