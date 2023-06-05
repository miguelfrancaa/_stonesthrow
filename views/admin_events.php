<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>StonesThrow BACKEND</title>
		<meta name="description" content="BACKEND - SITE">
		<meta name="keywords" content="BACKEND - SITE">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/styleadmin.css">
	</head>
	<body class="admin-crm inicio-page">
		<?php require("includes/menuback.php"); ?>
		<main class="pagina-geral"> 
			<h1>Gestao de Produtos</h1>

			<div class="accoes-gerais">
				<a href="newevent/">Novo Produto</a>
			</div>

			<table>
				<tr class="head-line">
					<th>ID</th>
					<th>LOCAL</th>
					<th>EVENT DATE</th>
					<th>MODE</th>
					<th>LINK</th>
					<th>ARTIST</th>
					<th>ACTIONS</th>
				</tr>
<?php
				foreach($events as $event){
					echo "
						<form method='post' action='/delete_event'>
						<input type='hidden' name='event_id' value='".$event["event_id"]."'>
						<tr>
							<th>". $event["event_id"] ."</th>
							<th>". $event["local"] ."</th>
							<th>". $event["event_date"] ."</th>
							<th>". $event["mode"] ."</th>
							<th>". $event["link"] ."</th>
							<th>". $event["artist_id"] ."</th>
							<th>
							<button type='submit' name='send' class='apagar'>Eliminar</button>
							<a href='/edit_product/". $event["event_id"] ."' class='editar'>Editar</a>
							</th>
						</tr>
						</form>
					";
				}
?>
					</tr>
			</table>



		</main>
	</body>
</html>