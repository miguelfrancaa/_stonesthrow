<?php
	if(isset($url_parts[2])){
		$option = $url_parts[2]
	}

	if(!empty($url_parts[3])) {
		$resource_id = $url_parts[3];
	}

	if(!isset($admin)) {
		http_response_code(401);

		require("views/adminlogin.php");

		exit;
	}
?>