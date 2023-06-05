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
			<h1>Gestao de Noticias</h1>

			<div class="accoes-gerais">
				<a href="new_new">Nova Noticia</a>
			</div>

			<table>
				<tr class="head-line">
					<th>ID</th>
					<th>TITLE</th>
					<th>CONTENT</th>
					<th>CONTENT2</th>
					<th>IMAGE</th>
					<th>VIDEO</th>
					<th>IMAGE-CARROUSSEL</th>
					<th>TOP(%)</th>
					<th>LEFT(px)</th>
					<th>CREATED AT</th>
					<th>ARTIST</th>
					<th>ACTIONS</th>
				</tr>
<?php
				foreach($news as $new){
					echo "
						<form method='post' action='/delete_new'>
						<input type='hidden' name='new_id' value='".$new["new_id"]."'>
						<tr>
							<th>". $new["new_id"] ."</th>
							<th>". $new["title"] ."</th>
							<th>". substr($new["content"], 0, 50) ."...</th>
							<th>". substr($new["content2"], 0, 50) ."...</th>
							<th>". $new["image"] ."</th>
							<th>". $new["video"] ."</th>
							<th>". $new["imageCarroussel"] ."</th>
							<th>". $new["top"] ."</th>
							<th>". $new["leftpx"] ."</th>
							<th>". $new["created_at"] ."</th>
							<th>". $new["artist_id"] ."</th>
							<th>
							<button type='submit' name='send' class='apagar'>Eliminar</button>
							<a href='/edit_new/". $new["new_id"] ."' class='editar'>Editar</a>
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