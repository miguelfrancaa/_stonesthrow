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
		<div class="forms">
		<div class="logForms">
		<h1 class="formTitle">CREATE ACCCOUNT</h1><br>
		<form method="post" action="/register">
			<label class="formLabels formLabel1" for="username">NAME</label><br>
			<input class="formInputs formInput1" type="text" name="name" value="" minlength="6" maxlength="100" required><br><br><br>
			<label class="formLabels formLabel8" for="username">USERNAME</label><br>
			<input class="formInputs formInput8" type="text" name="username" value="" minlength="6" maxlength="30" required><br><br><br>
			<label class="formLabels formLabel2" for="email">EMAIL</label><br>
			<input class="formInputs formInput2" type="email" name="email" required><br><br><br>
			<label class="formLabels formLabel3" for="password">PASSWORD</label><br>
			<input class="formInputs formInput3" type="password" name="password" minlength="8" maxlength="500" required><br><br><br>
			<label class="formLabels formLabel4" for="repeatPassword">REPEAT PASSWORD</label><br>
			<input class="formInputs formInput4" type="password" name="repeatPassword" minlength="8" maxlength="500" required><br><br><br>
			<input type="hidden" name="csrf_token" value="<?= $_SESSION["csrf_token"]?>">
			<label class="formLabels formLabel8">COUNTRY 
				<select name="country" required>
<?php
		foreach ($countries as $country) {
			echo "
				<option value='".$country["code"]."'>".$country["countryname"]."</option>
			";
		}
?>
				</select>
			</label><br><br><br>
			<label class="formLabels formLabel5" for="address">ADDRESS</label><br>
			<input class="formInputs formInput5" type="text" name="address" minlength="10" maxlength="200" required><br><br><br>
			<label class="formLabels formLabel6" for="postalcode">POSTAL CODE</label><br>
			<input class="formInputs formInput6" type="text" name="postalcode" minlength="4" maxlength="32" required><br><br><br>
			<label class="formLabels formLabel7" for="city">CITY</label><br>
			<input class="formInputs formInput7" type="text" name="city" minlength="3" maxlength="50" required><br><br><br>
			<label class="formLabels" for="birthday">BIRTH DATE</label><br><br>
			<input class="formInputs" type="date" name="birthdate" minlength="6" maxlength="30" required><br><br><br>
			<div class="buttonForm"><button type="submit" name="send">CREATE ACCOUNT</button><a href="/login/">LOGIN</a>
<?php
		if(isset($_POST["send"])){
		echo $message;
		}
?>
			</div>

		</form>
		</div>
		</div>
	</main>

	<script src="/js/jquery-3.6.0.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/script.js"></script>
	</body>
</html>