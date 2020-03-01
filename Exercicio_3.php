<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Exemplo 3</title>
		<link rel="stylesheet" type="text/css" href="css/Op1.css"/>
	</head>
	
	<body>
	<center>
	<div id="phpV">
		<center>
	
		<?php 
			//Declarando variaveis...
			$var1 = 1;//...inteiro
			$varX = 9.50;//...ponto flutuante
			$varY = 9.50;//...ponto flutuante
			
			$var2 = $varX + $varY;//...que recebe o resultado de uma expressão
			
			$varSTR = "Atribui string";//...texto - String
			$varletra = "a";//...caracter
			$varbool = true;//...lógica
			
			/*Informando o valor das variaveis ao Usuário*/
			echo "<p id='Tit'><b>Exemplo de uma aplicação em</br>PHP</b></p>";
			print "<p>";
			
			echo "Conteúdo de var1: <Vals>", $var1;
			print "</Vals><p>";
			
			echo "Conteúdo de varX: <Vals>", $varX;
			print "</Vals><p>";
			
			echo "Conteúdo de varY: <Vals>", $varY;
			print "</Vals><p>";
			
			echo "Conteúdo de var2: <Vals>", $var2;
			print "</Vals><p>";
			
			echo "Conteúdo de varSTR: <Vals>", $varSTR;
			print "</Vals><p>";
			
			echo "Conteúdo de varletra: <Vals>", $varletra;
			print "</Vals><p>";
			
			echo "Conteúdo de varbool: <Vals>", $varbool;
			print "</Vals><p>";
			
		?>
		</center>
	</div>
	</center>
		
	</body>
</html>
	
