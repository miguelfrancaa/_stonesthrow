<?php


	if(isset($_SESSION["user_id"])){
		header("Location: /login/");
	}

	require("models/countries.php");

	$modelCountries = new Countries();

	$countries = $modelCountries->getCountries();

	$country_codes = [];
	foreach($countries as $country) {
		$country_codes[] = $country["code"];
	}


	if(isset($_POST["send"]) && isset($_POST["csrf_token"]) && $_POST["csrf_token"] === $_SESSION["csrf_token"]){


		foreach($_POST as $key => $value) {
			$_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
		}

		if(
			isset($_POST["name"]) &&
			isset($_POST["username"]) &&
			isset($_POST["email"]) &&
			isset($_POST["password"]) &&
			isset($_POST["repeatPassword"]) &&
			isset($_POST["country"]) &&
			isset($_POST["address"]) &&
			isset($_POST["postalcode"]) &&
			isset($_POST["city"]) &&
			isset($_POST["birthdate"]) &&
			filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) &&
			$_POST["password"] === $_POST["repeatPassword"] &&
			mb_strlen($_POST["name"]) >= 6 &&
			mb_strlen($_POST["name"]) <= 100 &&
			mb_strlen($_POST["username"]) >= 6 &&
			mb_strlen($_POST["username"]) <= 30 &&
			mb_strlen($_POST["password"]) >= 8 &&
			mb_strlen($_POST["password"]) <= 500 &&
			mb_strlen($_POST["address"]) >= 10 &&
			mb_strlen($_POST["address"]) <= 200 &&
			mb_strlen($_POST["city"]) >= 3 &&
			mb_strlen($_POST["city"]) <= 50 &&
			mb_strlen($_POST["postalcode"]) >= 4 &&
			mb_strlen($_POST["postalcode"]) <= 32 &&
			in_array($_POST["country"], $country_codes)
		) {

			require("models/users.php");

			$modelUsers = new Users();

			$usersUsername = $modelUsers->checkUsername($_POST["username"]);

			$usersEmail = $modelUsers->checkEmail($_POST["email"]);

			if($usersUsername[0] > 0){
				$message = "Já existe uma conta com este username.";
			}else if($usersEmail[0] > 0){
				$message = "Já existe uma conta com este email.";
			}else{

			$user_id = $modelUsers->createUser($_POST);

			$_SESSION["user_id"] = $user_id;

			header("Location: /cart/");

			exit;


			}
		}
		else{
			http_response_code(400);
			$message = "Por favor preencher todos os campos corretamente.";
		}
	}


			

$_SESSION["csrf_token"] = bin2hex(random_bytes(20));

require("views/register.php"); 