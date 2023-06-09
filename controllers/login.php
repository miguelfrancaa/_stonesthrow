<?php
	if(isset($_POST["send"]) && isset($_POST["csrf_token"]) && $_POST["csrf_token"] === $_SESSION["csrf_token"]){
		
	if($_POST["captcha"] === $_SESSION["captcha"]){
		if (isset($_POST["username"]) &&
			isset($_POST["password"]) &&
			mb_strlen($_POST["username"]) >= 4 &&
			mb_strlen($_POST["username"]) <= 32 &&
			mb_strlen($_POST["password"]) >= 8 &&
			mb_strlen($_POST["password"]) <= 500) {
					
					require("models/users.php");

					$modelUsers = new Users();

					$usersUsername = $modelUsers->checkUsername($_POST["username"]);


					if ($usersUsername[0] == 0) {
						$message = 'There is no account with this username.';
					}else{

						$user = $modelUsers->getUser($_POST["username"]);
						if(password_verify($_POST["password"], $user["password"])){
							$_SESSION["user_id"] = $user["user_id"];
							header("Location: /cart/");
						}else{
							$message = 'Password is not correct.';
						}
					}

		}else{
				echo "Please fill the form correctly.";
		}
	}else{
		$message = 'Captcha text is not correct.';
	}
}
	

$_SESSION["csrf_token"] = bin2hex(random_bytes(20));

require("views/login.php");

?>