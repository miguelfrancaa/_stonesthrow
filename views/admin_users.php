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
			<h1>Gestao de Utilizadores</h1>

			<table>
				<tr class="head-line">
					<th>ID</th>
					<th>NAME</th>
					<th>USERNAME</th>
					<th>EMAIL</th>
					<th>ADDRESS</th>
					<th>CITY</th>
					<th>POSTAL CODE</th>
					<th>COUNTRY</th>
					<th>CREATED_AT</th>
					<th>BIRTH</th>
					<th>ACTIONS</th>
				</tr>
<?php
				foreach($users as $user){
					echo "
						<form method='post' action='/delete_user'>
						<input type='hidden' name='user_id' value='".$user["user_id"]."'>
						<tr>
							<th>". $user["user_id"] ."</th>
							<th>". $user["name"] ."</th>
							<th>". $user["username"] ."</th>
							<th>". $user["email"] . "</th>
							<th>". $user["address"] ."</th>
							<th>". $user["city"] ."</th>
							<th>". $user["postal_code"] ."</th>
							<th>". $user["code"]."</th>
							<th>". $user["created_at"] ."</th>
							<th>". $user["birth"] ."</th>
							<th>
							<button type='submit' name='send' class='apagar'>Block User</button>
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