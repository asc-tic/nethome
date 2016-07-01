<?php 
/************************************************************************************************************ 
Nome Arquivo...: template.php
Descrição......: Arquivo base/modelo para os demais aquivos do sistema

Nome Projeto...: Portal NetHome
Data...........: Julho / 2016
Company........: ASC - Tecnologia da Informação e Comunicação
WebSite........: 
Developer......: Alex Sanders Carvalho
Email..........: asc.tic1@gmail.com
/************************************************************************************************************ */
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		<title>Portal NetHome [ASC-TIC]</title>

		<!-- Bootstrap -->
		<link href="css/reset.css" rel="stylesheet">		
		<link href="css/jquery-ui.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		
		<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		
	</head>
	
	<body>
		<?php include_once("navbar.php"); ?>
		<?php include_once("header.php"); ?>
	
		<h1>Hello, world!</h1>

		<?php include_once("footer.php"); ?>
	</body>
</html>