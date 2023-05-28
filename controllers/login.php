<?php

	if(isset($_SESSION["user_id"])){
		echo "ja esta logado";
	}

	if(isset($_POST["send"])){

		foreach ($_POST as $key => $value) {
			$_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
		}

			if (
				isset($_POST["username"]) &&
				isset($_POST["password"]) &&
				mb_strlen($_POST["username"]) >= 4 &&
				mb_strlen($_POST["username"]) <= 32 &&
				mb_strlen($_POST["password"]) >= 8 &&
				mb_strlen($_POST["password"]) <= 500


			) {
				
				require("models/users.php");

				$model = new Users();

				$user = $model->getUser($_POST["username"]);

					if(
						!empty($user) &&
						password_verify($_POST["password"], $user["password"])
					){
						$_SESSION["user_id"] = $user["user_id"];
						header("Location: /cart/");
					}
					else{
						http_response_code(401);
						$message = "Username ou password incorreto";
						echo $message;
					}
					}
		
	}

		require("views/login.php");
?>