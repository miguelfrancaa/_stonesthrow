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
			<h1>Gestao de Artists</h1>

			<div class="accoes-gerais">
				<a href="/new_artist/">Novo Artista</a>
			</div>

			<table>
				<tr class="head-line">
					<th>ID</th>
					<th>NAME</th>
					<th>DESCRIPTION</th>
					<th>PHOTO</th>
					<th>DESCRIPTION PHOTO</th>
					<th>ACTIONS</th>
				</tr>
<?php
				foreach($artists as $artist){
					echo "
						<form method='post' action='/delete_artist'>
						<input type='hidden' name='artist_id' value='". $artist["artist_id"] ."'>
						<tr>
							<th>". $artist["artist_id"] ."</th>
							<th>". $artist["name"] ."</th>
							<th>". substr($artist["description"], 0, 50) ."...</th>
							<th>". $artist["photo"] ."</th>
							<th>". $artist["description_photo"] ."</th>
							<th>
							<button type='submit' name='send' class='apagar'>Eliminar</button>
							<a href='/edit_artist/". $artist["artist_id"] ."' class='editar'>Editar</a>
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