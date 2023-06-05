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
			<h1>Gestao de Videos</h1>

			<div class="accoes-gerais">
				<a href="new_video/">Novo Video</a>
			</div>

			<table>
				<tr class="head-line">
					<th>ID</th>
					<th>LINK(YOUTUBE)</th>
					<th>NAME</th>
					<th>ARTIST_ID</th>
					<th>ACTIONS</th>
				</tr>
<?php
				foreach($videos as $video){
					echo "
						<form method='post' action='/delete_video'>
						<input type='hidden' name='video_id' value='".$video["video_id"]."'>
						<tr>
							<th>". $video["video_id"] ."</th>
							<th>". $video["youtube_link"] ."</th>
							<th>". $video["name"] ."</th>
							<th>". $video["artist_id"] ."</th>
							<th>
							<button type='submit' name='send' class='apagar'>Eliminar</button>
							<a href='/edit_video/". $video["video_id"] ."' class='editar'>Editar</a>
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