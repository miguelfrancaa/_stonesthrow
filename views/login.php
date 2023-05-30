<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>STONES THROW</title>
		<meta name="keywords" content="STONES THROW">
		<link rel="icon" href="img/logost.ico">
		<meta name="description" content="stones throw, records, hiphop, music, alternative, quasimoto, mfdoom, underground, label">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
	</head>
<?php
	require("includes/header.php");
?>
	<main>
<?php
	if (!isset($_SESSION["user_id"])) {
?>
		<div class="forms">
		<div class="logFormsLogin">
		<h1 class="formTitle">LOGIN</h1><br>
		<form method="post" action="/login/">
			<label class="formLabels formLabel1" for="username">USERNAME</label><br>
			<input class="formInputs formInput1" type="text" name="username" minlength="4" maxlength="32" required><br><br><br>
			<label class="formLabels formLabel2" for="password">PASSWORD</label><br>
			<input class="formInputs formInput2" type="password" name="password" minlength="8" maxlength="500" required><br><br><br>
			<div class="buttonForm"><button type="submit" name="send">SIGN IN</button><a href="/register/">CREATE ACCOUNT</a></div>
			<div><?php

			if(isset($_POST["send"])){
				echo $mess;
			}

		?></div>
		</form>
		</div>
		</div>
<?php
}else{
?>
		<div class="forms">
		<div class="logFormsLogin">
		<h1 class="formTitle">ACCOUNT</h1><br>
		<form method="post" action="/logout/">
			<div>JÀ ESTA LOGADO</div><br><br>
			<div class="buttonForm"><button type="submit" name="send">LOGOUT</button></div>
		</form>
		</div>
		</div>
<?php
}
?>
	</main>


	<script src="/js/jquery-3.6.0.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/script.js"></script>
	</body>
</html>