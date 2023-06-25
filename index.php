<?php
	session_start();

	$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

	define("ENV", parse_ini_file(".env"));

	$controller = "home";

	$allowed_controllers = [
    "400", "404", "admin", "admin_admins",
    "admin_artists", "admin_events", "admin_news",
    "admin_orderdetails", "admin_orders", "admin_products", 
    "admin_users", "admin_videos", "adminsmenu", "artist"
    , "artists", "cancel_order", "cart", "checkout"
    , "delete_artist", "delete_event", "delete_new"
    , "delete_product", "delete_user", "delete_video"
    , "edit_event", "edit_new", "edit_product"
    , "edit_video", "edit_artist", "events", "home", "login"
    , "logout", "new_admin", "new_artist", "new_event"
    , "new_new", "new_product", "new_video", "newcontent"
    , "news", "productdetails", "products"
    , "register", "requests", "shop", "subcategories", "videos"
];


	if(!empty($url_parts[1])) {
		$controller = $url_parts[1];
	}

	if(!empty($url_parts[2])) {
		$id = $url_parts[2];
	}

	if(!empty($url_parts[3])) {
	$resource_id = $url_parts[3];
	}

	 if( !in_array($controller, $allowed_controllers) ) {
    http_response_code(404);
    die("NOT FOUND!");
} 


	require("controllers/" . $controller . ".php");
	
?>