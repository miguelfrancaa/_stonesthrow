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
			<h1>Administradores</h1><br><br>

			<form method="post" action="/new_admin">
				<label form="name">NAME</label>
				<input type="text" name="name" required><br><br>
				<label form="name">EMAIL</label>
				<input type="text" name="email" required><br><br>
				<label form="name">PHONE</label>
				<input type="text" name="phone" required><br><br>
				<label form="name">PASSWORD</label>
				<input type="password" name="password" required><br><br>
				<label form="name">REPEAT PASSWORD</label>
				<input type="password" name="repeatPassword" required><br><br><br>

				<button type="submit" name="send" class="enviar">NEW ADMIN</button>
			</form>



		</main>
	</body>
</html>