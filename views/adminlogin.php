<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BACKEND - SITE</title>
		<meta name="description" content="BACKEND - SITE">
		<meta name="keywords" content="BACKEND - SITE">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/styleadmin.css">
	</head>
	<body class="admin-crm login-page">
		<main>
			<img src="/img/logost.png">
			<form action="/admin" method="post">
				<label>
					Email:<br>
					<input type="email" name="email" placeholder="Escreva o email" minlength="6" maxlength="252">
				</label>
				<label>
					Palavra-Passe:<br>
					<input type="password" name="password" placeholder="Escreva a pass" minlength="8" maxlength="500">
				</label>
				<input type="hidden" name="csrf_token" value="<?= $_SESSION["csrf_token"] ?>">
				<button type="submit" name="send">Login</button>
			</form>
		</main>

		<script src="js/jquery-3.6.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>