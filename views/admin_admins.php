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
			<h1>Administradores</h1>

			<div class="accoes-gerais">
				<a href="/new_admin/">Novo Administrador</a>
			</div>

			<table>
				<tr class="head-line">
					<th>ID</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>PHONE</th>
					<th>REGISTER DATE</th>
					<th>LAST LOGIN</th>
					<th>ACTIONS</th>
				</tr>
<?php
				foreach($admins as $admin){
					echo "
						<form method='post' action='/delete_artist'>
						<input type='hidden' name='admin_id' value='". $admin["admin_id"] ."'>
						<tr>
							<th>". $admin["admin_id"] ."</th>
							<th>". $admin["name"] ."</th>
							<th>". $admin["email"] ."</th>
							<th>". $admin["phone"] ."</th>
							<th>". $admin["register_date"] ."</th>
							<th>". $admin["last_login"] ."</th>
							<th>
							<button type='submit' name='send' class='apagar'>Eliminar</button>
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