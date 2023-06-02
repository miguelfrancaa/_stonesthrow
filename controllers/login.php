<?php

	if(isset($_POST["send"]) && isset($_POST["csrf_token"]) && $_POST["csrf_token"] === $_SESSION["csrf_token"]){

		if($_POST["captcha"] === $_SESSION["captcha"]){

		if (
			isset($_POST["username"]) &&
			isset($_POST["password"]) &&
			mb_strlen($_POST["username"]) >= 4 &&
			mb_strlen($_POST["username"]) <= 32 &&
			mb_strlen($_POST["password"]) >= 8 &&
			mb_strlen($_POST["password"]) <= 500


		) 
		{
			require("models/users.php");

			$modelUsers = new Users();

			$Allusers = $modelUsers->checkUserInfo();

			foreach($Allusers as $Alluser){
				if ($_POST["username"] != $Alluser["username"]) {
					$mess = "There is no account with this username.";
				}else{		

					$user = $modelUsers->getUser($_POST["username"]);

					if(
						!empty($user) &&
						password_verify($_POST["password"], $user["password"])
					){
						$_SESSION["user_id"] = $user["user_id"];
						header("Location: /cart/");
						$mess = "There is no account with this username.";
					}
					else{
						http_response_code(401);
						$mess = "Username ou password incorreto";
						break;
						header("Location: /login/");

					}
					}
		
	}
				}
			}else{
				echo "captcha is not correct";
			}
			}

$_SESSION["csrf_token"] = bin2hex(random_bytes(20));

require("views/login.php");